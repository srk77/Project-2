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

    .glyphicon {
    height:42px;
    font-size: 18px;
}
    label{
      width:100px;
    }
  </style>
</head>


<body text-align:center>

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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><div>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="glyphicon glyphicon-user">Your Profile</button>
        </form></div></li>

        <li><div>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="glyphicon glyphicon-log-out">Logout</button>
        </form></div></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center">
    <h3> Edit Details </h3>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" class = "form-inline">

    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>">
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>">
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Email-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>">
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>">
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>">
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>">
    </div><br><br>
    <input type="submit" class="btn btn-primary" value="SAVE">
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
