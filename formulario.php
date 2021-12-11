<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<meta charset="utf-8">
	<title> Formulário para envio de artes - ARTSHARE </title>
   <style>
      p{
         position: relative;
         text-align: center;
      }
      h2{
         text-align: center;
      }
      body{
         background-color: #66CDAA;
      }
   </style>
</head>
<body>
   <form action="upload.php" enctype="multipart/form-data" method="post"> 

    <h2> FORMULÁRIO PARA ENVIO DE ARTES - ARTSHARE </h2>
   	
    <p> Digite seu nome: <input type="text" name="nome"></p>
    <p class="p2"> Cidade onde mora: <input type="text" name="cidade"></p>
    <p> <input type="file" name="arquivo"></p>
    <p> <button type="submit"> Enviar arquivo </button> </p>
    
   </form>
</body>
</html>