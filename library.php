<?php
  // htmlspecialcharsを短くする
  function h($value) {
      return htmlspecialchars($value, ENT_QUOTES);
  }

  // DBへの接続
  function dbconnect() {
    $db = new mysqli('localhost', 'root', 'root', 'mini_bbs');
    if(!$db) {
      die($db->error);
    }

    return $db;
  }
?>