<!DOCTYPE html>
<html>
<head>
	<title>Portfolio of Ninyo Aganon</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,400,600,700' rel='stylesheet' type='text/css'>
	
	<meta property="og:type" content="Portfolio" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:title" content="Portfolio of Ninyo Aganon" />
		<meta property="og:description" content="Freelance Graphic Designer from Kitsap, WA." />
		<meta property="og:image" content="http://nin-yo.com/_library/img/asset/card.png" />
		<meta property="og:url" content="http://nin-yo.com" />
	<meta name="twitter:card" content="Portfolio" />
	<meta name="twitter:title" content="Portfolio of Ninyo Aganon" />
	<meta name="twitter:description" content="Freelance Graphic/Web Designer from Kitsap, WA." />
	<meta name="twitter:image" content="http://nin-yo.com/_library/img/asset/card.png" />
	<meta name="twitter:url" content="http://nin-yo.com" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>


<body>

<?
if(($headtitle !=='influence') AND ($headtitle !=='lab') AND ($headtitle !=='direction') AND ($headtitle !=='tag') AND ($headtitle !=='bingo')){
	echo '<div class="wrap" id="top">';
	}else{
	echo '<div class="wrap" style="background:url(_library/img/asset/bg_room.png)center; background-size:cover; width:100%; height:276px;">';
	//echo '<div class="wrap" style="background:url('.$_atmosphere.')center; background-size:cover; width:100%; height:100px;">';
	
	}
?>

	<div id="header">
	<?echo $_navigation;?>
	<?echo $_avatar;?>
	</div><?/*——end DIV #lock_header—————————————————————————————————*/?>
</div><?/*——end DIV #wrap_header—————————————————————————————————*/?>