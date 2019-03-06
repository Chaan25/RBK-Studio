<?php 
    $destino="rbkstudio4@gmail.com";
    $contactName=$_POST["contactName"];
    $contactEmail=$_POST["contactEmail"];
    $contactMessage=$_POST["contactMessage"];
    $content="Nombre: ".$contactName."\nE-mail: ".$contactEmail."\nMensaje: ".$contactMessage;
    mail($destino,"Contacto",$content);
    header("location:./");
?>