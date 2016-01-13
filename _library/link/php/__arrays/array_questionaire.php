<?

/*
## ABOUT ############################################################################ */

$array_questionaire = array();
/*———————————————————————————————————
these will hold all questions for input and also descriptions with the questions



———————————————————————————————————*/
?>
<?

$array_questionaire = array(
	'business questionaire' => array(
		'description' => 'this questionaire helps provide an overall understanding of the company. it allows a vision to be painted, and helps align the design process to create assets for the company.'
		'basics' => array(
			'what is mission of the company?' => 'list 3 top key points that make this company unique that no other company can claim?',
			),
		'audience' => array(			
			'please describe the company\'s targeted customers?' => '',
			'please describe the company\'s loyal customers?' => '',
			'how would you like the audience to perceive the company?' => '',
			'how does the audience currently perceive the company?' => '',
			),
		'employees' => array(),
		'competition' => array(
			'please provide the company\'s top 3 competition?' => '',
			'please provide which company\'s contribute influence, or main/partial inspiration?'
			),
		),
	'website requirements' => array(
		'description' => 'this questionaire helps provide key information to streamline the design process.'
		'basics' => array(
			'what is your current domain name (if any)' => '',
			'what is your hosting service plan? (if any)' => '',
			'please provide the account# and password (if any)' => '',
			'do w'
			),
		'availability' => array(
			'do you have a logo?' => 'a logo needs be present so a customer has a face to remember. logos help reiterate retention for people that have a hard time remembering names, and is a key component to branding.',
			'if so, is the logo versatile?' => 'a versatile logo is provided in multiple file formats specifically designed for: websites, print, and overall color versatility (to be placed on light/dark surfaces)',
			'do we have any available imagery?' => 'imagery will be used for: headers, about us page, service page, etc.',
			'will you be able to provide verbaige for pages?' => 'without consise content, we lose the extremely short attention span of visitors, because a face-to-face conversation is not present.',
			'are you present in any social media? (not required, but recommended for only one username for consistency)' => 
				//social media statistics —> http://www.convinceandconvert.com/social-media-research/11-shocking-new-social-media-statistics-in-america/
				'because today, more than 10 million users are connected digitally and primarily communicate in digital space, and not tapping into that realm can hinder growth in the future',
			),
		),
	);

?>
<?
/*———————————————————————————————————*/
// Purpose:
// add photo area and photography array


/*———————————————————————————————————*/

function questionaire($array_questionaire){
	$output = $output . '<div class="containerinfo">';
	$output = $output . '</div>'; // end DIV containerinfo
	return $output;
	}$_questionaire = questionaire($array_questionaire);
?>

<?
function contactform(){
	if(isset($_GET['status']) AND $_GET['status'] == 'thanksman'){
		$output = $output . '<p class="content" style="margin-bottom:20px;"><span class="white">Thanks for the message! I\'ll get back to you shortly!</span></p>';
		$output = $output . '<p style="margin:-10 0 20px 0;padding:0;" class="content"><i>In the meantime, feel free to add me in one of the social networks that I\'m currently active in shown below.</i></p>';
		}else{
		$output = $output . '<p class="content">Any questions or ideas on a project? Feel free to drop me a message below!</p>';
		$output = $output . '<form method="post">';
			$output = $output . '<div class="input_group">';
				$output = $output . '<input type="text" name="name" placeholder="Name">';
				$output = $output . '<input type="email" name="email" placeholder="E-Mail">';
			$output = $output . '</div>';
			$output = $output . '<select name="question">';
				$output = $output . '<option value="general">General</option>';
				$output = $output . '<optgroup label="Creative Services">';
					$output = $output . '<option value="graphic design">Graphic Design</option>';
					$output = $output . '<option value="logo design">Logo Design</option>';
					$output = $output . '<option value="web design">Web Design</option>';
				$output = $output . '</optgroup>';
			$output = $output . '</select>';
			$output = $output . '<textarea style="margin-bottom:0px;" name="message" placeholder="Message"></textarea><br>';
			$output = $output . '<input style="display:none;" type="text" name="address" placeholder="Leave this field untouched."><br>';
			$output = $output . '<input type="submit">';
		$output = $output . '</form>';
	}
	return $output;
	}
?>











