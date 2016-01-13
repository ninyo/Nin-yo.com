<?
$headtitle = 'portfolio';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<a href="<?echo $_portfolio_back;?>" class="breadcrumb">
		<div class="lock"><p>Back</p></div>
	</a>
	<div class="lock">
		<?echo $_portfolio;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>