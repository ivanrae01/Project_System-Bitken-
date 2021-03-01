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

    <title> What is Assembly? </title>
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
                    <a href="../subjects/ass.php">
                        <span> What is Assembly? </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/ass2.php">
                        <span> Comments, Statements </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/ass3.php">
                        <span> Syntax of Assembly </span>
                       
                    </a>
                </li>
            </ul>
        </nav>
    <section class="section-1">
    <?php
    echo nl2br (" What is Assembly?\n
    -   Is a type of low-level programming language that is intended to communicate 
    directly with a computer’s hardware.\n
    -   Is a type of programming language that translates high-level languages into machine language.\n
    \n
    Assembly Syntax\n
    An assembly program can be divided into three sections\n
    -   The data section\n
    -   The bss section\n
    -   The text section. \n 
    \n
    The data Section\n
    -   The data section is used for declaring initialized data or constants. This data does not change at runtime
    -   The syntax for declaring data section is section.data\n
    \n
    The bss Section\n
    -   The bss section is used for declaring variables. The syntax for declaring bss section is section.bss\n
    The text section\n
    -   The text section is used for keeping the actual code. 
    This section must begin with the declaration global _start, which tells the 
    kernel where the program execution begins.\n
    -   The syntax for declaring text section is section.text global _start _start:\n
    ");

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

