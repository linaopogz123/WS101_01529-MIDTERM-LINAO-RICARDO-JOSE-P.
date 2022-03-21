<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body{
        background-image: url("image/1.gif")
    }
    .c1{
        padding-top: 100px;
    }
    label{
        color: white;
        font-size: 20px;
    }
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://127.0.0.1:8000/dashboard">Dashboard Page</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://127.0.0.1:8000/">Transaction Page</a></li>
    </ul>
  </div>
</nav>
<center>
<div class="c1">
<form action="/action_page.php">
  <label for="cars">User to inquire:</label>
  <select id="cars" name="cars">
    <option value="volvo">Withdraw</option>
    <option value="saab">Deposit</option>
  </select>
  <input type="submit">
</form>
</div>
</center>
</body>
</html>
