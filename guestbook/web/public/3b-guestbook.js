var gb = {
  list : function(){
  // gb.list() : show guestbook entries

    // DATA
    var data = new FormData();
    data.append('req', 'list');

    // AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "2c-ajax-guestbook.php", true);
    xhr.onload = function () {
      document.getElementById("guestbook").innerHTML = this.response;
    };
    xhr.send(data);
  },

  save : function(){
  // gb.save() : save a new guestbook entry

    // DATA
    var data = new FormData();
    data.append('req', 'add');
    data.append('name', document.getElementById("gb-name").value);
    data.append('email', document.getElementById("gb-email").value);
    data.append('text', document.getElementById("gb-message").value);

    // AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "2c-ajax-guestbook.php", true);
    xhr.onload = function () {
      if (this.response=="OK") {
        gb.list();
      } else {
        alert("ERROR SAVING");
      }
    };
    xhr.send(data);
    return false;
  }
};

window.addEventListener("load", gb.list);