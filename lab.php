<?
$headtitle = 'lab';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<a href="index.php" class="breadcrumb">
		<div class="lock"><p>Back</p></div>
	</a>
	<div class="lock">
		<a href="mailto:here@nin-yo.com" class="label">
		<h1>Here is where I gather digital collections to inspire a creative thought, and to get to see what other creatives are doing around the world.</h1>
		<p>If your work is featured on this page and would like it removed, send me an email to remove it. Thanks!</p>
		</a>
		<?echo $_keyword;?>
		<?echo $_lab;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>