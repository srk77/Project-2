<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }

      label{
      width:100px;
    }
  </style>
</head>


<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center">

<h3>Register</h3>
<form action="index.php?page=accounts&action=store" method="post" id="form1" class = "form-inline">
    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="" required><br>
    </div><br><br>
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="" required><br>
    </div><br><br>
    <div class = "form-group">
    <label>Email ID-</label>
    <input type="email" class="form-control" name="email" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Phone No-</label>
    <input type="text" class="form-control" name="phone" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Password-</label>
    <input type="password" class="form-control" name="password" value="" required><br>
    </div><br><br>
    <button type="submit" class="btn btn-primary" form="form1" value="Submit">Submit</button>
</form>

</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Web System Development</p>
</footer>

<script src="js/scripts.js"></script>
</body>
</html>
