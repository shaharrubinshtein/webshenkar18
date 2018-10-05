<?php

            include 'includes/db.php';



    

    if(      isset($_POST["animalQuizMouse"])  AND   isset($_POST["animalQuizBear"])  AND     isset($_POST["animalQuizElephant"])     AND  isset($_POST["animalQuizFish"])  AND  isset($_POST["animalQuizDog"])  AND  isset($_POST["animalQuizBird"])  AND isset($_POST["animalQuizMonkey"])  AND  isset($_POST["animalQuizCat"]) AND isset($_POST["animalQuizCow"]) AND  isset($_POST["animalQuizZebra"]) ){
       
    }else{

        echo '<script>   window.location.replace("studentEnglishQuiz.php"); </script>'; 
    }
   

    $query="DELETE  FROM tb_202_quiz_data WHERE user_id='365741564'";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("error query");
    }

    
    $query="DELETE  FROM tb_202_quiz_data WHERE user_id='365741564'";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die("error query");
    }

    $i=0;

    if($_POST["animalQuizMouse"]!="Mouse"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Mouse', '". $_POST["animalQuizMouse"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }



    if($_POST["animalQuizBear"]!="Bear"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Bear', '". $_POST["animalQuizBear"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }

    if($_POST["animalQuizElephant"]!="Elephant"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Elephant', '". $_POST["animalQuizElephant"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizFish"]!="Fish"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Fish', '". $_POST["animalQuizFish"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizDog"]!="Dog"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Dog', '". $_POST["animalQuizDog"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizBird"]!="Bird"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Bird', '". $_POST["animalQuizBird"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizMonkey"]!="Monkey"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Monkey', '". $_POST["animalQuizMonkey"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizCat"]!="Cat"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Cat', '". $_POST["animalQuizCat"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    if($_POST["animalQuizCow"]!="Cow"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Cow', '". $_POST["animalQuizCow"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }

    if($_POST["animalQuizZebra"]!="Zebra"){
        $query="INSERT INTO  tb_202_quiz_data (user_id,animal_test,animal_mistake) VALUES ('365741564','Zebra', '". $_POST["animalQuizZebra"] ."'   ) ";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("error query");
        }
        $i++;
    }


    $query="DELETE  FROM tb_202_quiz WHERE user_id='365741564'";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("error query");
    }

    $query="INSERT INTO  tb_202_quiz (user_id,mark_num,mistake_count) VALUES ('365741564','   ". (100-($i*10) ) ."     ', '". $i ."'   ) ";
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
            <script src="includes/studentEnglishQuizCahck.js" async></script>
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
                                                   <li class="breadcrumb-item active" aria-current="page">תוצאה</li>
                                                   <li class="breadcrumb-item"><a href="studentQuizPage1.php">שאלונים</a></li>
                                                <li class="breadcrumb-item"><a href="studentIndex.php">בית</a></li>
                                            </ol>
                                        </nav>
                                    </section>
                                    <section id="userLogin"></section>
                            </section>
                        </section>


                        
                                
                        <section id="massageTitleOut">
                                    <p class="textCenterd">תוצאה</p>
                        </section>
                        

                                <?php
                                                $query="SELECT * FROM tb_202_quiz WHERE user_id='365741564'";
                                                $result=mysqli_query($connection,$query);

                                                if(!$result){
                                                    die("error query");
                                                }else{
                                                    $row=$result->fetch_assoc();
                                                }




                                ?>



                                <section id="markAndMistakeOut">
                                <section id="markAndMistakeIn">
                                    <section id="markAndMistakeLeft">
                                         <p class="textCenterd">מספר טעויות</p>
                                            
                                             <p class="textCenterd"> <?php echo $row["mistake_count"]; ?>   </p>

                                    </section>

                                    <section id="markAndMistakeRight">
                                        <p class="textCenterd">ציון שאלון</p>
                                        <p class="textCenterd"> <?php echo $row["mark_num"]; ?>   </p>       
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