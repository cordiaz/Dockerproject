<?php
/* [INIT] */
require  __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-guestbook.php";
$dbLib = new GuestBook();

/* [AJAX REQUESTS] */
switch ($_POST['req']) {
  default:
    echo "ERR";
    break;

  /* [SHOW ALL ENTRIES] */
  // You might want to paginate this, change the sort order, even redo the structure.
  case "list":
    $entries = $dbLib->getAll();
    if (is_array($entries)) { foreach ($entries as $e) { ?>
      <div class='gb-entry'>
        <div class="gb-head">[<?=$e['datetime']?>] <?=$e['name']?></div>
        <div class="gb-body"><?=$e['text']?></div>
      </div>
    <?php }} else {
      echo "No entries found.";
    }
    break;

  /* [ADD ENTRY] */
  case "add":
    echo $dbLib->add($_POST['name'], $_POST['email'], $_POST['text']) ? "OK" : "ERR" ;
    break;
  
  // ADMIN FUNCTIONS
  // PROTECT & RESTRICT ACCESS
  /* [EDIT ENTRY] */
  case "edit":
    echo $dbLib->edit($_POST['name'], $_POST['email'], $_POST['text']) ? "OK" : "ERR" ;
    break;

  /* [DELETE ENTRY] */
  case "del":
    echo $dbLib->del($_POST['email']) ? "OK" : "ERR" ;
    break;
}
?>