window.onload=function(){
    var objStudentAvatar=document.getElementById("studentProfileAvatar");
    objStudentAvatar.style.display="block";
    objStudentAvatar.style.backgroundImage = "url('images/student_2.png')";
    objStudentAvatar.style.backgroundRepeat = "no-repeat";
    objStudentAvatar.style.width="48px";
    objStudentAvatar.style.height="48px";
    objStudentAvatar.style.cssFloat="left";
    objStudentAvatar.style.marginLeft="76px"; 
    objStudentAvatar.style.marginTop="15px";



    document.getElementById("studentProfileName").innerHTML="ניר אדלר";
    document.getElementById("studentProfileAge").innerHTML="13";
    document.getElementById("studentProfileClass").innerHTML="ג";
    document.getElementById("studentProfileSchool").innerHTML="עין הרים";
    document.getElementById("studentProfileSubjects").innerHTML="אנגלית,ספרות";



    var  obj_table_head=document.createElement("section");
    obj_table_head.style.height="32px";
    obj_table_head.style.width="521px";
    obj_table_head.style.borderTop="2px solid #c0c0c0";
    obj_table_head.style.borderBottom="2px solid #c0c0c0";
    obj_table_head.style.borderRight="2px solid #c0c0c0";
    obj_table_head.style.borderLeft="2px solid #c0c0c0";
    obj_table_head.style.backgroundColor="#e6e6e6";



    this.document.getElementById("studentInfoTable").appendChild(obj_table_head);


       

    add_top_menu_box(103,"מקצוע",obj_table_head,"#ffffff",1);
    add_top_menu_box(109,"תאריך",obj_table_head,"#ffffff",1);
    add_top_menu_box(85,"כיתה",obj_table_head,"#ffffff",1);
    add_top_menu_box(131,"מספר מבחן",obj_table_head,"#ffffff",1);
    add_top_menu_box(85,"ציון",obj_table_head,"#ffffff",0);
 


    addRow("ספרות","1.2.2018","ד","10","85");

    
    

}




function add_top_menu_box(w,name,obj_row,obj_color,left_border){

    var tableObj=document.createElement("section");  
    tableObj.style.width=w+"px";
    tableObj.style.height="32px";
    if(left_border==1)
    {
        tableObj.style.borderLeft="2px solid #c0c0c0";
    } 
    tableObj.style.backgroundColor=obj_color;
    tableObj.style.cssFloat="right";
    tableObj.style.color="#0055cc";
    tableObj.style.fontSize="14px";
    tableObj.innerHTML=name;
    tableObj.style.textAlign = "center";
    tableObj.style.fontFamily = "helvetica,Charcoal,sans-serif";
    tableObj.style.fontWeight="bold";
    tableObj.style.lineHeight = "32px";
    obj_row.appendChild(tableObj);

}



function addRow(subject,date,classC,testId,grade)
{

    var tableObj=document.createElement("section");

    var  obj_table_student_section=document.createElement("section");
    tableObj.style.height="32px";
    tableObj.style.width="521px";
    tableObj.style.borderBottom="2px solid #c0c0c0";
    tableObj.style.borderRight="2px solid #c0c0c0";
    tableObj.style.borderLeft="2px solid #c0c0c0";
    tableObj.style.backgroundColor="green";
   


    
        document.getElementById("studentInfoTable").appendChild(tableObj);
    
        add_top_menu_box(103,subject,tableObj,"#ffffff",1);
        add_top_menu_box(109,date,tableObj,"#ffffff",1);
        add_top_menu_box(85,classC,tableObj,"#ffffff",1);
        add_top_menu_box(131,testId,tableObj,"#ffffff",1);
        add_top_menu_box(85,grade,tableObj,"#ffffff",0);
        


   // add_top_menu_student_box(77,pic,obj_table_student_section,1,"#ffffff",0,1,0);
   // add_top_menu_student_box(120,name,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(95,id,obj_table_student_section,1,"#ffffff",0,0,1);
   // add_top_menu_student_box(69,student_class,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(78,subject,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(108,school,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(120,hours,obj_table_student_section,0,"#ffffff",0,0,0);

}