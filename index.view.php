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
  <h1>Task for the day</h1>

  <ul>
    <li>
      <strong>Name: </strong> <?= $task["title"]; ?>
    </li>
    <li>
      <strong>Due Date:</strong> <?= $task["due"]; ?>
    </li>
    <li>
      <strong>Person completed: </strong> <?= $task["assigned_to"]; ?>
    </li>
    <li>
      <strong>Status: </strong> <?= $task["completed"] ? "completed" : "incomplete" ?>
    </li>
  </ul>


</body>

</html>