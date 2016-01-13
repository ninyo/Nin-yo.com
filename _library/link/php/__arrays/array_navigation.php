<?

/*
## NAVIGATION ############################################################################ */

$array_navigation = array();
// This shop will contain:
			// 1. Sketchpad (three types): 
			//     $12 [wanderer pack]  - 4 blank, 2 grid, 2x 5 mobile spaces +1 large (interior) 
			//     $12 [developer pack] - 2 blank, 2 grid, 2x 5 mobile spaces +1 large (interior), 2x 3 tablet spaces 
			//     $12 [artist pack]    - 6 blank, 2 grid (interior)
			// 2. Art pieces - To be printed onto acrylic through Bumblejax
			// 3. Designer Shirts - To be printed through Fingersduke
/*———————————————————————————————————*/
?>
<?
$array_navigation = array(
	'links' => array(
		'portfolio' => array(
			'switch' => 'on',
			'description' => 'Current portfolio work',
			),
		'about' => array(
			'switch' => 'on',
			'description' => 'Short bio with a resume link',
			),
		'sketchbook' => array(
			// 'switch' => 'on',
			'description' => 'Collection of concept sketch pages',
			),
		'lab' => array(
			'switch' => 'on',
			'description' => 'Collection of saved inspiration',
			),
		'shop' => array(
			// 'switch' => 'on',
			'description' => $loremipsum,
			),
		),
	'socialnetwork' => array( // only up to five allowed, will not display more on board
		'instagram' => 'http://instagram.com/ninyoaganon',
		'linkedin' => 'http://linkedin.com/in/ninyo',
		// 'twitter' => 'http://twitter.com/ninyoaganon',
		// 'soundcloud' => 'http://soundcloud.com/ninyoaganon',
		// 'flickr' => 'http://www.flickr.com/photos/126964637@N04',
		'treehouse' => 'http://teamtreehouse.com/ninyo',
		),
	'description' => "Ninyo is a multi-disciplinary Graphic Designer currently working as a contractor in <i>Seattle</i>. <span class='extradescription'>He enjoys hip-hop events, and random roadtrips within Washington & Oregon. His overall goal is to continue learning & developing work experiences to further establish himself as a creative.</span>",
	// 'description' => "Thanks for the visit! I'm a multi-disciplinary Graphic Designer currently working as a contractor in <i>Seattle</i>. <span class='extradescription'>I enjoy hip-hop events, and random roadtrips within Washington & Oregon. My overall goal is to continue learning & developing my work experiences to further establish myself as a creative.</span>",
	);
?>

<?
/*———————————————————————————————————*/
function navigation($array_navigation){
// This will create a NAV element that contains the structure of main navigation sourced from $array_navigation
	
	$output = $output. '<nav>';
		/*———SOCIALBAR————————————————————————————————*/
		$output = $output . '<div>';
			$output = $output . '<div style="background:#363639; overflow:hidden;" class="lock socialbar">';
			$output = $output . '<ul style="padding:0" class="loop_container">';
				$output = $output . '<span class="fixer">';
				$count = 0;
				foreach($array_navigation['socialnetwork'] as $socialnetwork => $stuff){
					$count = $count +1;
					if($count < 5){
						$output = $output . '<li class="'.$socialnetwork.'">';
							$output = $output . '<a class="explode" style="background:url(_library/img/asset/gfx_icon_'.$socialnetwork.'.svg)center; " target="none" href="'.$stuff.'">';
							$output = $output . '</a>';
						$output = $output . '</li>';
						}
					}
				$output = $output . '</span>';
			$output = $output . '</ul>';
		$output = $output . '</div>';
		/*———SITELINKS————————————————————————————————*/
		$output = $output . '<ul class="lock sitelinks">';
			$count = 0;
			$countswitch = 0;
			// $output = $output . '<a href="index.php">';
			//<span id="menuicons" style="width:23px; height:23px; background:url(_library/img/asset/gfx_icon_front.svg) 0 69px; margin:0 10px -6px 0; display:inline-block;"></span>
			// $output = $output . '<li style="list-style-type:none;">LANDING</li>';
			// $output = $output . '</a>';
			// $output = $output . '<div class="divider"></div>';
			foreach($array_navigation['links'] as $page => $links){
				$count = $count +1;
				if($links['switch'] == 'on'){
					$countswitch = $countswitch +1;
					}
				if(isset($links['switch'])){ // if turned on then display
					$output = $output . '<a href="'.$page.'.php">';
					//<span class="navicons" style="width:23px; height:23px; background:url(_library/img/asset/gfx_icon_'.$page.'.svg) 0 69px; margin:0 10px -6px 0; display:inline-block;"></span>
					$output = $output . '<li style="list-style-type:none;">'.mb_strtoupper($page).'</li>';
					$output = $output . '</a>';
					if($count <= $countswitch){ // if the counted elements is equal to or less than countswitch
						$output = $output . '<div class="divider"></div>';
						}
					}
				}
		$output = $output . '</ul>';
		$output = $output . '</div>';
		/*———PEEK————————————————————————————————*/
		$output = $output . '<a style="display:block;" class="wrap" id="peek">';
			$output = $output . '<div class="lock tab_pulldown navicon"></div>';
		$output = $output . '</a>';
		/*———————————————————————————————————*/
	$output = $output. '</nav>';
	return $output;
} $_navigation = navigation($array_navigation);
?>

<?

function footerlinks($array_navigation){
	$count = 0;
	$countswitch = 0;
	$output = $output . '<footerlink>';
		$output = $output . '<div class="wrap" style="background:black; padding-top:20px;">';
			$output = $output . '<ul class="lock sitelinks" style="padding:0;">';
				$output = $output . '<div class="group">';
				/*———————————————————————————————————*/
				$output = $output . '<div class="left">';
					$output = $output . '<p class="shortbio" style="color:white; text-align:center; line-height:16pt;">'.$array_navigation['description'].'</p>';
					// $output = $output . '<a href="index.php">';
					// $output = $output . '<li class="frontlink" style="list-style-type:none; margin-top:0;">LANDING</li>';
					// $output = $output . '</a>';
					// $output = $output . '<div class="divider" style=""></div>';
					foreach($array_navigation['links'] as $page => $links){
						$count = $count +1;
						if($links['switch'] == 'on'){
							$countswitch = $countswitch +1;
							}
						if(isset($links['switch'])){ // if turned on then display
							$output = $output . '<a href="'.$page.'.php">';
							$output = $output . '<li style="list-style-type:none;">'.mb_strtoupper($page).'<p>'.$links['description'].'</p></li>';
							$output = $output . '</a>';
							if($count <= $countswitch){ // if the counted elements is equal to or less than countswitch
								$output = $output . '<div class="divider"></div>';
								}
							}
						}
				$output = $output . '</div>';
				/*———————————————————————————————————*/
				$output = $output . '<div class="placeholder">';
				$output = $output . '</div>';
				/*———————————————————————————————————*/
				$output = $output . '</div>';
			$output = $output . '</ul>';
			$output = $output . '<div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</footerlink>';
	return $output;
	} $_footerlinks = footerlinks($array_navigation);

?>
<?//echo '<span style="font-weight:bold;">navigation loaded</span>: output function created<br>';?>











