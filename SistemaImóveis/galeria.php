<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Galeria</title>
    <style type="text/css">
body{
margin-top: 30px;
margin-bottom: 70px;
background-color: #f4d291;
}
.container{
display: grid;
grid-row-gap: 45px;
}
.row{
display: grid;
grid-template-columns: auto auto auto auto;
grid-column-gap: 20px;
}
img{
border: 4px solid black;
height: 37vh;
width: 27vw;
}
h1{
font-size:62px;
font-family: Times, Times New Roman, serif  ;
}
button {
 padding: 15px 25px;
 border: unset;
 border-radius: 15px;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
 position: relative;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms;
 overflow: hidden;
}

button::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: #212121;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms
}

button:hover {
 color: #e8e8e8;
}

button:hover::before {
 width: 100%;
}
    </style>
</head>
<body>

<?php

$variavel = scandir('comodos');

//var_dump($variavel);

$imovel=scandir("comodos/$variavel[2]"); 
//var_dump($imovel);

$imovel2=scandir("comodos/$variavel[3]");
//var_dump($imovel2);

$imovel3=scandir("comodos/$variavel[4]");
//var_dump($imovel3);


$link01 = "comodos/$variavel[2]/$imovel[2]";
$link02 = "comodos/$variavel[2]/$imovel[3]";
$link03 = "comodos/$variavel[2]/$imovel[4]";
$link04 = "comodos/$variavel[3]/$imovel2[2]";
$link05 = "comodos/$variavel[3]/$imovel2[3]";
$link06 = "comodos/$variavel[3]/$imovel2[4]";
$link07 = "comodos/$variavel[4]/$imovel3[2]";
$link08 = "comodos/$variavel[4]/$imovel3[3]";
$link09 = "comodos/$variavel[4]/$imovel3[4]";


?>

    <center><h1><strong>Galeria de Imóveis</strong></h1></center>
    <br> <br> 
    <div class="container">
        <div class="row">
            <div class="col"> <img src="<?=$link01?>" ></div>
            <div class="col"> <img src="<?=$link04?>" ></div>
            <div class="col"> <img src="<?=$link07?>" ></div>
        </div>
        <div class="row">
            <div class="col"> <img src="<?=$link02?>" ></div>
            <div class="col"> <img src="<?=$link05?>" ></div>
            <div class="col"> <img src="<?=$link08?>" ></div>
        </div>
        <div class="row">
            <div class="col"> <img src="<?=$link03?>"></div>
            <div class="col"> <img src="<?=$link06?>"></div>
            <div class="col"> <img src="<?=$link09?>"></div>
        </div>
        
</div>
<br>
<br>
<br> <a href='index.php'> <center><button> Página inicial </button></center> </a>
<script src="bootstrap/js/bootstrap.bundle.min.js"> 
</script>
</body>
</html>




