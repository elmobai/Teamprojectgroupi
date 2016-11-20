include_once'getScore.css';
<script>
var num=0,result=0,numshow="0"; 
var operate=0; 
var calcul=0; 
var quit=0; 
function command(num){  
var str=String(document.calculator.numScreen.value); 
str=(str!="0") ? ((operate==0) ? str : "") : ""; 
str=str + String(num); 
document.calculator.numScreen.value=str; 
operate=0; 
quit=0; 
} 
function dzero(){ 
var str=String(document.calculator.numScreen.value); 
str=(str!="0") ? ((operate==0) ? str + "00" : "0") : "0";  
document.calculator.numScreen.value=str; 
operate=0; 
} 
function del(){ 
var str=String(document.calculator.numScreen.value); 
str=(str!="0") ? str : ""; 
str=str.substr(0,str.length-1); 
str=(str!="") ? str : "0"; 
document.calculator.numScreen.value=str; 
} 
function clearscreen(){ 
num=0; 
result=0; 
numshow="0"; 
document.calculator.numScreen.value="0"; 
} 
var clicked =0;
function plus(){ 
calculate();  
operate=1; 
calcul=1; 
clicked++;
} 

function average(){ //average
calculate(); 
operate=1; 
calcul=2; 
} 
function equal(){ 
calculate(); //equal
operate=1; 
num=0; 
result=0; 
numshow="0";  
} 

// 
function calculate(){ 
numshow=Number(document.calculator.numScreen.value); 

//for(int count=0;){}
if(num!=0 && quit!=1){
switch(calcul){ 
case 1:result=num+numshow;break; //get pluse
case 2:result=(num+numshow)/(clicked+1);break; // get average 

} 
quit=1; 
} 
else{ 
result=numshow; 
} 
numshow=String(result); 
document.calculator.numScreen.value=numshow; 
num=result; 
} 
function clearnote(){ 
document.getElementById("note").innerHTML=""; 
} 
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title></title> 
<style type="text/css"> 
body { 
font-size:12px; 
font-family:Arial, Georgia, "Times New Roman", Times, serif; 
color:#555; 
text-align:center; 
background-color:#e2e2e2; 
} 
h6{ 
margin:0; 
font-size:12px; 
} 
#calculator { 
width:240px; 
height:auto; 
overflow:hidden; 
margin:10px auto; 
border:#fff 1px solid; 
padding-bottom:10px; 
background-color:#f2f2f2; 
} 
#calculator div { 
clear:both; 
} 
#calculator ul{ 
padding:0; 
margin:5px 14px; 
border:#fff 1px solid; 
height:auto; 
overflow:hidden 
} 
#calculator li{ 
list-style:none; 
float:left; 
width:32px; 
height:32px; 
margin:5px; 
display:inline; 
line-height:32px; 
font-size:14px; 
background-color:#eaeaea; 
} 
#calculator li.tool{ 
background-color:#e2e2e2; 
} 
#calculator li:hover{ 
background-color:#f9f9f9; 
cursor:pointer; 
} 
#calculator li:active{ 
background-color:#fc0; 
cursor:pointer; 
} 
#calculator li.tool:active{ 
background-color:#d8e8ff; 
cursor:pointer; 
} 
#calcu-head { 
text-align:left; 
padding:10px 15px 5px; 
} 
span.imyeah { 
float:right; 
color:#ccc; 
} 
span.imyeah a{ 
color:#ccc; 
} 
.screen{ 
width:200px; 
height:24px; 
line-height:24px; 
padding:4px; 
border:#e6e6e6 1px solid; 
border-bottom:#f2f2f2 1px solid; 
border-right:#f2f2f2 1px solid; 
margin:10px auto; 
direction:ltr; 
text-align:right; 
font-size:16px; 
color:#999; 
} 
#calcu-foot{ 
text-align:left; 
padding:10px 15px 5px; 
height:auto; 
overflow:hidden; 
} 
span#note{ 
float:left; 
width:210px; 
height:auto; 
overflow:hidden; 
color:red; 
} 
span.welcome{ 
clear:both; 
color:#999; 
} 
span.welcome a{ 
float:right; 
color:#999; 
} 

</style> 
<script language="javascript"> 
</script> 
</head> 
<body> 
<div id="calculator"> 
<form name="calculator" action="" method="get"> 
<div id="calcu-screen"> 
<input type="text" name="numScreen" class="screen" value="0" onfocus="this.blur();" /> 
</div> 
<div id="calcu-btn"> 
<ul> 
<li onclick="command(0)">0</li> 
<li onclick="command(1)">1</li> 
<li onclick="command(2)">2</li> 
<li onclick="command(3)">3</li> 
<li onclick="command(4)">4</li> 
<li onclick="command(5)">5</li> 
<li onclick="command(6)">6</li> 
<li onclick="command(7)">7</li> 
<li onclick="command(8)">8</li> 
<li onclick="command(9)">9</li> 
<li onclick="command(10)">10</li> 
<li class="tool" onclick="del()">←</li> 
<li class="tool" onclick="clearscreen()">c</li> 
<li class="tool" onclick="plus()">next</li> 
<li class="tool" onclick="equal()">total</li> 
<li class="tool" onclick="average()">ave</li> 
</ul> 
</div> 
<div id="calcu-foot"> 
<span id="note"></span> 
</div> 
</form> 
</div> 
</body> 
</html> 