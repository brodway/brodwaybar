<!DOCTYPE html>
<html lang="es">
<head>
  <link type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="index.css" rel="stylesheet">
</head>
<body class="backbar">
  <div class="container">
    <div class="banner">
      <p>
        <a href="#">
          Coming fucking soon!
        </a>
      </p>
    </div>
    <form action="submit_form.php" class="central-form form-inline" method="POST">
      <div class="central-group form-group">
        <input type="text" class="song-input form-control" name="songname" value="" placeholder="Ingrese nombre de la cancion">
        <input type="submit" class="btn-success btn" value="Enviar">
      </div>
    </form>
    <table class="table table-hover">
      <thead>
        <th>#</th>
        <th>Nombre</th>
      </thead>
      <tbody>
      <?php
        $mysqli = new mysqli("localhost","brodway_homer","homer1234","brodway_homepage");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $result = $mysqli->query("SELECT * FROM songs");
        while($row = mysqli_fetch_array($result)) {
          echo "<tr><td>".$row['id']."</td><td>".$row['songname']."</td></tr>";
        }
        $mysqli->close();
      ?>
      </tbody>
    </table>
  </div>
</body>
</html>