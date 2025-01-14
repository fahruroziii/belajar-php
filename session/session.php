<?php
session_start();
$_SESSION["username"] = "yuu otosaka";
$_SESSION["password"] = "asempayung";

echo "Berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>Cek Session</a>";
?>