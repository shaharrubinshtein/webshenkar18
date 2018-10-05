<?php

    include 'includes/db.php';

   



    

?>


<!DOCTYPE html>
<html>
    <head>

            <title>Time report</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="includes/style.css">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="includes/reportTime1.js" async></script>
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
                                        <a class="nav-link active" href="reportTime1.php">דיווח שעות<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
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
                                                <li class="breadcrumb-item active" aria-current="page">דיווח שעות</li>
                                                <li class="breadcrumb-item"><a href="indexTutor.php">בית</a></li>
                                            </ol>
                                        </nav>
                                    </section>
                                    <section id="userLogin"></section>
                            </section>
                        </section>

                       


                        <section id="selectStudent">    

                    
                                <form class="" id="selectStudentForm" onsubmit="" action="reportTime2.php" method="post" >
                                    <section id="studentTopLineBox">
                                          <p id="studentSelect">בחר תלמיד </p>
                                    </section>

                                        <section id="selectUserSmallBoxOut">
                                            <section id="selectUserSmallBoxIn">
                                                <select class=" form-control" id="selectUser" name="selectUserPhp">
                                                    <option selected></option> 
                                                </select>
                                            </section>
                                        </section>

                                        <section id="reportTimeSearchButtonBoxOut">
                                            <section id="reportTimeSearchButtonBoxin">
                                                <button type="submit" name="submit1" class="btn btn-primary my-1" id="reportTimeSearchButton">בחר</button>
                                            </section>
                                        </section>

                                </form>

                    
                        </section>     


                 


                        <section id="loadStudentInfo">
                             <section id="loadStudentInfoIn">
                                   

                             </section>

                        </section>
                        
                    <section id="fillReportFormOut">
                            <section id="fillReportForm">
                                
                                    <form class="" id="selectStudentForm" method="post" >
                                        
                                                <section id="studentTopLineBox">
                                                    <p id="studentSelectFill">מלא פרטים</p>
                                                </section>


                                                    <section id="fillFormTime">
                                                            <div class="form-group" id="fillFormDateBox">
                                                                <label for="formGroupExampleInput2" class="floatright">תאריך</label>
                                                                <input type="date"  name="trip"  class="form-control" id="fillFormDate" value="2018-07-22"  min="2018-01-01" max="2018-12-31" />
                                                            </div>

                                                            <section id="fillFormTimeBoxOut">
                                                                <div class="form-group"  id="fillFormTimeBox">
                                                                    <label for="formGroupExampleInput2" class="floatright">&nbsp; &nbsp;משעה  </label>
                                                                    <input type="number" name="age" class="form-control" id="fillFormFromTime" value ="" min="22"max="67">

                                                                </div>
                                                            </section>

                                                            <div class="form-group"  id="fillFormTotalTimeBox" >
                                                                <label for="formGroupExampleInput2" class="floatright">סהכ שעות</label>
                                                                <input type="number" name="age" class="form-control" id="age" value ="" min="22"max="67">

                                                            </div>
                                                    </section>


                                                <section id="fillFormTextInfo">
                                            
                                                    <div class="form-group" id="fillFormLocation">
                                                        <label for="formGroupExampleInput" class="floatright">מיקום הפגישה</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group" id="fillFormSubject">
                                                        <label for="formGroupExampleInput2" class="floatright">נושא הפגישה</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                                                    </div>

                                                </section>


                                                <section id="fillFormTextcost">              
                                                            <div class="form-group"  id="fillFormcostBox" >
                                                                <label for="formGroupExampleInput2" class="floatright">סהכ שעות</label>
                                                                <input type="number" name="age" class="form-control" id="age" value ="" min="22"max="67">
                                                            </div>
                                                </section>
                                                


                                                    <section id="fillTimeSearchButtonBoxOut">
                                                        <section id="fillreportTimeSearchButtonBoxin">
                                                            <button type="submit" class="btn btn-primary my-1" id="reportTimeSearchButton">הוסף</button>
                                                        </section>
                                                    </section>

                                    </form>
                            </section>

                    </section>




                </main>         




           </div>

    </body>


</html>