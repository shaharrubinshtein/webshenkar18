var mql=window.matchMedia('(max-width: 576px)');
var logoLink=document.createElement('a');
logoLink.style.background="url(images/I_SMART_logo.png) no-repeat";
logoLink.style.width="165px";
logoLink.style.height="33px";
logoLink.style.display="block";
logoLink.style.cssFloat="left";
logoLink.id='logoLink';
logoLink.href="indexTutor.php";







var myData = getSomething();
var flag=0;






var imgUserBoxLogIn=document.createElement('section');
imgUserBoxLogIn.style.width="130px";
imgUserBoxLogIn.style.height="55px";
imgUserBoxLogIn.style.cssFloat="left";

var userNameBoxLogIn=document.createElement('section');
userNameBoxLogIn.innerHTML="עומר אילוז"
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
imgUserLogIn.style.background="url(images/student_0.png) no-repeat";
imgUserLogIn.style.width="46px";
imgUserLogIn.style.height="46px";
imgUserLogIn.style.display="block";
imgUserLogIn.style.cssFloat="right";
imgUserLogIn.style.marginTop="5px";

imgUserBoxLogIn.appendChild(imgUserLogIn);
imgUserBoxLogIn.appendChild(userNameBoxLogIn);
imgUserBoxLogIn.appendChild(userboxLogOff);







$form=$(" <form action='/action_page.php' class='form-inline' id='topMenuSearchBox'> <button class='btn btn-outline-success' type='submit' id='topMenuSearchButton'><section id='topMenuSearchLogo'></section></button>  <input class='form-control' type='search' placeholder='' aria-label='Search' id='topMenuSearchText'> </form>");

$(document).ready(function(){
    
    
    if(flag==0){
        $('#fillReportFormOut').css('visibility', 'hidden');
    }
    
        $('#userLogin').append(imgUserBoxLogIn)
        screenTest(mql);
        var json_data=[];
        $.getJSON("includes/index.json",function(data){  
                console.log(data);
                jsonData=data;
                var i=0;
                for(var row of data){  
                        
                        var option=$('<option' + '  value='  + row.id + ' >' + row.name + '</option>')   
                        $('#selectUser').append(option);      
                }     
        });

    
});


function getSomething(){
    var result = null;
    $.ajax({
        url: 'includes/index.json',
        dataType: 'json',
        async: false,
        data: myData,
        success: function(data) {
            result=data;
        }

      });
      return result;  
}


function screenTest(e){
    $('#topMenuSearchBox').remove();
    $('#userLogInPlace').remove();
    $('#logoLink').remove();
    if(e.matches){
        $('#LogoBoxMobile').append(logoLink);
        $('#addSearchFormMobile').append($form); 
        $('#addUserLonInMobile').append(imgUserBoxLogIn);
        imgUserBoxLogIn.style.cssFloat="right";



    }else{
        $('#addSearchFormPc').append($form);   
        $('#userLogin').append(imgUserBoxLogIn);   
        imgUserBoxLogIn.style.cssFloat="left";
    }
}

mql.addListener(screenTest);














