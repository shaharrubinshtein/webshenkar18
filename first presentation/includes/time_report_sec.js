window.onload=function(){


    

    this.document.getElementById("progress_bar").style.height="100px";
    document.getElementById("time_report_tag").style.fontWeight="bold";
    document.getElementById("user_name_arrow").addEventListener("click",open_user_bar);


    var  obj_table_head=document.createElement("section");


    obj_table_head.style.height="33px";
    obj_table_head.style.width="700px";
    obj_table_head.style.borderTop="2px solid #c0c0c0";
    obj_table_head.style.borderBottom="2px solid #c0c0c0";
    obj_table_head.style.borderRight="2px solid #c0c0c0";
    obj_table_head.style.borderLeft="2px solid #c0c0c0";
    obj_table_head.style.backgroundColor="#e6e6e6";



    document.getElementById("time_report_sec_page_table").appendChild(obj_table_head);

    add_top_menu_box(60,"תאריך",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(69,"יום",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(65,"משעה",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(75,"עד שעה",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(85,"סך השעות",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(117,"מקום פגישה",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(115,"תוכן הפגישה",obj_table_head,"#e6e6e6",1);
    add_top_menu_box(100,"הוצאות נסיעה",obj_table_head,"#e6e6e6",0);


    addRow("1.1.18","ראשון","15:00","17:00","שעתיים","ירושלים","אנגלית","11.40");

    

    document.getElementById("timeReportSecPageSubmit").addEventListener("click",addRecordToTable);
    document.getElementById("timeReportSecPageSubmit").style.visibility = "hidden";
    
    document.getElementById("timeReportSecPageSubmitFake").addEventListener("click",addRecordToTable);
  

}

function addRecordToTable(){

   

   // alert( document.getElementById("time_report_sec_page_date_in").value);


   // time_report_sec_page_date_in

   // time_report_sec_page_day_in

   // time_report_sec_page_from_time_in


   // timeReportSecPageToTimeIn


   // timeReportSecPageTotalTimeIn

   // timeReportSecPagePlaceIn

   // timeReportSecPageToContentIn

  //  timeReportSecPageToCostIn


    addRow(document.getElementById("time_report_sec_page_date_in").value,document.getElementById("time_report_sec_page_day_in").value,document.getElementById("time_report_sec_page_from_time_in").value,document.getElementById("timeReportSecPageToTimeIn").value,document.getElementById("timeReportSecPageTotalTimeIn").value,document.getElementById("timeReportSecPagePlaceIn").value,document.getElementById("timeReportSecPageToContentIn").value,document.getElementById("timeReportSecPageToCostIn").value);



}



function addRow(date,day,fromTime,toTime,totalTime,place,content,cost)
{

    var tableObj=document.createElement("section");

    var  obj_table_student_section=document.createElement("section");
    tableObj.style.height="33px";
    tableObj.style.width="700px";
    tableObj.style.borderBottom="2px solid #c0c0c0";
    tableObj.style.borderRight="2px solid #c0c0c0";
    tableObj.style.borderLeft="2px solid #c0c0c0";
    tableObj.style.backgroundColor="green";
   


    
        document.getElementById("time_report_sec_page_table").appendChild(tableObj);
    
        add_top_menu_box(60,date,tableObj,"#ffffff",1);
        add_top_menu_box(69,day,tableObj,"#ffffff",1);
        add_top_menu_box(65,fromTime,tableObj,"#ffffff",1);
        add_top_menu_box(75,toTime,tableObj,"#ffffff",1);
        add_top_menu_box(85,totalTime,tableObj,"#ffffff",1);
        add_top_menu_box(117,place,tableObj,"#ffffff",1);
        add_top_menu_box(115,content,tableObj,"#ffffff",1);
        add_top_menu_box(100,cost,tableObj,"#ffffff",0);






   // add_top_menu_student_box(77,pic,obj_table_student_section,1,"#ffffff",0,1,0);

   // add_top_menu_student_box(120,name,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(95,id,obj_table_student_section,1,"#ffffff",0,0,1);
   // add_top_menu_student_box(69,student_class,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(78,subject,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(108,school,obj_table_student_section,1,"#ffffff",0,0,0);
   // add_top_menu_student_box(120,hours,obj_table_student_section,0,"#ffffff",0,0,0);







}


function open_user_bar(){

    alert("aaaa");

}


function add_top_menu_box(w,name,obj_row,obj_color,left_border){




    var tableObj=document.createElement("section");  
    
    tableObj.style.width=w+"px";
    tableObj.style.height="33px";

    if(left_border==1)
    {
        tableObj.style.borderLeft="2px solid #c0c0c0";
    } 


    tableObj.style.backgroundColor=obj_color;
    tableObj.style.cssFloat="right";
    tableObj.style.color="black";
    tableObj.style.fontSize="14px";
    tableObj.innerHTML=name;
    tableObj.style.textAlign = "center";
    tableObj.style.fontFamily = "helvetica,Charcoal,sans-serif";
    tableObj.style.fontWeight="bold";
    tableObj.style.lineHeight = "37px";

  
    obj_row.appendChild(tableObj);


    

}