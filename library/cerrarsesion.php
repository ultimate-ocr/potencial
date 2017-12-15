<?php
session_start();
session_destroy();
header('Location: /potencial/index.php');
?>