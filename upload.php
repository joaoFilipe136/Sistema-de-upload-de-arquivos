<?php
   
   $tmp = $_FILES['arquivo']['tmp_name'];
   $name = $_FILES['arquivo']['name'];

   $pessoaNome = $_POST['nome'];
   $local = $_POST['cidade'];
   $dataTime = date("d-m-Y H-i");

   $nomeFinal = $pessoaNome." - ".$local." - ".$dataTime;

   $path = pathinfo($name);
   $ext = $path['extension'];

   $extPermi = array("png","PNG","jpg","jpeg","gif","svg");

   if (in_array($ext, $extPermi)) {
      move_uploaded_file($tmp,"Projeto ARTSHARE/".$nomeFinal.".".$ext);
      echo "<br> Arquivo emviado com sucesso!";
   }else{
      echo "<br> Extensão não permitida!";
   }

   