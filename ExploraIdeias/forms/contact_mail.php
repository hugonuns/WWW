<?php
$toEmail = "geral@exploraideias.pt";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>Enviado com sucesso!</p>";
} else {
print "<p class='Error'>Problema ao enviar.</p>";
}
?>