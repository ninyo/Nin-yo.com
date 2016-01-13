<?
$headtitle = 'index';//should be placed before loader
@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<div class="lock">
		<?echo $_carousel;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>