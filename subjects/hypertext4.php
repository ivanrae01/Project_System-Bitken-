<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/homestyle.css" >
    <link rel="stylesheet" href="../css/tablestyle.css" >
    <link rel="stylesheet" href="../css/dashstyle.css" >
    <link rel="stylesheet" href="../nav.css" >
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css" >

    <title> PHP Syntax </title>
  </head>
  <body>

  
  <header>
        <div class="logo"> <h1 style="font-size: 100%; margin-bottom: 2%;"> BITKEN</h1> </div>
        <div class="navlinks">
            <ul>
            <li><a href="../homepage.php">Home</a></li>
                <li><a href="../subject.php">Subjects</a></li>
                <li><a href="../quiz.php">Quiz</a></li>
                <li><a href="../logout.php?logout='1'"> Logout</a></li> 
            </ul>
        </div>
    </header>

  
        

    <div class="body">
    <nav class="side-bar">
            <div class="userp">
              <!-- <img src="bitken.png"> -->
                <h4>Topics</h4>
            </div>
            <ul>
                <li>
                    <a href="../subjects/hypertext.php">
                        <span> What is PHP ? </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/hypertext2.php">
                        <span> What Can PHP do? </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/hypertext3.php">
                        <span> Why PHP? </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/hypertext4.php">
                        <span> PHP Syntax </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/hypertext5.php">
                        <span> PHP Variables </span>
                       
                    </a>
                </li>
            </ul>
        </nav>
    <section class="section-1">
    <?php
    echo nl2br ("PHP Syntax \n
    -   A PHP script starts with <?php and ends with ?> \n
    -   A PHP file normally contains HTML tags, and some PHP scripting code. \n
    -   In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive. \n
    -   All variable names are case-sensitive! \n
    \n");
?>
    </section>    
</div>

   
 

      </div>
    </div>  
  </div>



  <div class="row pt-2 text-light" id="footer" style="background-color: #12aff8" >
      <div class="col-md-8 offset-md-2">
        <div class="row">
          <div class="col-md-12 mb-2"> <center> Allrights Resevered 2021 </center> 
          </div>
        </div>
      </div>
    </div> 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>