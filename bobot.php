<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('navbar.php');
?>
<section class="content container mt-5">
	<h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?></h2>
	<?php showTabelPerbandingan($jenis,'alternatif'); ?>
</section>