<?php
   
    include 'includes/db.php';
    if(isset($_POST['userId'])){
        $selectOption =(string)$_POST['userId'];
        echo '<script> var userIdSearchValue="' . $selectOption . '";</script>'; 
    }else{
        echo '<script>   window.location.replace("indexTutor.php"); </script>'; 
    }

    $query="SELECT * FROM tb_202_quiz WHERE user_id=$selectOption";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("error query");
    }
?>




<!DOCTYPE html>
<html>
    <head>

            <title>User info</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="includes/style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="includes/userDate.js" async></script>
            <link href="https://fonts.googleapis.com/css?family=Rubik&amp;subset=hebrew" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">


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
                                        <a class="nav-link" href="inbox1.php">הודעות<i class="fa fa-list-alt" aria-hidden="true"></i></a>
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
                                                <li class="breadcrumb-item active" aria-current="page">פרטים</li>
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



                        <section id="userTableOut">
                                <section id="userGradeTable">

                                    <table class="table table-striped" id="userGradeTableIn">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" >בוחן</th>
                                                    <th scope="col" >ציון</th>
                                                    <th scope="col" >מספר טעויות</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBody">
                                                                                                    <!--                                                                                                                                                  -->
                                                        <?php
                                                                                     

                                                                                      if($result->num_rows>0)
                                                                                      {
                                                                                                while($row=$result->fetch_assoc()){

                                                                                                    

                                                                                                    echo "<tr> 
                                                                                                    <th scope='col' class='notBold textCenter fontGoogle'>אנגלית-חיות</th>
                                                                                                    <th scope='col' class='notBold textCenter fontGoogle'> ".$row["mark_num"]." </th>
                                                                                                    <th scope='col' class='notBold textCenter fontGoogle'> ".$row["mistake_count"]." </th>
                                                                                                     </tr>";


                                                                                                }



                                                                                      }



                                                                     



                                                        ?>

                                                                                                                                                                          

                                                </tbody>
                                    </table>
                                </section>
                        </section>



                       
                            
                </main>         




           </div>

    </body>


</html>


   <?php
        mysqli_close($connection);
    ?>