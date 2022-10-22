<?php
require_once 'rest/config/protect.php';
with('login.php', "scope");
$page = "dashboard";
?>

<?php include "head.php"; ?>
<?php include "wrapper.php"; ?>

<?php include "logoutModal.php"; ?>
<?php include "newPeriodModal.php"; ?>
<?php include "jsImport.php"; ?>