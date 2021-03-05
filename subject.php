<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/homestyle.css" >
    <link rel="stylesheet" href="css/tablestyle.css" >
    <link rel="stylesheet" href="css/dashstyle.css" >
    <link rel="stylesheet" href="nav.css" >
    <link rel="stylesheet" href="assets/fontawesome/css/all.css" >

    <title> Homepage </title>
  </head>
  <body>

  
  <header>
        <div class="logo"> <h1 style="font-size: 100%; margin-bottom: 2%;"> BITKEN</h1> </div>
        <div class="navlinks">
            <ul>
            <li><a href="homepage.php">Home</a></li>
                <li><a href="subject.php">Subjects</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="logout.php?logout='1'"> Logout</a></li> 
            </ul>
        </div>
    </header>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:  #12aff8">
      <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" width="50" height="50" class="image"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php"><p class="font-weight-bold" class="form-control mr-2"> Home </p> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="subject.php"><p class="font-weight-bold"> Subject </p> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="quiz.php"> <p class="font-weight-bold"> Quiz </p> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php?logout='1'" > <p class="font-weight-bold"> Logout </p></a> 
          </li>
        </ul>
      </div>
    </nav> -->

    <div class="body">
    <br></br>
    <section class="section-1">
        <h1>CHOOSE SUBJECT</h1>
        <br></br>
 


      <table class="center" style="width: 50%" >
        <thead>
          <tr class="bg-transparent text-black">
            <th scope="col"><center>Number</center></th>
            <th scope="col"><center>Subject</center></th>       
          </tr>
        </thead>
       
          <tr>
            <th scope="col" style="width: 10%"> 1 </th>
            <td> <a href="php.php"> PHP </a> </td>
          </tr>
          <tr>
            <th scope="col">2</th>
            <td> <a href="c-plus.php"> C++ </a> </td>
          </tr>
          <tr>
            <th scope="col">3</th>
            <td> <a href="java.php"> Java </a> </td>
          </tr>
          <tr>
            <th scope="col">4</th>
            <td> <a href="assembly.php"> Assembly </a> </td>
          </tr>
          <tr>
            <th scope="col">5</th>
            <td> <a href="python.php"> Python </a> </td>
          </tr>
      </table>
      <br></br>
      <br></br>
    </section>    
</div>

   
<?php
include "footer.php"
?>