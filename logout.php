<?php
include "valida_sessao.php";
session_destroy(); //destroy the session
header("location:/financas/"); //to redirect back to "index.php" after logging out
exit();
?>