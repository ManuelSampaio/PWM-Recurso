<?php
unset($_SESSION['nome']);
unset($_SESSION['senha']);
header('Location: ../HTML/login.php');
?>