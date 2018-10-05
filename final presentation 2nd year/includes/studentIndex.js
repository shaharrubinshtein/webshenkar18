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

