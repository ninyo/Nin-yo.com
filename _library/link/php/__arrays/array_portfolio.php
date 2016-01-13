<?

/*
## PORTFOLIO ############################################################################ */

$array_portfolio = array();
@include('type/array_type_print.php');
@include('type/array_type_web.php');
@include('type/array_type_logo.php');

/*———————————————————————————————————*/

// Explanation: 

//    Here you'll paste in your portfolio pieces that are categorized by either:

//       1. Print Design
//       2. Web Design
//       3. Logo Design

//    A portfolio piece will have a consise description of the project with a main photo and supporting photo 
//    representations along with supporting credit on everyone who helped the project along the way. This way
//    you're not giving pure credit to only yourself. It's great PR on your end. 


?>
<?
function carousel($array_portfolio){
	$output = $output . '<a href="portfolio.php" style="display:block;" class="label label_fixed"><h1>Presented are recent selected pieces. &nbsp;</h1><p>Click to see more portfolio pieces.</p></a>';
	$output = $output . '<ul class="grid" style="padding:0">';
	foreach($array_portfolio as $key => $portfolio){
		if($portfolio['display_front'] == TRUE){
			$count = 0;
			foreach($portfolio['images'] as $image => $description){
				$count = $count +1;
				if($count == 1){
					$output = $output . '<a style="background:url('.$image.')center; background-size:cover;" href="piece.php?id='.$key.'">';
					$output = $output . '<div class="overlay"></div>';
					$output = $output . '<li>';
					$output = $output . '<p class="label">'.ucwords($portfolio['title']).'</p>';
					$output = $output . '</li>';
					$output = $output . '</a>';
					}
				}
			}
		}
	$output = $output . '</ul>';
	return $output;
	}$_carousel = carousel($array_portfolio);
?>
<?
function portfolio_back(){
	if(!isset($_GET['switch'])){
		$output = $output . 'index.php';
		}else{
		$output = $output . 'portfolio.php';
		}
	return $output;
	}$_portfolio_back = portfolio_back();
?>
<?
/*———————————————————————————————————*/
// Purpose: This will create a looped content area that will categorize all portfolio pieces 
//          from $array_portfolio into separate categories
// Used:    1. portfolio.php
/*———————————————————————————————————*/

