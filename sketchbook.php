<?
$headtitle = 'sketchbook';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<a href="index.php" class="breadcrumb">
		<div class="lock"><p>Back</p></div>
	</a>
	<div class="lock">
		<?echo $_sketchbook;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>