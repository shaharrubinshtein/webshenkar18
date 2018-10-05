<?php
    
    include 'includes/db.php';

    $animalName='Mouse';

    if(isset($_POST['userId']))
    {
        $selectOption =(string)$_POST['userId'];
        echo '<script> var userIdSearchValue="' . $selectOption . '";</script>'; 
    }else{
        echo '<script>   window.location.replace("inbox1.php"); </script>'; 
    }

    $query="SELECT * FROM tb_202_quiz WHERE user_id=$selectOption";
    $result=mysqli_query($connection,$query);

    $x=$_POST['massageId'];

    $query2="SELECT * FROM tb_202_inbox WHERE id=$x";
    $result2=mysqli_query($connection,$query2);

    $query3="SELECT * FROM tb_202_quiz_data WHERE user_id=$selectOption";
    $result3=mysqli_query($connection,$query3);


   
    if(!$result3){
        die("error query");
    }
    if(!$result2){
        die("error query");
    }else{
        $row2=$result2->fetch_assoc();
    }

    if(!$result){
        die("error query");
    }else{
        $row=$result->fetch_assoc();
    }


?>

<!DOCTYPE html>
<html>
    <head>

            <title>massage</title>
            
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="includes/style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="includes/massageData.js" async></script>
            <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
            <meta charset="utf-8" /> 


    </head>

   

    <body>
           <div id="wrapper">  
                <header>
                       <section id="LogoBoxpc"><a id="logo" href="indexTutor.php"></a></section>
                    <nav class="navbar navbar-expand-sm navbar-light .bg-white" id="topMenuNav">
                         <section id="LogoBoxMobile"></section>
                            <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="mobileMenuButton">
                                     <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <section id="addSearchFormPc"> </section>
                                <section id="addUserLonInMobile"></section>
                                <ul class="navbar-nav ml-auto " id="topMenuText" >
                                    <li class="nav-item">
                                        <a class="nav-link active" href="inbox1.php">הודעות<i class="fa fa-list-alt" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">ציונים<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="reportTime1.php">דיווח שעות<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">חומרי עזר<i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                                <section id="addSearchFormMobile"></section>       
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
                                                 <li class="breadcrumb-item active" aria-current="page">תוכן</li>
                                                <li class="breadcrumb-item"><a href="inbox1.php">הודעות</a></li>
                                                <li class="breadcrumb-item"><a href="indexTutor.php">בית</a></li>
                                            </ol>
                                        </nav>
                                    </section>
                                    <section id="userLogin"></section>
                            </section>
                        </section>


                         <section id="loadStudentInfo">
                             <section id="loadStudentInfoIn">


                             </section>

                        </section>
                        
                        <section id="massageTitleOut">
                                    <p class="textCenterd"> <?php echo $row2["message_title"]; ?>   </p>

                        </section>
                        <section id="markAndMistakeOut">
                                <section id="markAndMistakeIn">
                                    <section id="markAndMistakeLeft">
                                         <p class="textCenterd">מספר טעויות</p>
                                            
                                             <p class="textCenterd"> <?php echo hebrev($row["mistake_count"]); ?>   </p>

                                    </section>

                                    <section id="markAndMistakeRight">
                                        <p class="textCenterd">ציון שאלון</p>
                                        <p class="textCenterd"> <?php echo $row["mark_num"]; ?>   </p>       
                                     </section>

                                </section>


                         </section>
                         

                         <section id="quizDataOut">

                                    <section id="quizDataIn">
                                    

                           

                                                    <?php 
                                                    

                                                            if($result3->num_rows>0)
                                                            {
                                                                while($row3=$result3->fetch_assoc()){

                                                                    $query4="SELECT * FROM tb_202_quiz_load_game WHERE animal_name= '".$row3["animal_test"]."' ";
                                                                    $result4=mysqli_query($connection,$query4);
                                                                
                                                                
                                                                    if(!$result4){
                                                                        die("error query");
                                                                    }


                                                                    $row5=$result4->fetch_assoc();



                                                                    if($row3["animal_mistake"]==$row5["row_1"])
                                                                    {
                                                                        $row1_data="  <p class='wrongAnswer '>". $row5["row_1"] ."  </p> "; 

                                                                    }else{
                                                                                $row1_data=$row5["row_1"];
                                                                    }

                                                                    if($row3["animal_mistake"]==$row5["row_2"])
                                                                    {
                                                                        $row2_data="  <p class='wrongAnswer '>". $row5["row_2"] ."  </p> "; 

                                                                    }else{
                                                                                $row2_data=$row5["row_2"];
                                                                    }

                                                                    if($row3["animal_mistake"]==$row5["row_3"])
                                                                    {
                                                                        $row3_data="  <p class='wrongAnswer '>". $row5["row_3"] ."  </p> "; 

                                                                    }else{
                                                                                $row3_data=$row5["row_3"];
                                                                    }


                                                                    
                                                                
                                                                        echo "  <section class='quizDataBox'> 
                                                                    <img src='images/animal".$row3["animal_test"].".png' width='64px' height='64px' class='centerImg'>
                                                                    <section class='dataBoxOneLine marginTopTen'><section class='dataBoxText textCenterd'> ".  $row1_data ."  </section></section>
                                                                    <section class='dataBoxOneLine marginTopTen'><section class='dataBoxText textCenterd'>  ".  $row2_data  ."   </section></section>
                                                                    <section class='dataBoxOneLine marginTopTen'><section class='dataBoxText textCenterd'> ".  $row3_data  ."   </section></section>
                                                                    </section>";


                                                                }
                                                            }
                                                    
                                                    
                                                    
                                                    ?>





                                    </section>

                         </section>
                 
                </main>         




           </div>

    </body>




</html>


    <?php
        mysqli_close($connection);
    ?>