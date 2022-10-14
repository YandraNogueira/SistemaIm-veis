<?php 
extract($_POST);

$dir = $_POST['nomeimo'];
$pathRoot = "comodos/$dir"; 
if (is_dir("$pathRoot")) {
	// nada
}else{
    mkdir("$pathRoot");
}


$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeFile = $_FILES['userfile']['name'];

$ParteImov = $_POST['prtimov'];
$parInfo = pathinfo("$nomeFile");
$ext = $parInfo['extension'];
//echo $ext;

if ($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
	move_uploaded_file($nomeTemp,$pathRoot."/".$ParteImov.".$ext");
	echo "Sucesso!! Extensão aceita!";
}else{
	echo "Error!! Extensão não aceita!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload</title>
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
	 <a href='index.php'> <center><button> Página inicial </button></center> </a> <br>
	 <a href='remover.php'> <center><button> Deletar arquivos </button></center> </a>
</body>
</html>