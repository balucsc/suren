<?php 
error_reporting(0);
if($_SESSION['id'])
{ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>BU  :: Portal for Certificate & Eligibility Verification</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- Custom styles for this template -->
<link href="css/full-width-pics.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#" style="font-size:17px;font-family: 'Oswald';letter-spacing: 0.2px;">Bharathiar University, Coimbatore</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto" style="color: #FFFFFF;font-size:18px;font-family: 'Oswald';letter-spacing:0.2px;">

<li class="nav-item">
<a class="nav-link" href="dashboard.php" style="color: #FFFFFF;">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="data-import.php" style="color: #FFFFFF;">Upload Course Details</a>
</li>

<?php 
if($_SESSION['id']!=1)
{
?>
<li class="nav-item">
<a class="nav-link" href="course-details.php" style="color: #FFFFFF;">Course Details</a>
</li>
<?php
}
else
{
?>
<li class="nav-item">
<a class="nav-link" href="college-details.php" style="color: #FFFFFF;">College-Course Details</a>
</li>
<?php
}
?>



<li class="nav-item">
<a class="nav-link" href="logout.php" style="color: #FFFFFF;" onClick="return confirm('Are you sure you want to  Sign Out / Log Out ?')">Logout</a>
</li>




<!--
<li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Others</a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Inbox</a>
            <a href="#" class="dropdown-item">Drafts</a>
            <a href="#" class="dropdown-item">Sent Items</a>
            <div class="dropdown-divider"></div>
            <a href="#"class="dropdown-item">Trash</a>
        </div>
    </li>
-->



</ul>





</div>
</div>
</nav>


<?php
} 
else 
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>BU  :: Portal for Certificate & Eligibility Verification</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/full-width-pics.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="#">Bharathiar University, Coimbatore</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="login.php">
<button type="button" class="btn btn-primary">Log in</button>
<span class="sr-only">(current)</span>
</a>
</li>

</ul>
</div>
</div>
</nav>

<?php } ?>

<?php include('includes/paginator.class.php'); include('Classes/PHPExcel.php'); ?>

