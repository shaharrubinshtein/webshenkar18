var mql=window.matchMedia('(max-width: 576px)');
var logoLink=document.createElement('a');
logoLink.style.background="url(images/I_SMART_logo.png) no-repeat";
logoLink.style.width="165px";
logoLink.style.height="33px";
logoLink.style.display="block";
logoLink.style.cssFloat="left";
logoLink.id='logoLink';
logoLink.href="studentIndex.php";


var imgUserBoxLogIn=document.createElement('section');
imgUserBoxLogIn.style.width="130px";
imgUserBoxLogIn.style.height="55px";
imgUserBoxLogIn.style.cssFloat="left";
imgUserBoxLogIn.id="userLogInPlace";

var userNameBoxLogIn=document.createElement('section');
userNameBoxLogIn.innerHTML="דניאל&nbsp;&nbsp;&nbsp;"
userNameBoxLogIn.style.cssFloat="right";
userNameBoxLogIn.style.marginTop="5px";
userNameBoxLogIn.style.marginRight="5px";


var userboxLogOff=document.createElement('a');
userboxLogOff.innerHTML="התנתק";
userboxLogOff.style.cssFloat="right";
userboxLogOff.href="index.php";
userboxLogOff.style.marginRight="20px";
userboxLogOff.style.marginTop="2px";
userboxLogOff.style.textDecoration="none";



var imgUserLogIn=document.createElement('section');
imgUserLogIn.style.background="url(images/student_3.png) no-repeat";
imgUserLogIn.style.width="46px";
imgUserLogIn.style.height="46px";
imgUserLogIn.style.display="block";
imgUserLogIn.style.cssFloat="right";
imgUserLogIn.style.marginTop="5px";

imgUserBoxLogIn.appendChild(imgUserLogIn);
imgUserBoxLogIn.appendChild(userNameBoxLogIn);
imgUserBoxLogIn.appendChild(userboxLogOff);




$(document).ready(function(){

    
        screenTest(mql);    
});


$('#studentQuizButton').click(function(){

        

        if( ($('#animalQuizMouse').val()=="")  ||   ($('#animalQuizBear').val()=="")  || ($('#animalQuizElephant').val()==  "")   || ($('#animalQuizFish').val()==  "")  || ($('#animalQuizDog').val()==  "") || ($('#animalQuizBird').val()==  "") ||  ($('#animalQuizMonkey').val()==  "")  || ($('#animalQuizCat').val()==  "") ||  ($('#animalQuizCow').val()==  "") ||  ($('#animalQuizZebra').val()==  "") ){
                alert("השאלון לא מלא")
        }
        else{
            $('#studentEnglishQuiz').submit();

        }

});





function screenTest(e){
 
    $('#userLogInPlace').remove();
    $('#logoLink').remove();
    if(e.matches){
        $('#LogoBoxMobile').append(logoLink);
      
        $('#addUserLonInMobile').append(imgUserBoxLogIn);
        imgUserBoxLogIn.style.cssFloat="right";



    }else{
      
        $('#userLogin').append(imgUserBoxLogIn);   
        imgUserBoxLogIn.style.cssFloat="left";
    }
}

mql.addListener(screenTest);


$('#Mouse_Lion').click(function(){
    $('#animalQuizMouse').val("Lion");
    $('#Mouse_Lion').css("background-color","#ABB2B9");
    $('#Mouse_Bird').css("background-color","#f8f09a");
    $('#Mouse_Mouse').css("background-color","#f8f09a");
});

$('#Mouse_Bird').click(function(){
    $('#animalQuizMouse').val("Bird");
    $('#Mouse_Lion').css("background-color","#f8f09a");
    $('#Mouse_Bird').css("background-color","#ABB2B9");
    $('#Mouse_Mouse').css("background-color","#f8f09a");
});

$('#Mouse_Mouse').click(function(){
    $('#animalQuizMouse').val("Mouse");
    $('#Mouse_Lion').css("background-color","#f8f09a");
    $('#Mouse_Bird').css("background-color","#f8f09a");
    $('#Mouse_Mouse').css("background-color","#ABB2B9");
});



