<?php
require_once 'rest/config/protect.php';
with('login.php', "scope");
?>

<?php include "head.php"; ?>

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

<?php include "logoutModal.php"; ?>
<?php include "newProductModal.php"; ?>
<?php $page = "products"; ?>
<?php include "jsImport.php"; ?>