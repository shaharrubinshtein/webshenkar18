<?php

    include 'includes/db.php';

    

 

    if(isset($_POST['varUserId']))
    {
        $selectOption =(string)$_POST['varUserId'];
        echo '<script> var userIdSearchValue="' . $selectOption . '";</script>'; 
    }else if(isset($_POST['selectUserPhp'])){
        $selectOption =(string)$_POST['selectUserPhp'];
        echo '<script> var userIdSearchValue="' . $selectOption . '";</script>'; 
    }else{
        echo '<script>   window.location.replace("reportTime1.php"); </script>'; 
    }


    if( isset($_POST['datePhp'])   AND isset($_POST['totalTimePhp']) AND isset($_POST['meetingLocationPhp']) AND isset($_POST['meetingSubjectPhp']) AND isset($_POST['travelCostPhp']))
    {
            
            $query1="INSERT INTO user_202_meeting_info(name,total_hours,meeting_location,meeting_content,travel_cost,user_id,date_F) VALUES ('".$selectOption."','".$_POST['totalTimePhp']."','".$_POST['meetingLocationPhp']."','".$_POST['meetingSubjectPhp']."','".$_POST['travelCostPhp']."','".$selectOption."','".$_POST['datePhp']."')";
            if($connection->query($query1)==TRUE)
            {
                echo '<script> alert("נוספה רשומה בהצלחה");</script>';
            }else{
                echo "bed add". "<br>";
            }
    }

?>


<!DOCTYPE html>
<html>
    <head>

            <title>Time report</title>
            <meta charset="utf-8" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="includes/style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="includes/reportTime2.js" async></script>
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
                                        <a class="nav-link " href="#">ציונים<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="reportTime2.php">דיווח שעות<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
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
                                                <li class="breadcrumb-item active" aria-current="page">הוספה</li>
                                                <li class="breadcrumb-item"><a href="reportTime1.php">דיווח שעות</a></li>
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
                        
                    <section id="fillReportFormOut">
                            <section id="fillReportForm">
                                
                                    <form  id="selectStudentForm"  method="post" action="reportTime2.php">
                                        
                                                <section id="studentTopLineBox">
                                                    <p id="studentSelectFill">מלא פרטים</p>
                                                </section>


                                                    <section id="fillFormTime">
                                                            <div class="form-group" id="fillFormDateBox">
                                                                <label for="formGroupExampleInput2" class="floatright">תאריך</label>
                                                                <input type="date"  name="datePhp"  class="form-control" id="fillFormDate" />
                                                            </div>

                                                            

                                                            <div class="form-group"  id="fillFormTotalTimeBox" >
                                                                <label for="formGroupExampleInput2" class="floatright">סהכ שעות</label>
                                                                <input type="number" name="totalTimePhp" class="form-control" id="fillFormTotalTimeIn" min="0"max="6">

                                                            </div>
                                                    </section>


                                                <section id="fillFormTextInfo">
                                            
                                                    <div class="form-group" id="fillFormLocation">
                                                        <label for="formGroupExampleInput" class="floatright">מיקום הפגישה</label>
                                                        <input type="text" name="meetingLocationPhp" class="form-control" id="fillFormLocationIn" >
                                                    </div>
                                                    <div class="form-group" id="fillFormSubject">
                                                        <label for="formGroupExampleInput2" class="floatright">נושא הפגישה</label>
                                                        <input type="text" name="meetingSubjectPhp" class="form-control" id="fillFormSubjectIn">
                                                    </div>

                                                </section>


                                                <section id="fillFormTextcost">              
                                                            <div class="form-group"  id="fillFormcostBox" >
                                                                <label for="formGroupExampleInput2" class="floatright">הוצאות</label>
                                                                <input type="number" name="travelCostPhp" class="form-control" id="fillFormTextcostIn" value ="">
                                                            </div>
                                                </section>
                                                
                                                <input type="hidden" name="varUserId" value="<?php echo $selectOption ?>" />

                                                    <section id="fillTimeSearchButtonBoxOut">
                                                        <section id="fillreportTimeSearchButtonBoxin">
                                                            <button type="button" class="btn btn-primary my-1" id="reportTimeSearchButton1">הוסף</button>
                                                        </section>
                                                    </section>

                                                   <script> $('#reportTimeSearchButton1').click(function(){

            
                                                        if(      ($('#fillFormTotalTimeIn').val() !="")    && ($('#fillFormDate').val() !="") && ($('#fillFormFromTime').val() !="") && ($('#fillFormLocationIn').val() !="") && ($('#fillFormSubjectIn').val() !="") && ($('#fillFormTextcostIn').val() !="") ){

                                                                    $('#selectStudentForm').submit();

                                                        }else{

                                                            alert("טופס לא מלא");
                                                        }
                                                          

                                                   });
                                                   </script>

                                    </form>
                            </section>

                    </section>



                    <section id="sqlDataOut">

                            <section id="sqlDataIn">
  
                                    <?php    
                                            if(isset($_POST['varUserId']) OR isset($_POST['selectUserPhp']))
                                            {
                                                         $query="SELECT * FROM user_202_meeting_info WHERE user_id=$selectOption";
                                                        $result=mysqli_query($connection,$query);
                                                        if(!$result){
                                                            die("error query");
                                                        }
                                                        if($result->num_rows>0)
                                                        {
                                                            while($row=$result->fetch_assoc()){
                                                                    echo "<section class=' oneRowInfo ' '>
                                                                    <section class='oneRowInfoDateOut allWidth'  '>  <section class='textCenter oneRowInfoDateOutIn' '>" . $row["date_F"] .  " </section>  </section> 
                                                                    <section class='oneRowInfoStartTotalTimeOut allWidth'  '>  <section class='textCenter oneRowInfoStartTotalTimeIn' '>" . $row["total_hours"] .  " </section>  </section>
                                                                    <section class='oneRowInfoStartPlaceOfMeetingOut allWidth'  '>  <section class='textCenter oneRowInfoStartPlaceOfMeetingIn fontGoogle' '>" . $row["meeting_location"] .  " </section>  </section>
                                                                    <section class='oneRowInfoMeetingSubjectOut allWidth'  '>  <section class='textCenter oneRowInfoMeetingSubjectIn fontGoogle' '>" . $row["meeting_content"] .  " </section>  </section>
                                                                    <section class='oneRowInfoCostOut allWidth'  '>  <section class='textCenter oneRowInfoCostIn' '>" . $row["travel_cost"] .  " </section>  </section>
                                                                    </section>";
                                                            }
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