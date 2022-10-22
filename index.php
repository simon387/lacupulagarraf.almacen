<?php
require_once 'rest/config/protect.php';
with('login.php', "scope");
?>

<!DOCTYPE html>
<html lang="es">
<?php include "head.php"; ?>

<body id="page-top">

<div id="wrapper">
	<?php include "sidebar.php"; ?>
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<?php include "topbar.php"; ?>
			<?php include "dashboard.php"; ?>
		</div>
		<?php include "footer.php"; ?>
	</div>
</div>

<?php include "logoutModal.php"; ?>
<?php include "newPeriodModal.php"; ?>
<?php include "jsImport.php"; ?>

<script src="js/dashboard/dashboard.js"></script>

</body>
</html>