function portfolio($array_portfolio){
	if(!isset($_GET['switch'])){
		$output = $output . '<div class="tip_dark">';
			$output = $output . '<p class="fordesktoponly">Presented here is a collection of work separated into three categories: Graphic, Web, & Logo design.</p>';
			$output = $output . '<p class="forhandheldonly">Presented here is just a small amount of work I\'ve done. Hop onto your desktop to view more.</p>';
			$output = $output . '<p class="tip_reveal"><i>Some of these projects range from 2010 to present.</i></p>';
		$output = $output . '</div>'; // end DIV containertip
		$output = $output . '<a href="portfolio.php?switch=web" class="label label_fixed hidefordevice"><h1>Digital Design</h1><p>Click to view more Interactive Design</p></a>';
		$output = $output . '<ul class="grid" style="padding:0;">';
		$count_wd = 0;
		foreach($array_portfolio as $key => $portfolio){
			if($portfolio['group'] == 'portfolio'){
				if($portfolio['category'] == 'web design'){
					$count = 0;
					$count_wd = $count_wd + 1;
					if($count_wd < 7){
						foreach($portfolio['images'] as $image => $description){
							$count = $count + 1;
							if($count == 1){
								$output = $output . '<a style="background:url('.$image.')center; background-size:cover;" href="piece.php?id='.$key.'">';
								$output = $output . '<div class="overlay"></div>';
								$output = $output . '<li style="">';
								$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
								$output = $output . '</li>';
								$output = $output . '</a>';
								}
							}
						}
					}
				}
			}
		$output = $output . '</ul>';
		$output = $output . '<a href="portfolio.php?switch=graphic" class="label label_fixed hidefordevice"><h1>Print Design</h1><p>Click to view more Graphic Design</p></a>';
		/*———————————————————————————————————*/
		$output = $output . '<ul class="grid" style="padding:0;">';
		$count_gd = 0;
		foreach($array_portfolio as $key => $portfolio){
			if($portfolio['group'] == 'portfolio'){
				if($portfolio['category'] == 'graphic design'){
					$count = 0;
					$count_gd = $count_gd + 1;
					if($count_gd < 10){
						foreach($portfolio['images'] as $image => $description){
						$count = $count + 1;
							if($count == 1){
								$output = $output . '<a style="background:url('.$image.')center; background-size:cover;" href="piece.php?id='.$key.'">';
								$output = $output . '<div class="overlay"></div>';
								$output = $output . '<li style="">';
								$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
								$output = $output . '</li>';
								$output = $output . '</a>';
								}
							}
						}
					}
				}
			}
		$output = $output . '</ul>';
		/*———————————————————————————————————*/
		
		/*———————————————————————————————————*/
		$output = $output . '<a href="portfolio.php?switch=logo" class="label label_fixed hidefordevice"><h1>Identity Design</h1><p>Click to view more Logo Design</p></a>';
		$output = $output . '<ul class="grid" style="padding:0;">';
		$count_ld = 0;
		foreach($array_portfolio as $key => $portfolio){
			if($portfolio['group'] == 'portfolio'){
				if($portfolio['category'] == 'logo design'){
					$count = 0;
					$count_ld = $count_ld + 1;
					if($count_ld < 10){
						foreach($portfolio['images'] as $image => $description){
							$count = $count + 1;
							if($count == 1){
								$output = $output . '<a style="background:url('.$image.')center; background-size:140%;" href="piece.php?id='.$key.'">';
								$output = $output . '<div class="overlay"></div>';
								$output = $output . '<li style="">';
								$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
								$output = $output . '</li>';
								$output = $output . '</a>';
								}
							}
						}
					}
				}
			}
		$output = $output . '</ul>';
		/*———————————————————————————————————*/
		}else{
			if($_GET['switch'] == 'graphic'){
				$output = $output . '<div class="tip_dark">';
				$output = $output . '<p>Displaying more projects of graphic design work.</p>';
				$output = $output . '</div>'; // end DIV containertip
				$output = $output . '<ul class="grid" style="padding:0;">';
				$count_gd = 0;
				foreach($array_portfolio as $key => $portfolio){
					if($portfolio['group'] == 'portfolio'){
						if($portfolio['category'] == 'graphic design'){
							$count = 0;
							$count_gd = $count_gd + 1;
							foreach($portfolio['images'] as $image => $description){
							$count = $count + 1;
								if($count == 1){
									$output = $output . '<a style="background:url('.$image.')center; background-size:cover;" href="piece.php?id='.$key.'">';
									$output = $output . '<div class="overlay"></div>';
									$output = $output . '<li style="">';
									$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
									$output = $output . '</li>';
									$output = $output . '</a>';
									}
								}
							}
						}
					}
				$output = $output . '</ul>';
				}
			if($_GET['switch'] == 'web'){
				$output = $output . '<div class="tip_dark">';
				$output = $output . '<p>Displaying more projects of interactive design work.</p>';
				$output = $output . '</div>'; // end DIV containertip
				$output = $output . '<ul class="grid" style="padding:0;">';
				$count_wd = 0;
				foreach($array_portfolio as $key => $portfolio){
					if($portfolio['group'] == 'portfolio'){
						if($portfolio['category'] == 'web design'){
							$count = 0;
							foreach($portfolio['images'] as $image => $description){
								$count = $count + 1;
								$count_wd = $count_wd + 1;
								if($count == 1){
									$output = $output . '<a style="background:url('.$image.')center; background-size:cover;" href="piece.php?id='.$key.'">';
									$output = $output . '<div class="overlay"></div>';
									$output = $output . '<li style="">';
									$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
									$output = $output . '</li>';
									$output = $output . '</a>';
									}
								}
							}
						}
					}
				$output = $output . '</ul>';
				}
			if($_GET['switch'] == 'logo'){
				$output = $output . '<div class="tip_dark">';
				$output = $output . '<p>Displaying more projects of logo design work.</p>';
				$output = $output . '</div>'; // end DIV containertip
				$output = $output . '<ul class="grid" style="padding:0;">';
				$count_ld = 0;
				foreach($array_portfolio as $key => $portfolio){
					if($portfolio['group'] == 'portfolio'){
						if($portfolio['category'] == 'logo design'){
							$count = 0;
							foreach($portfolio['images'] as $image => $description){
								$count = $count + 1;
								$count_ld = $count_ld + 1;
								if($count == 1){
									$output = $output . '<a style="background:url('.$image.')center; background-size:140%;" href="piece.php?id='.$key.'">';
									$output = $output . '<div class="overlay"></div>';
									$output = $output . '<li style="">';
									$output = $output . '<p class="label">'.titlecase($portfolio['title']).'</p>';
									$output = $output . '</li>';
									$output = $output . '</a>';
									}
								}
							}
						}
					}
				$output = $output . '</ul>';
				}
		}
	return $output;
	}$_portfolio = portfolio($array_portfolio);
