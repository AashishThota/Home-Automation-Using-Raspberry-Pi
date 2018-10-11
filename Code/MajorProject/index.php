 <?php
 $myfl=  fopen("light1.txt", "r");
 $status=  fread($myfl, 2);
 ?> 
<html>
    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
</script>
<style>
html, body
{
    height: 100%;
    margin:0;
    padding:0;
}

div {
    position:relative;
    height: 100%;
    width:100%;
}

#backgrd {
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:auto;
    z-index:-1;
}
#image1{
display:block;
width:50px;
height:50px;
position:absolute;
top:37%;
left:40%;
right:50%;
bottom:50%;
}
#image2{
display:none;
width:50px;
height:50px;
position:absolute;
top:37%;
left:40%;
right:50%;
bottom:50%;
}
#f1{
display:block;
width:50px;
height:50px;
position:absolute;
left:51%;
top:50%;
right:50%;
botom:50%;

}
#f2{
display:none;
width:50px;
height:50px;
position:absolute;
left:51%;
top:50%;
right:50%;
botom:50%;


}

</style>
<script>
    <?php
    if($status=="0")
    {
    ?>
     document.getElementById("image1").style.display="block";
       document.getElementById("image2").style.display="none";
     
        <?php 
    }else{
        ?>
            document.getElementById("image1").style.display="none";
       document.getElementById("image2").style.display="block";
            <?php
    }
            ?>
function change(id){
var x= document.getElementById("image1");
var y= document.getElementById("image2");
var value;
if(id=="image1")
{
    
x.style.display="none";
y.style.display="block";
value=1;
            var xhttp = new XMLHttpRequest();
   
    xhttp.open("GET", "light1.php?light1="+value, true);
    xhttp.send();
}
else{
x.style.display="block";
y.style.display="none";
value=0;
var xhttp = new XMLHttpRequest();
   
    xhttp.open("GET", "light1.php?light1="+value, true);
    xhttp.send();
}
}
function changeFan(id){
var x= document.getElementById("f1");
var y= document.getElementById("f2");
var value;
if(id=="f1")
{
x.style.display="none";
y.style.display="block";
value=1;
          var xhttp = new XMLHttpRequest();
   
    xhttp.open("GET", "fan.php?fan="+value, true);
    xhttp.send(); 
}
else{
x.style.display="block";
y.style.display="none";
value=0;
var xhttp = new XMLHttpRequest();
   
    xhttp.open("GET", "fan.php?fan="+value, true);
    xhttp.send();
           
}
}

</script>
</head>
<body>
<div><img src="http://cranberrycove.ca/wp-content/uploads/2017/02/welcome-img.png" id="backgrd" >
<img src="41divnkkBVL._SL500_AC_SS350_.jpg" id="image1" onclick="change(this.id)">
<img src="download.jpg" id="image2" onclick="change(this.id)">
<img src="images.png" id="f1" onclick="changeFan(this.id)"  />
<img src="giphy.gif" id="f2" onclick="changeFan(this.id)"  />
</div>
</body>

</html>
