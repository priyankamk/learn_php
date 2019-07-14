<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>learn php</title>
  <style>
    header {
      background: pink;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>
      <?php
      $name = $_GET['name'];
      echo "Hello, $name";
      ?>
    </h1>
  </header </body> </html>