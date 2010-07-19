<?php
include 'conf.php';

if ($_REQUEST["phrase"]) {
  $id = uniqid();
  $phrase = trim($_REQUEST["phrase"]);
  $phrase = strtoupper($phrase);
  $phrase = preg_replace("/[^$allowed$ok]/", "", $phrase);
  file_put_contents("/tmp/$id.txt", $phrase . "\n");
  header("Location: game.php?game_id=$id");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Txt Hangman</title>
  <meta name="viewport" content="widt =320">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
</head>
<body>
  <form method="get" action="index.php">
  Phrase:
  <input type="text" name="phrase">
  <input type="submit">
  </form>
</body>
</html>
