<?
$headtitle = 'piece';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<?
if($_GET['switch']!='casestudy'){
	echo '<div class="wrap" id="'.$headtitle.'">';
	}else{
	echo '<div class="wrap" id="'.$headtitle.'">';
	//echo '<div class="wrap" style="background:'.$color_folder.';">';
	}
echo '<a href="portfolio.php" class="breadcrumb">';
	echo '<div class="lock"><p>Back</p></div>';
echo '</a>';
echo '<div class="lock">';
echo $_piece;
echo '</div>';
echo '</div>'; // end DIV wrap_content
?>

<?
@include('_library/link/php/footer.php');
?>