$('#Bear_Fish').click(function(){
    $('#animalQuizBear').val("Fish");
    $('#Bear_Fish').css("background-color","#ABB2B9");
    $('#Bear_Dog').css("background-color","#f8f09a");
    $('#Bear_Bear').css("background-color","#f8f09a");
});


$('#Bear_Dog').click(function(){
    $('#animalQuizBear').val("Dog");
    $('#Bear_Fish').css("background-color","#f8f09a");
    $('#Bear_Dog').css("background-color","#ABB2B9");
    $('#Bear_Bear').css("background-color","#f8f09a");
});

$('#Bear_Bear').click(function(){
    $('#animalQuizBear').val("Bear");
    $('#Bear_Fish').css("background-color","#f8f09a");
    $('#Bear_Dog').css("background-color","#f8f09a");
    $('#Bear_Bear').css("background-color","#ABB2B9");
});


$('#Elephant_Cow').click(function(){
    $('#animalQuizElephant').val("Cow");
    $('#Elephant_Cow').css("background-color","#ABB2B9");
    $('#Elephant_Elephant').css("background-color","#f8f09a");
    $('#Elephant_Cat').css("background-color","#f8f09a");
});

$('#Elephant_Elephant').click(function(){
    $('#animalQuizElephant').val("Elephant");
    $('#Elephant_Cow').css("background-color","#f8f09a");
    $('#Elephant_Elephant').css("background-color","#ABB2B9");
    $('#Elephant_Cat').css("background-color","#f8f09a");
});


$('#Elephant_Cat').click(function(){
    $('#animalQuizElephant').val("Cat");
    $('#Elephant_Cow').css("background-color","#f8f09a");
    $('#Elephant_Elephant').css("background-color","#f8f09a");
    $('#Elephant_Cat').css("background-color","#ABB2B9");
});


$('#Fish_Bird').click(function(){
    $('#animalQuizFish').val("Bird");
    $('#Fish_Bird').css("background-color","#ABB2B9");
    $('#Fish_Mouse').css("background-color","#f8f09a");
    $('#Fish_Fish').css("background-color","#f8f09a");
});


$('#Fish_Mouse').click(function(){
    $('#animalQuizFish').val("Mouse");
    $('#Fish_Bird').css("background-color","#f8f09a");
    $('#Fish_Mouse').css("background-color","#ABB2B9");
    $('#Fish_Fish').css("background-color","#f8f09a");
});


$('#Fish_Fish').click(function(){
    $('#animalQuizFish').val("Fish");
    $('#Fish_Bird').css("background-color","#f8f09a");
    $('#Fish_Mouse').css("background-color","#f8f09a");
    $('#Fish_Fish').css("background-color","#ABB2B9");
});


$('#Dog_Dog').click(function(){
    $('#animalQuizDog').val("Dog");
    $('#Dog_Dog').css("background-color","#ABB2B9");
    $('#Dog_Fish').css("background-color","#f8f09a");
    $('#Dog_Cow').css("background-color","#f8f09a");
});

$('#Dog_Fish').click(function(){
    $('#animalQuizDog').val("Fish");
    $('#Dog_Dog').css("background-color","#f8f09a");
    $('#Dog_Fish').css("background-color","#ABB2B9");
    $('#Dog_Cow').css("background-color","#f8f09a");
});

$('#Dog_Cow').click(function(){
    $('#animalQuizDog').val("Cow");
    $('#Dog_Dog').css("background-color","#f8f09a");
    $('#Dog_Fish').css("background-color","#f8f09a");
    $('#Dog_Cow').css("background-color","#ABB2B9");
});


$('#Bird_Monkey').click(function(){
    $('#animalQuizBird').val("Monkey");
    $('#Bird_Monkey').css("background-color","#ABB2B9");
    $('#Bird_Bird').css("background-color","#f8f09a");
    $('#Bird_Cow').css("background-color","#f8f09a");
});


$('#Bird_Bird').click(function(){
    $('#animalQuizBird').val("Bird");
    $('#Bird_Monkey').css("background-color","#f8f09a");
    $('#Bird_Bird').css("background-color","#ABB2B9");
    $('#Bird_Cow').css("background-color","#f8f09a");
});


