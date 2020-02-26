CREATE TABLE `guestbook` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`email`),
  ADD KEY `datetime` (`datetime`);