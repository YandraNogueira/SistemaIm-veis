<?php 
extract($_POST);

$pasta = $_POST['nomepasta'];
$arquivo = "comodos/$pasta/"; 

$remover = array(".","..");

if(is_dir($arquivo)){
        $files = scandir($arquivo);
        $files = array_diff($files, $remover);
        foreach ($files as $value) {
                unlink($arquivo.$value);
            } 
            rmdir($arquivo);
            echo "Pasta deletada com sucesso!";
            } else{
            echo "<br> Desculpe... a pasta não foi encontrada!";
             
            }  
            
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <style type="text/css">
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
    </style>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Delete file</title>
 </head>
 <body>
    <a href='remover.php'> <center><button> Deletar novamente </button></center> </a> <br>
    <a href='index.php'> <center><button> Página inicial </button></center> </a>
 </body>
 </html>