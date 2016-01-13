<?
$headtitle = 'bingo';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div class="wrap" id="<?echo $headtitle;?>">
	<?echo $_bingoback;?>
	<div class="lock">
		<?echo $_keyword;?>
		<?echo $_bingo;?>
	</div>	
</div>

<?
@include('_library/link/php/footer.php');
?>