?>
<?
/*———————————————————————————————————*/
// Purpose: This will create a structured content area that will creates a hero image at top
//          accompanied by content display and more loops from $array_portfolio. 
// Used:    1. piece.php
/*———————————————————————————————————*/

function piece_default($array_portfolio){
	$id = $_GET['id'];
	$portfolio = $array_portfolio[$id];
	/*————————————————————————————————————————————————————————————————————*/
	if(isset($portfolio['casestudy'])){
		$output = $output . '<form class="casestudy" style="margin:0 0 5px 0;" action="piece.php" method="get">';
		$output = $output . '<input type="hidden" name="id" value="'.$id.'">';
		$output = $output . '<input type="hidden" name="switch" value="casestudy">';
		$output = $output . '<input type="submit" value="Additional Info Available">';
		$output = $output . '</form>';
		}
	$count = 0;
	$output = $output . '<div class="blockinfo">';
	foreach($portfolio['images'] as $image => $description){
		$count = $count +1;
		if($count == 1){
			$output = $output . '<a href="'.$image.'" target="none"><div class="imagery" style="background:url('.$image.')center; background-size:cover;">';
			}
		}
	$output = $output . '<p class="label">'.ucwords($portfolio['category']).'</p>';
	$output = $output . '</div></a>'; // end DIV .imagery
	/*——————————————————————————————*/
	$output = $output . '<div style="height:3px; width:100%; background:black;"></div>';
	$output = $output . '<div class="groupcontent">';
	$output = $output . '<h1 class="title">'.titlecase($portfolio['title']).'</h1>';
	$output = $output . '<p class="sub">Project with: ';
	foreach($portfolio['client'] as $client => $website){
		$output = $output . '<a href="'.$website.'" target="none">' .titlecase($client). '</a> ';
		}
	$output = $output . '</p>';
	
	$output = $output . '<p class="content">'.ucfirst($portfolio['description']).'.</p>';

	$output = $output . '</div>'; // end DIV .groupcontent
	$output = $output . '</div>'; // end DIV .blockinfo
	/*————————————————————————————————————————————————————————————————————*/
	$output = $output . '<ul class="windows">';
	$count = 0;
	foreach($portfolio['images'] as $image => $description){
		$count = $count +1;
		if($count > 1){
			$output = $output . '<a target="none" class="'.$count.'" href="'.$image.'">';
			$output = $output . '<li style="list-style-type:none; background:url('.$image.')center; background-size:cover;"></li>';
			$output = $output . '</a>';
			}
		}
	$output = $output . '</ul>';
	/*————————————————————————————————————————————————————————————————————*/
	$output = $output . '<div class="badges" style="background: #555;">';
		$output = $output . '<p>software tools used:</p>';
		$output = $output . '<ul class="loop_container">';
			$output = $output . '<div class="fixer">';
			foreach($portfolio['software'] as $software){
				if($software == 'indesign'){$output = $output . '<li style="list-style-type:none;" class="'.$software.'">Id</li>';}
				if($software == 'illustrator'){$output = $output . '<li style="list-style-type:none;" class="'.$software.'">Ai</li>';}
				if($software == 'photoshop'){$output = $output . '<li style="list-style-type:none;" class="'.$software.'">Ps</li>';}
				if($software == 'premierepro'){$output = $output . '<li style="list-style-type:none;" class="'.$software.'">Pr</li>';}
				}
			$output = $output . '</div>';
		$output = $output . '</ul>';
	$output = $output . '</div>';
	/*————————————————————————————————————————————————————————————————————*/
	if(isset($portfolio['casestudy'])){
		$output = $output . '<form class="casestudy" action="piece.php" method="get">';
		$output = $output . '<input type="hidden" name="id" value="'.$id.'">';
		$output = $output . '<input type="hidden" name="switch" value="casestudy">';
		$output = $output . '<input type="submit" value="Additional Info Available">';
		$output = $output . '</form>';
		}
	$output = $output . '</div>'; // closing container

	return $output;
	}$_piece_default = piece_default($array_portfolio);
?>
<?
/*———————————————————————————————————*/
// Purpose: This will create a structured content area that will creates a hero image at top
//          accompanied by content display and more loops from $array_portfolio. 
// Used:    1. piece.php
/*———————————————————————————————————*/

