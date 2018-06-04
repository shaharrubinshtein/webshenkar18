var obj_form=document.createElement("FORM");
var obj_text=document.createElement("input");




$("document").ready(function(){  
    obj_text.setAttribute("type","text");
    obj_form.appendChild(obj_text);
    document.getElementsByTagName("body")[0].appendChild(obj_form);
    obj_form.style.visibility = "hidden";

    



});


window.onload=function(){

    var  obj_table_head=document.createElement("section");

    var  obj_table_buttom=document.createElement("section");

    obj_table_buttom.id="buttom_table_menu";

   


    obj_table_head.style.height="39px";
    obj_table_head.style.width="679px";
    obj_table_head.style.borderTop="2px solid #c0c0c0";
    obj_table_head.style.borderRight="2px solid #c0c0c0";
    obj_table_head.style.borderLeft="2px solid #c0c0c0";
    obj_table_head.style.backgroundColor="#e6e6e6";


   
   
    
    add_top_menu_box(77,"תמונה",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(120,"שם",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(95,"תעודת זהות",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(69,"כיתה",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(78,"מקצוע",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(108,"בית ספר",obj_table_head,1,"#e6e6e6",0);
    add_top_menu_box(120,"סיכום שעות",obj_table_head,0,"#e6e6e6",0);


    add_top_menu_box(77,"",obj_table_buttom,1,"#ffffff",0);
    add_top_menu_box(120,"",obj_table_buttom,1,"#ffffff",0);
    add_top_menu_box(95,"",obj_table_buttom,1,"#ffffff",1);
    add_top_menu_box(69,"",obj_table_buttom,1,"#ffffff",0);
    add_top_menu_box(78,"",obj_table_buttom,1,"#ffffff",0);
    add_top_menu_box(108,"",obj_table_buttom,1,"#ffffff",0);
    add_top_menu_box(120,"",obj_table_buttom,0,"#ffffff",0);


    obj_table_buttom.style.height="39px";
    obj_table_buttom.style.width="679px";
    obj_table_buttom.style.borderTop="2px solid #c0c0c0";
    obj_table_buttom.style.borderBottom="2px solid #c0c0c0";
    obj_table_buttom.style.borderRight="2px solid #c0c0c0";
    obj_table_buttom.style.borderLeft="2px solid #c0c0c0";
    
    obj_table_buttom.style.backgroundColor="green";


    


    create_top_menu_student_section("student_1.png","nir adler","302909866","2","english","aaa","2");
    create_top_menu_student_section("student_2.png","nir adler","302909866","2","english","aaa","2");
    create_top_menu_student_section("student_2.png","nir adler","302909866","2","english","aaa","2");

    document.getElementById("student_table").appendChild(obj_table_buttom);


    document.getElementById("add_logo").addEventListener("click",add_student_button);
  
        document.getElementById("user_name_arrow").addEventListener("click",open_user_bar);

}

function open_user_bar(){

    alert("aaaa");

}

function add_student_button(){

    
    create_top_menu_student_section("student_2.png","nir adler","302909866","2","english","aaa","2");

    

}


function create_top_menu_student_section(pic,name,id,student_class,subject,school,hours)
{
    var  obj_table_student_section=document.createElement("section");
    obj_table_student_section.style.height="63px";
    obj_table_student_section.style.width="679px";
    obj_table_student_section.style.borderTop="2px solid #c0c0c0";
    obj_table_student_section.style.borderRight="2px solid #c0c0c0";
    obj_table_student_section.style.borderLeft="2px solid #c0c0c0";
    obj_table_student_section.style.backgroundColor="green";
    obj_table_student_section.id=id;

    if(document.getElementById("buttom_table_menu"))
    {
       
        document.getElementById("student_table").insertBefore(obj_table_student_section,document.getElementById("buttom_table_menu"));

    }
    else
    {

        document.getElementById("student_table").appendChild(obj_table_student_section);
    }
    


    add_top_menu_student_box(77,pic,obj_table_student_section,1,"#ffffff",0,1,0);

    add_top_menu_student_box(120,name,obj_table_student_section,1,"#ffffff",0,0,0);
    add_top_menu_student_box(95,id,obj_table_student_section,1,"#ffffff",0,0,1);
    add_top_menu_student_box(69,student_class,obj_table_student_section,1,"#ffffff",0,0,0);
    add_top_menu_student_box(78,subject,obj_table_student_section,1,"#ffffff",0,0,0);
    add_top_menu_student_box(108,school,obj_table_student_section,1,"#ffffff",0,0,0);
    add_top_menu_student_box(120,hours,obj_table_student_section,0,"#ffffff",0,0,0);


}


function add_top_menu_student_box(w,text,section_el,left_border,color,add_sign,pic_flag,id_flag)
{
    var table_student_obj_1=document.createElement("section");  
    table_student_obj_1.style.width=w+"px";
    table_student_obj_1.style.height="63px";

    if(left_border==1)
    {
        table_student_obj_1.style.borderLeft="2px solid #c0c0c0";
    } 
    table_student_obj_1.style.backgroundColor=color;
    table_student_obj_1.style.cssFloat="right";
    table_student_obj_1.style.color="#0055cc";
    table_student_obj_1.style.fontSize="14px";
    if(pic_flag==1)
    {

        var obj_pic=document.createElement("section");

        obj_pic.style.height="46px";
        obj_pic.style.width="46px";
        
        obj_pic.style.backgroundImage = "url('../images/" + text + "')";
        obj_pic.style.backgroundRepeat = "no-repeat";
        obj_pic.style.cssFloat="right";
        obj_pic.style.marginRight="15px";
        obj_pic.style.marginTop="8.5px";
        table_student_obj_1.appendChild(obj_pic);
    }
    else
    {
        if(id_flag==1)
        {
            var id_link=document.createElement('a');

            id_link.href = "show_student.html";
            id_link.innerHTML=text;
            table_student_obj_1.appendChild(id_link);
            table_student_obj_1.style.lineHeight = "63px";
            table_student_obj_1.style.textAlign = "center";
            table_student_obj_1.style.fontWeight="bold";
            id_link.setAttribute('target','_blank');
            id_link.style.textDecoration="none";
            



        }
        else
        {
            
            table_student_obj_1.innerHTML=text;
            table_student_obj_1.style.textAlign = "center";
            table_student_obj_1.style.fontFamily = "helvetica,Charcoal,sans-serif";
            table_student_obj_1.style.fontWeight="bold";
            table_student_obj_1.style.lineHeight = "63px";
            table_student_obj_1.style.color="#777777";
        }
        
    }
    

    if(add_sign==1)
    {
        var add_logo=document.createElement("section");
        add_logo.height="25px";
        add_logo.width="25px";
        add_logo.id="add_logo";
        add_logo.innerHTML="+";
        add_logo.backgroundColor="gray";
        table_student_obj_1.appendChild(add_logo);
    }
    table_student_obj_1.style.cssFloat="right";
    section_el.appendChild(table_student_obj_1);

}




function add_top_menu_box(w,text,section_el,left_border,color,add_sign){

    var table_student_obj_1=document.createElement("section");  
    table_student_obj_1.style.width=w+"px";
    table_student_obj_1.style.height="39px";

    if(left_border==1)
    {
        table_student_obj_1.style.borderLeft="2px solid #c0c0c0";
    } 
    table_student_obj_1.style.backgroundColor=color;
    table_student_obj_1.style.cssFloat="right";
    table_student_obj_1.style.color="#0055cc";
    table_student_obj_1.style.fontSize="14px";
    table_student_obj_1.innerHTML=text;
    table_student_obj_1.style.textAlign = "center";
    table_student_obj_1.style.fontFamily = "helvetica,Charcoal,sans-serif";
    table_student_obj_1.style.fontWeight="bold";
    table_student_obj_1.style.lineHeight = "43px";

    if(add_sign==1)
    {
        var add_logo=document.createElement("section");
        add_logo.height="25px";
        add_logo.width="25px";
        add_logo.id="add_logo";
        add_logo.innerHTML="+";
        add_logo.backgroundColor="gray";
        table_student_obj_1.appendChild(add_logo);
    }
    section_el.appendChild(table_student_obj_1);

}


document.getElementById("magnifying_glass_id").addEventListener("mouseover",function (){
});

document.getElementById("magnifying_glass_id").addEventListener("mouseout", function (){

});