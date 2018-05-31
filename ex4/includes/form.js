var objButton=document.getElementById("button1");
var flag;
var textArr= ["anna frank", "bialik", "yeda am" ,"hertsel"];

document.getElementById("buttonSubmit").onclick=function(){

    document.getElementById("submitId").click();

}

document.getElementById("submitId").style.visibility="hidden";

window.onload=function(){
  }
objButton.onclick=function(){

    var textArea=document.getElementById("textArea");
    var i;
    flag=0;
    for(i=0;i<textArr.length;i++)
    {
        if(textArea.value.localeCompare(textArr[i])==0)
         {

            flag=1;
         }
           
    }

    if(flag==1)
    {

            document.getElementById("submitId").click();

    }
    else
    {
        var obj_h1=document.createElement("h4");
        document.getElementById("errorText").appendChild(obj_h1);
        obj_h1.innerHTML="not equal"; 
    }
}