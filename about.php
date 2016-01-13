<?
$headtitle = 'about';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<a href="index.php" class="breadcrumb">
		<p class="lock">Back</p>
	</a>	
	<div class="lock">
		<?echo $_about;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>