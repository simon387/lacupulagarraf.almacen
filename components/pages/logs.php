<?php
require_once '../../rest/config/protect.php';
with('components/pages/login.php', "scope");
require_once '../../rest/config/config.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include "../head.title.php"; ?>
	<link href="<?php echo SCRIPT_ROOT; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<link href="<?php echo SCRIPT_ROOT; ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?php echo SCRIPT_ROOT; ?>/css/spinner-overlay.css" rel="stylesheet">
	<link href="<?php echo SCRIPT_ROOT; ?>/css/custom.css" rel="stylesheet">
	<link href="<?php echo SCRIPT_ROOT; ?>/img/warehouse_122331.ico" rel="shortcut icon" />
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
	<?php include "../sidebar.php"; ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">
			<?php include "../topbar.php"; ?>
			<?php include "../pages/logs_body.php"; ?>
		</div>
		<!-- End of Main Content -->

		<?php include "../footer.php"; ?>
	</div>
	<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<em class="fas fa-angle-up"></em>
</a>

<?php include "../modals/logoutModal.php"; ?>
<script src="<?php echo SCRIPT_ROOT; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/js/sb-admin-2.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/js/custom.js"></script>
<script src="<?php echo SCRIPT_ROOT; ?>/js/logs/logs.js"></script>

<script type="application/javascript">
	const userId = <?php echo $_SESSION['userid'] ?>;
	const username = "<?php echo $_SESSION['username'] ?>";
</script>

<!-- Modal spinner in overlay -->
<div class="loading" style="display:none;">Loading&#8230;</div>

</body>
</html>