$('#Bird_Cow').click(function(){
    $('#animalQuizBird').val("Cow");
    $('#Bird_Monkey').css("background-color","#f8f09a");
    $('#Bird_Bird').css("background-color","#f8f09a");
    $('#Bird_Cow').css("background-color","#ABB2B9");
});


$('#Monkey_Monkey').click(function(){
    $('#animalQuizMonkey').val("Monkey");
    $('#Monkey_Monkey').css("background-color","#ABB2B9");
    $('#Monkey_Dog').css("background-color","#f8f09a");
    $('#Monkey_Zebra').css("background-color","#f8f09a");
});

$('#Monkey_Dog').click(function(){
    $('#animalQuizMonkey').val("Dog");
    $('#Monkey_Monkey').css("background-color","#f8f09a");
    $('#Monkey_Dog').css("background-color","#ABB2B9");
    $('#Monkey_Zebra').css("background-color","#f8f09a");
});

$('#Monkey_Zebra').click(function(){
    $('#animalQuizMonkey').val("Zebra");
    $('#Monkey_Monkey').css("background-color","#f8f09a");
    $('#Monkey_Dog').css("background-color","#f8f09a");
    $('#Monkey_Zebra').css("background-color","#ABB2B9");
});


$('#Cat_Zebra').click(function(){
    $('#animalQuizCat').val("Zebra");
    $('#Cat_Zebra').css("background-color","#ABB2B9");
    $('#Cat_Cat').css("background-color","#f8f09a");
    $('#Cat_Cow').css("background-color","#f8f09a");
});

$('#Cat_Cat').click(function(){
    $('#animalQuizCat').val("Cat");
    $('#Cat_Zebra').css("background-color","#f8f09a");
    $('#Cat_Cat').css("background-color","#ABB2B9");
    $('#Cat_Cow').css("background-color","#f8f09a");
});



$('#Cat_Cow').click(function(){
    $('#animalQuizCat').val("Cow");
    $('#Cat_Zebra').css("background-color","#f8f09a");
    $('#Cat_Cat').css("background-color","#f8f09a");
    $('#Cat_Cow').css("background-color","#ABB2B9");
});

$('#Cow_Cow').click(function(){
    $('#animalQuizCow').val("Cow");
    $('#Cow_Cow').css("background-color","#ABB2B9");
    $('#Cow_Bird').css("background-color","#f8f09a");
    $('#Cow_Monkey').css("background-color","#f8f09a");
});

$('#Cow_Bird').click(function(){
    $('#animalQuizCow').val("Bird");
    $('#Cow_Cow').css("background-color","#f8f09a");
    $('#Cow_Bird').css("background-color","#ABB2B9");
    $('#Cow_Monkey').css("background-color","#f8f09a");
});


$('#Cow_Monkey').click(function(){
    $('#animalQuizCow').val("Monkey");
    $('#Cow_Cow').css("background-color","#f8f09a");
    $('#Cow_Bird').css("background-color","#f8f09a");
    $('#Cow_Monkey').css("background-color","#ABB2B9");
});


$('#Zebra_Zebra').click(function(){
    $('#animalQuizZebra').val("Zebra");
    $('#Zebra_Zebra').css("background-color","#ABB2B9");
    $('#Zebra_Horse').css("background-color","#f8f09a");
    $('#Zebra_Bear').css("background-color","#f8f09a");
});

$('#Zebra_Horse').click(function(){
    $('#animalQuizZebra').val("Horse");
    $('#Zebra_Zebra').css("background-color","#f8f09a");
    $('#Zebra_Horse').css("background-color","#ABB2B9");
    $('#Zebra_Bear').css("background-color","#f8f09a");
});


$('#Zebra_Bear').click(function(){
    $('#animalQuizZebra').val("Bear");
    $('#Zebra_Zebra').css("background-color","#f8f09a");
    $('#Zebra_Horse').css("background-color","#f8f09a");
    $('#Zebra_Bear').css("background-color","#ABB2B9");
});































