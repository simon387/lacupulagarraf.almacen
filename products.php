<?php
require_once 'rest/config/protect.php';
with('login.php', "scope");
$page = "products";
?>

<?php include "head.php"; ?>
<?php include "wrapper.php"; ?>

<?php include "logoutModal.php"; ?>
<?php include "newProductModal.php"; ?>
<?php include "jsImport.php"; ?>