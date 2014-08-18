<?php
  $mysqli = new mysqli("localhost","brodway_homer","homer1234","brodway_homepage");
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
  if (array_key_exists("songname", $_POST)) {
    $songname = $mysqli->real_escape_string($_POST["songname"]);
    $mysqli->query('INSERT INTO songs (songname) VALUES ("'.$songname.'")');
  }
  $mysqli->close();

  function Redirect($url, $permanent = false) {
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
  }

  Redirect('index.php', false);
?>