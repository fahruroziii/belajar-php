<?php
session_start();
session_destroy();

echo "LOGOUT BERHASIL...";
echo "<meta http-equiv='refresh'content='2; url=index.php'>";
?>