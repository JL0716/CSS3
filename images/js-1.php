﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>wefewf</title>
  
</head>
<body>
   
    <h1 id="output1"></h1>
    <h1 id="output2"></h1>   
    <h1 id="output3"></h1>  
    <h1 id="output4"></h1>
    
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    
    <script>
        //alert("QWERY");
        
        var a = 100;
        var b = "二";
        var c = true; //布林值 true false
        
        document.write(a + "<br>");
        document.write(b + "<br>");
        document.write(c + "<br>");       

        //console.log(a);
        //console.log(b);
        //console.log(c);
        
        var output1 = document.getElementById("output1").textContent="<span>test output1</span>";
        console.log(output1);

        var output2 = document.getElementById("output2").innerHTML="<span>test output2</span>";
        console.log(output2);
        
        var output3 = document.getElementById("output3");
        output3.textContent="<span>test output3</span>"
        console.log(output3);
        
        var output3 = document.getElementById("output4");
        output3.innerHTML="<span>test output3</span>"
        console.log(output4);
        
        var arrayBox3 = document.getElementsByClassName("box")[3];
        arrayBox3.textContent = "<span>test arrayBox3</span>"
        console.log(arrayBox3);
        
        var arrayBox4 = document.getElementsByClassName("box")[4];
        arrayBox4.innerHTML = "<span>test arrayBox4</span>"
        console.log(arrayBox4);
        
        var d=80;
        if(d>60){
            console.log("及格");
        }
        else {
            console.log("不及格");
        }
        
        var e=58;
        if(e>80){
            console.log("Good");
        }else if(e>60){
            console.log("Soso");
        }else{
            console.log("Idiot");
        }
        
        var f=50;
        switch(f){
            case 50:
                console.log(50);
                break;
            case 60:
                console.log(60);
                break;
            case 70:
                console.log(70);
                break;
            default:
                console.log("default");
        }
        
        var g=50;
        switch(true){
            case g>=80:
                console.log("不錯");
                break;
            case g>=60:
                console.log("及格");
                break;
            case g>=40:
                console.log("再加一點油");
                break;
            default:
                console.log("不行喔");
        }
        
        for(var i=0;i<10;i++) {
            console.log(i);
        }
        
        var j=0;
        while(j<100){
            console.log(j);
            j++;
        }
        
    </script>
</body>
</html>