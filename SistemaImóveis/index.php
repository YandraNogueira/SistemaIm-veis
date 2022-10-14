<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Inicial</title>
	<style type="text/css">
body{
margin-top: 100px;
margin-bottom: 70px;
background-color: #f4d291;
}
form{
text-align: center;
}
h1{
font-size: 62px;
text-align: center;
}
p{
font-size: 25px;
font-weight: 1000;
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
/* From uiverse.io by @alexroumi */
.user {
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

.user::before {
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

.user:hover {
 color: #e8e8e8;
}

.user:hover::before {
 width: 100%;
}
	</style>
</head>
<body>
	<h1>Sistema de Imóveis:</h1>
	<form enctype="multipart/form-data" method="post" action="upload.php">
		<p>Imóvel: <input type="text" name="nomeimo"></p>
		<p>Partes do imóvel: <input type="text" name="prtimov"></p>

		<p><input name="userfile" type="file" class="user" /></p>

		<p><button type="submit">Enviar arquivo</button></p>
	</form>
	<br> <a href='galeria.php'> <center><button> Visitar galeria </button></center> </a>

</body>
</html>