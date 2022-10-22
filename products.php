<?php
require_once 'rest/config/protect.php';
with('login.php', "scope");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include "headTitle.php"; ?>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/spinner-overlay.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="img/warehouse_122331.ico" rel="shortcut icon"/>
</head>

<body id="page-top">

<div id="wrapper">
	<?php include "sidebar.php"; ?>

	<div id="content-wrapper" class="d-flex flex-column">

		<div id="content">
			<?php include "topbar.php"; ?>
			<?php include "productsBody.php"; ?>
		</div>

		<?php include "footer.php"; ?>
	</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
	<em class="fas fa-angle-up"></em>
</a>

<?php include "logoutModal.php"; ?>
<?php include "newProductModal.php"; ?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/products/products.js"></script>

<script type="application/javascript">
	const userId = <?php echo $_SESSION['userid'] ?>;
	const username = "<?php echo $_SESSION['username'] ?>";
</script>

<div class="loading" style="display:none;">Loading&#8230;</div>

</body>
</html>
