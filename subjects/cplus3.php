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

    <title> C++ Program Strucutre </title>
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
                    <a href="../subjects/cplus.php">
                        <span> What is C++ ? </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/cplus2.php">
                        <span> Why use C++ </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/cplus3.php">
                        <span> C++ Program Structure </span>
                       
                    </a>
                </li>
                <li>
                    <a href="../subjects/cplus4.php">
                        <span> C++ Variables </span>
                       
                    </a>
                </li>
            </ul>
        </nav>
    <section class="section-1">
    <?php
    echo nl2br (" C++ Program Structure\n \n
    -   The C++ language defines several headers, which contain information that is either necessary or useful to your program. For this program, the header <iostream> is needed.\n
    -   The line using namespace std; tells the compiler to use the std namespace. Namespaces are a relatively recent addition to C++.\n
    -   The next line ' main() is where program execution begins.' is a single-line comment available in C++. Single-line comments begin with // and stop at the end of the line.\n
    -   The line int main() is the main function where program execution begins.\n
    -   The next line cout << Hello World; causes the message Hello World to be displayed on the screen.\n
    -   The next line return 0; terminates main( )function and causes it to return the value 0 to the calling process.\n");
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