function piece_casestudy($array_portfolio){
	$id = $_GET['id'];
	$portfolio = $array_portfolio[$id];
	/*————————————————————————————————————————————————————————————————————*/
	if(isset($portfolio['casestudy'])){
		$output = $output . '<form class="casestudy" style="margin:0 0 5px 0;" action="piece.php" method="get">';
		$output = $output . '<input type="hidden" name="id" value="'.$id.'">';
		$output = $output . '<input type="submit" value="Back to Presentation">';
		$output = $output . '</form>';
		}
	$count = 0;
	$output = $output . '<div class="blockinfo">';
	
	$output = $output . '<div class="groupcontent">';
		/*$output = $output . '<form class="casestudy" action="piece.php" method="get">';
			$output = $output . '<input type="hidden" name="id" value="'.$id.'">';
			$output = $output . '<input type="submit" value="Back to Presentation">';
		$output = $output . '</form>';
		*/
		$output = $output . '<h1 class="title" style="margin-top:10px;">Casestudy</h1>';
		$output = $output . '<p class="sub"><strong>Project</strong>: '.titlecase($portfolio['title']).'</p>';
		$output = $output . '<ul style="padding:20px; background:#f3f3f3; margin:0px 0px 30px 0px;">';
		foreach($portfolio['credit'] as $credit => $title){
			$output = $output . '<p class="subcase" style="list-style-type:none;">'.titlecase($credit).', <i>'.titlecase($title).'</i></li>';
			}
		$output = $output . '</ul>';

		/*
		if(vidlink is set){then
			$output = $output . '<div class="videoclip"></div>'; // this will be for mobile & tablet to show on vimeo but not next code. disable this in desktop
			$output = $output . '<div class="videoclip"></div>'; // this will be shown for desktop to view here but not on mobile & tablet. disable this in scss
			}
		*/
		$count = 0;
		foreach($portfolio['casestudy'] as $key => $casestudy){
			$count = $count +1;
			if($count == 1){
				$output = $output . '<p class="caseintro"><b>'.ucfirst($casestudy).'.</b></p>';
				}
			}
		$output = $output . '<ol style="padding:10px 0 10px 20px;">';
		$count = 0;
		foreach($portfolio['casestudy'] as $key => $casestudy){
			$count = $count +1;
			if($count > 1){
				$output = $output . '<li class="brief"><b class="bold">'.titlecase($key).':</b> '.sentence_case($casestudy).'.</li>';
				}
			}
		$output = $output . '</ol>';
	/*——————————————————————————————*/
	/*
	$output = $output . '<ul style="padding:0;">';
	$output = $output . '<h2>Deliverable(s):</h2>';
	$count = 0;
	foreach($portfolio['deliverables'] as $deliverables){
		$count = $count +1;
		$output = $output . '<li style="list-style-type:none;" class="deliverables">'.$count.'. '.ucwords($deliverables).'</li>';
		}
	$output = $output . '</ul>';

	$output = $output . '<ul class="supportingimages" style="padding:0; background:#999;">';
	$count = 0;
	foreach($portfolio['images'] as $image => $description){
		$output = $output . '<div>';
		$output = $output . '<a target="none" class="'.$count.'" href="'.$image.'">';
		$output = $output . '<li style="list-style-type:none; background:url('.$image.')center; background-size:cover; width:100px; height:100px;"></li>';
		$output = $output . '</a>';
		$output = $output . '<p>'.sentence_case($description).'</p>';
		$output = $output . '</div>';
		}
	$output = $output . '</ul>';
	/*
	/*——————————————————————————————*/
	/*if(isset($portfolio['casestudy'])){
		$output = $output . '<form class="casestudy" action="piece.php" method="get">';
		$output = $output . '<input type="hidden" name="id" value="'.$id.'">';
		$output = $output . '<input type="submit" value="Back to Presentation">';
		$output = $output . '</form>';
		}
	*/
	/*——————————————————————————————*/
	$output = $output . '</div>';
	$output = $output . '</div>'; // closing container

	return $output;
	}$_piece_casestudy = piece_casestudy($array_portfolio);
?>
<?
/*———————————————————————————————————*/
// Purpose: This will create a structured content area that will creates a hero image at top
//          accompanied by content display and more loops from $array_portfolio. 
// Used:    1. piece.php
/*———————————————————————————————————*/

function piece($array_portfolio){
	if(!isset($_GET['switch'])){
			$output = piece_default($array_portfolio);
		}else{
			$output = piece_casestudy($array_portfolio);
		}
	return $output;
	}$_piece = piece($array_portfolio);
?>
<?//echo '<span style="font-weight:bold;">portfolio loaded</span>: finished with array but need to add credit arrays and create output functions<br>';?>











