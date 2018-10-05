<?php

        include 'includes/db.php';

       


        $query="SELECT * FROM tb_202_quiz_load_game";
        $result=mysqli_query($connection,$query);

       

        if(!$result){
            die("error query");
        }

?>


<!DOCTYPE html>
<html>
    <head>

            <title>Quiz</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="includes/style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="includes/studentEnglishQuiz.js" async></script>
            <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">

    </head>

        

    <body>
           <div id="wrapper">  
                <header>
                       <section id="LogoBoxpc"><a id="logo" href="studentIndex.php"></a></section>
                    <nav class="navbar navbar-expand-sm navbar-light .bg-white" id="topMenuNav">
                         <section id="LogoBoxMobile"></section>
                            <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="mobileMenuButton">
                                     <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                             
                                <section id="addUserLonInMobile"></section>
                                <ul class="navbar-nav ml-auto " id="topMenuText" >
                                     <li class="nav-item">
                                        <a class="nav-link" href="#">ציונים<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="studentQuizPage1.php">שאלונים<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">משחקים<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">חומרי עזר<i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                                    </li>
                                </ul> 
                            </div>                
                        </nav>
                </header>
                <main>

                              <section id="h1HeadOut">
                                     <section id="h1HeadIn">
                                                       <h1 class="smallFontSize">iSmart anywhere anytime</h1>
                                     </section>
                              </section>


                        <section id="mainUserMenu">
                            <section id="mainUserMenuIn">
                                    <section id="mainUserMenuBoxBread">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb" id="breadLeft">
                                                   <li class="breadcrumb-item active" aria-current="page">שאלון</li>
                                                   <li class="breadcrumb-item"><a href="studentQuizPage1.php">שאלונים</a></li>
                                                <li class="breadcrumb-item"><a href="studentIndex.php">בית</a></li>
                                            </ol>
                                        </nav>
                                    </section>
                                    <section id="userLogin"></section>
                            </section>
                        </section>


                         <section id="massageTitleOut">
                                    <p class="textCenterd"> שאלון אנגלית   </p>
                        </section>
                        

                            <section id="quizDataOut">

                                        <section id="quizDataIn">


                                                 <form  id="studentEnglishQuiz"  method="post" action="studentEnglishQuizCahck.php">

                                                            <input type="hidden"  id="animalQuizMouse" name="animalQuizMouse" value=""/>
                                                            <input type="hidden"  id="animalQuizBear" name="animalQuizBear" value=""/>
                                                            <input type="hidden"  id="animalQuizElephant" name="animalQuizElephant" value=""/>
                                                            <input type="hidden"  id="animalQuizFish" name="animalQuizFish" value=""/>
                                                            <input type="hidden"  id="animalQuizDog" name="animalQuizDog" value=""/>
                                                            <input type="hidden"  id="animalQuizBird" name="animalQuizBird" value=""/>
                                                            <input type="hidden"  id="animalQuizMonkey" name="animalQuizMonkey" value=""/>
                                                            <input type="hidden"  id="animalQuizCat" name="animalQuizCat" value=""/>
                                                            <input type="hidden"  id="animalQuizCow" name="animalQuizCow" value=""/>
                                                            <input type="hidden"  id="animalQuizZebra" name="animalQuizZebra" value=""/>

                                                        <?php 
                                                                if($result->num_rows>0)
                                                                {
                                                                    while($row=$result->fetch_assoc()){

                                                                      
                                                                            echo "  <section class='quizDataBox'> 
                                                                        <img src='images/animal".$row["animal_name"].".png' width='64px' height='64px' class='centerImg'>
                                                                        <section class='dataBoxOneLine marginTopTen'><section id=". $row["animal_name"] . '_'. $row["row_1"] ." class='dataBoxText textCenterd'> ".  $row["row_1"] ."  </section></section>
                                                                        <section class='dataBoxOneLine marginTopTen'><section  id=". $row["animal_name"] . '_'. $row["row_2"] ." class='dataBoxText textCenterd'>  ".  $row["row_2"]  ."   </section></section>
                                                                        <section class='dataBoxOneLine marginTopTen'><section    id=". $row["animal_name"] . '_'. $row["row_3"] ." class='dataBoxText textCenterd'> ".  $row["row_3"] ."   </section></section>
                                                                        </section>";
                                                                    }
                                                                }
                                                        
                                                        ?>

                                                       
                                                </form>

                                                                        <section id="studentQuizButtonBoxOut">
                                                    <section id="studentQuizButtonBoxIn">
                                                    <button type="button"  id="studentQuizButton" class="btn btn-primary">שלח</button>
                                                    </section>

                                                       </section>


                                        </section>

                                            

                                </section>

                        

                                
















                        
                </main>         
           </div>
    </body>

                <?php
                      mysqli_close($connection);
                ?>

</html>