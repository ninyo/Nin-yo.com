<?

/*
## ABOUT ############################################################################ */

$array_about = array();

/*———————————————————————————————————





———————————————————————————————————*/

$work_experience = date('Y') - 2009;
$email = 'here@nin-yo.com';
$file_resume = '_library/link/dl/resume_ninyoaganon.pdf';
?>
<?
$array_about = array(
	'selfphoto' => array(
		'_library/img/asset/ninyo_5.gif',
		'_library/img/asset/ninyo_3.png', // photo at bremerton ferry taken by danielle
		'_library/img/asset/ninyo_2.png', // photo at sylvia beach, newport, OR
		'_library/img/asset/ninyo_1.png', // photo at bloedel reserve, bainbridge island, WA
		),
	'description_intro' => 'Hi my name is Ninyo, a <strong><a target="none" href="'.$file_resume.'" style="color:black;">Graphic Designer</a></strong> based in the region of Kitsap, WA.',
	// 'description_body' => "My overall goal as a designer is to develop my work experiences, network with talented people to gain inspiration, establish myself as a well-rounded creative, and most of all be myself. I’ve spent the majority of my time as a graphic designer, but this field seems to be changing, and I’m pretty comfortable learning extra things to fit a new environment. InDesign would be considered the main tool that I've accidentally spent over <i>5000 hours</i> on over the past couple years (among other handful of applications I use daily). <br/><br/>I've been curious about mixing my current capabilities with new skills from: front-end web development, user research methodologies (for UX design principles), user interface design projects, simple sketching, etc. Graphic design is so interconnected with many layers where it tempted me to learn more around it. Once I reach my 10th year, I’ll hone down into mastering one or two of my strongest outlets (2010 marks my first year). I’m still a student at heart. <br/><br/>On my own time I do my best to stay away from the screen, spend more time with friends, hunt down new tastes of Ryes & Malbecs, and create some light videography with an old T2i DSLR equipped with a single lens whenever I’m out of town with loved ones. Want more!? My non-dominant hand can slowly write better than my dominant hand, and I know 50 digits of pi which is my best useless skill. Alright, I've gone way too far now. Thanks for reading this far, you’re awesome too.",
	'description_body' => "I've been commuting across the water on a ferryboat to work as a Graphic Designer in Seattle since 2009. It's been great to have collaborated with a number of design groups & creative energy throughout my time working in this field. So far, I enjoy creating: logos, print materials (flat &amp; fold), layouts for websites & multi-page documents (books, magazines, editorials, etc.), online advertisements (static &amp; motion), mobile applications, and more. Keep me in mind (via&nbsp;<a href='mailto:".$email."'>e&#8209;mail</a>) when thinking of a new future project, and when you're ready to go, don't hesitate to shoot me a message!&mdash;Enjoy!",
	// I’ve spent the majority of my time as a graphic designer in this field, but it's evolving and requiring more, so I’m pretty confident in learning extra things to fit a new environment. I've been curious about mixing current capabilities with new working skills from: light front-end web development, user research methodologies, user interface design, simple sketching, light videography, etc. InDesign would be considered the main tool that I've accidentally spent over 5000 hours on. 

	//———————————————————
	//My overall goal as a designer is to develop my work experiences, meet talented people to gain new perspectives, establish myself as a well-rounded creative, and most of all be myself. 
	//What's required out of a "Graphic designer" in 2007 has changed quite a bit than what's needed in 2016. I feel confident that I've kept myself up to date. If there's something that I need to learn about, then I'm excited to learn it. 
	//On my own time I do my best to impossibly stay away from the screen to spend more time with friends, hunt down new tastes of Ryes & Malbecs, and shoot light videography out of town with an old DSLR using only one lens (18-35mmf/1.8). Want to know more?: Knowing 50 digits of pi is my best useless skill; I've never submitted to the ice bucket challenge; I've seen a UFO. Alright, I've gone way too far now. — Thanks for reading this far, you’re awesome too.
	//More on : nin-yo.com
	//———————————————————
	
	'description_extra_h' => "",
	'description_extra' => "On my own time I do my best to impossibly stay away from the screen to spend more time with friends, hunt down new tastes of Ryes & Malbecs, and shooting light videography out of town with an old DSLR using only one lens (18-35mmf/1.8). Want to know more?: Knowing 50 digits of pi is my best useless skill; I've never submitted to the ice bucket challenge; I've seen a UFO with my cousin hovering over and vanishing above our heads. Alright, I've gone way too far now. — Thanks for reading this far, you’re awesome too.",
	// 'description_body' => "I've been exposed to awesome collaboration with design groups & creative energy throughout my time working in this field in Seattle (making the Ferry ride for years worth the effort). So far, I enjoy the development of: logos; print materials (flat &amp; fold); layouts for websites & multi-page documents (books, magazines, editorials, etc.); demonstration of interactivity in user interfaces (animating through video); and more. Experience, even the smallest, is a stepping stone for something much larger. Keep me in mind (via&nbsp;<a href='mailto:".$email."'>e&#8209;mail</a>) when thinking of a new future project, and when you're ready to go don't hesitate to shoot me a message!&mdash;Enjoy!",
	// 'personal' => "Outside of work, I still do some form of design/art work on a personal scale. It's something I've always done, but never actually took it seriously since I never knew people/businesses actually sought out for this kind of thing growing up, until I got older. For example: I spent many hours creating websites, logos, books, and art for myself back in middle school (1998) which kind of sparked this side of my interest. Or while my friends were playing Starcraft, I would actually spend hours programming games through the Starcraft engine using the Staredit program. However, throughout highschool I got into b-boying, because there were unique individuals that sparked a lot of influence, and I wanted to be a part of that movement. B-boying to me was definitely form of performance art that I enjoyed and spent about 10 years with (but by no means am I perfect at it). I honestly don't feel like I'm creating anything great, except that I'm still doing what I've been doing as a kid, but with a more wiser perspective. My outlet for creating websites on a personal scale, is spent in the back-end of this portfolio site; My outlet for creativity is videography; My outlet for art is photography.",
	'quotes' => array(
		"" => "You're the outcome of who you allow yourself to become.",
		"" => "Choose your skills wisely and consolidate them to just only a small handful to get the most hours into each of them",
	 	),
	'resume' => array( //resume array gets separated as $resume_group
		'work' => array(
			'mentor creative' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'surrounded by a birdseye view of DT Seattle is an office where designers and developers can experiment, learn, and push themselves by creating multi-disciplinary product teams.',
				//'role' => 'My role in this company is designing these kits, with a high attention to typographic detail and design layout.'
				'focus' => 'UI designer',
				'location' => 'Smith Tower, Seattle WA',
				'details' => array(
					"Design layouts & interactivity for client/community side platforms within a scrum development environment. Responsibilities include: wireframes, lo-fi prototypes, userflow, visual direction, redline & assets for web, and video demos to demonstrate interactivity, animations, and screen flow from one screen to the next. (Working as a contractor)",
					// "Designed page layouts demonstrating its interactivity used for client/customer facing interfaces",
					// "Demonstrated interactivity of specified page elements through subtle transitions to help create unique experiences and solution",
					// "Provide developers clean redline pdf documents using html/css language for clarity"
					),
				'programs' => array('indesign','invision','after effects','media encoder','illustrator','pixate'),
				),
			'revolution' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'A marketing company, housing many entreprenuers, specializing in a full creative service starting from concept into completion.',
				//'role' => 'My role in this company is designing these kits, with a high attention to typographic detail and design layout.'
				'focus' => 'graphic designer',
				'location' => 'Sodo, Seattle WA',
				'details' => array(
					"Designed all types of prints (flat & fold) to fit t-mobile/brooks marketing materials for events & kiosks. Included were: logos for business groups & events; multi-language wake screen advertisements for amazon kindlefire; and informative mobile app games. Working as a contractor.",
					// "Designed print & di-cut materials consisting of mailable kits (created for informational facilitation events & kiosks for T&#8209Mobile)",
					// "Designed a large amount of wake screen apps for Amazon's Kindlefire products (exported in 6 languages)",
					// "Designed logos for business groups & events",
					// "Designed content layout materials for facilitation events",
					),
				'programs' => array('indesign','illustrator','photoshop'),
				),
			'watson' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'Surrounded by towering Douglas Firs in their HQ, this company specializes in high-end creative and sustainable office furniture designs and in&#8209house manufacturing. ',
				//'role' => 'My role in this company was redesigning their informational material, as they\'ve gone through an online rebranding and wanted to integrate the new look and feel into their printed material, which also is available as downloadable PDFs.'
				'focus' => 'graphic designer',
				'location' => 'DT, Seattle WA',
				'details' => array(
					"Some responsibilities included: prepped images to be used as digital & printed assets; designed multi-page print / digital documents for their full-sized brochures to serve as both downloadables (with interactive pdf functionalities), and as printed presentations; helped design visual pieces for their showcase presentation room. Worked as a contractor.",
					// "Designed multi&#8209page print / digital design layouts for their brochures and templated",
					),
				'programs' => array('indesign','photoshop','illustrator'),
				),
			'rn2 creative' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'Collaborating with the longest lasting Pan Asian-American Newspaper in the country, is a reputable design group known through their large community involvement.',
				'focus' => 'graphic designer',
				'location' => 'International District, Seattle WA',
				'details' => array(
					"Designed a full range of deliverables from web layouts for static & cms websites; traditional full page & full spread advertisements for magazines; multi-page print / digital layouts with interactivity; logos and branding for small businesses, events, and np organizations; and more. Worked as a contractor.",
					// "Developed branding for small businesses &amp; organizations",
					// "Designed web layouts for static &amp; content management sites",
					// "Designed multi&#8209page print / digital layouts",
					// "Designed logos for small businesses, events, and organizations",
					),
				'programs' => array('indesign','photoshop','premierepro','illustrator'),
				),
			'jennergy' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'Located in a dream-type home, with one house designated for business, and the other as the owner\'s home (connected together by a wooden sun deck), is a small award winning design firm serving clients from Kitsap county to Seattle.',
				'focus' => 'graphic designer',
				'location' => 'Poulsbo, Kitsap WA',
				'details' => array(
					"Designed multi-page print / web design layouts and logos for small & large businesses, government, events, and organizations within the state of Washington. Worked as a contractor.",
					// "Designed multi&#8209page print / web design layouts",
					// "Designed logos for small & large businesses, government, events, and organizations",
					),
				'programs' => array('indesign','photoshop','premierepro','illustrator'),
				),
			/*'freelance' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => "My time as a freelancer is short, but active. I've contributed my time mainly as a contractor, but experienced a large array of different short project types from digital design, production, development planning, videography, video production, branding, etc.",
				'focus' => 'graphic designer',
				'location' => 'Poulsbo, Kitsap WA',
				'details' => array(
					"Designed multi-page print / web design layouts and logos for small & large businesses, government, events, and organizations within the state of Washington. Worked as a contractor.",
					// "Designed multi&#8209page print / web design layouts",
					// "Designed logos for small & large businesses, government, events, and organizations",
					),
				'programs' => array('indesign','illustrator','premierepro','after effects','photoshop','sublime text','screenflow','media encoder','github'),
				),*/
			),
		'school' => array( //school array gets separated as $company
			'general assembly' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'New methods of design are constantly updated parallel to new technology. Knowing this, I figured I’d extend my knowledge of Graphic Design through UX foundations.',
				'location' => 'WeWork, Seattle WA',
				'focus' => 'UX design',
				'duration' => 'Accelerated 12-week program',
				'details' => array(
					'lo-fi/hi-fi prototyping deliverables',
					'user research methodologies & usability testing',
					'userflow, wireframe, persona development, information architecture',
					'axure, Invision',
					),
				'programs' => array('indesign','axure','invision','after effects','media encoder','illustrator','photoshop'),
				),
			'art institute' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'This school teaches design foundations to train students for a corporate, or traditional design firm setting. This gave me the fundamentals to understand the importance of: color psychology, design layout, typographic studies, art direction, print production, adobe application training, and more.',
				'location' => 'DT, Seattle WA',
				'focus' => 'Graphic Design',
				'duration' => '2-years',
				'details' => array(
					'art direction',
					'print & web design',
					'typography',
					'design layout',
					),
				'programs' => array('illustrator','indesign','photoshop','premierepro'),
				),
			'olympic college' => array(
				'switch' => 'on',
				'duration' => array('','',),
				'experience' => 'While completing pre-requisit courses (to transition into a University setting), my interests went towards the Humanities/Art, and Natural Science department. The rest of my time went to Social Sciences.',
				'location' => 'Bremerton, Kitsap WA',
				'focus' => 'humanities &amp; natural/Social sciences',
				'duration' => '2-years',
				'details' => array(
					'astronomy',
					'sociology & psychology',
					'web design fundamentals',
					'video production',
					),
				'programs' => array('premierepro','photoshop'),
				),
			),
		),
	'resume_link' => '_library/link/dl/resume_ninyoaganon.pdf',
	'photography' => array(
		'https://c4.staticflickr.com/4/3951/15721841896_d6cda7bebc_n.jpg' => 'https://www.flickr.com/photos/126964637@N04/15721841896/',
		'https://c2.staticflickr.com/6/5603/15559672729_eac06bc42f_n.jpg' => 'https://www.flickr.com/photos/126964637@N04/15559672729/',
		'https://c4.staticflickr.com/4/3947/15559673519_e03d788346_n.jpg' => 'https://www.flickr.com/photos/126964637@N04/15559673519/',
		'https://c4.staticflickr.com/4/3944/15560382327_51b9319f28_n.jpg' => 'https://www.flickr.com/photos/126964637@N04/15560382327/',
		),
 	);
?>
<?
/*———————————————————————————————————*/
// Purpose: 
// Used:    1.


// add photo area and photography array


/*———————————————————————————————————*/

function about($array_about){
	$output = $output . '<div class="containerinfo">';
	/*———————————————————————————————————*/
	$output = $output . '<div class="blockinfo">';
	$count = 0;
	
		$output = $output . '<div class="groupcontent">';
		$count = 0;
		foreach($array_about['selfphoto'] as $image){
			$count = $count +1;
			if($count == 1){
				$output = $output . '<a class="photocircle" style="background-image:url('.$image.'); height:100px; width:100px;"></a>';
				}
			}
		$output = $output . '<p class="boldintro">'.$array_about['description_intro'].'</p>';
		$output = $output . '<p class="content">'.$array_about['description_body'].'</p>';
		$output = $output . '</div>'; 
	$output = $output . '</div>'; 

	/* EXPERIENCE ———————————————————————————————————*/
	$output = $output . '<div id="experience">';
	$resumecount = 0;
	foreach($array_about['resume'] as $resume => $resume_group){
		$resumecount = $resumecount +1;
		$output = $output . '<div class="resume_group resume'.$resumecount.'">';
			$output = $output . '<h2>'.strtoupper($resume.' experience').'</h2>';
			// $resume -> $data_work -> company -> data
			$output = $output . '<div style="margin-bottom:20px;">';
			foreach($resume_group as $company => $data_company){
				if($data_company['switch']=='on'){
					$output = $output . '<div class="resume_target">';
						$output = $output . '<h3>'.titlecase($company).' ('.ucwords($data_company['location']).')</h3>';
						$output = $output . '<p>'.ucfirst($data_company['experience']).'</p>';
						if($resume=='school'){
							$output = $output . '<p> <strong>Focus:</strong> '.ucwords($data_company['focus']).'</p>';
							}else{
							$output = $output . '<p> <strong>Position:</strong> '.ucwords($data_company['focus']).'</p>';
							}
						if($resume=='school'){
							$output = $output . '<p> <strong>Interests:</strong>';
							}else{
							$output = $output . '<p> <strong>Responsibilities:</strong>';
							}
						$total = 0;
						$count = 0;
						/*—————————————————————————*/
						// foreach($data_company['details'] as $details => $list_details){
						// 	//this is meant to precount the total items in array before numbering them
						// 	$total = $total +1;
						// 	} 
						// foreach($data_company['details'] as $details => $list_details){
						// 	$count = $count +1;
						// 	$output = $output .' '. titlecase($list_details);
						// 	if($count == $total){
						// 		$output = $output . '.';
						// 		}else{
						// 		$output = $output . ', ';	
						// 		}
						// 	}
						/*—————————————————————————*/
						$output = $output . '<ul>';
						foreach($data_company['details'] as $details => $list_details){
							$output = $output . '<li>'.sentence_case($list_details).'</li>';
							}
						$output = $output . '</ul>';
					$output = $output . '</div>';
					}
				}
			$output = $output . '</div>';
		$output = $output . '</div>';
		}
	$output = $output . '</div>';

	$output = $output . '<div class="containerinfo" style="margin-top:5px;">';
	$output = $output . '<div class="blockinfo">';
	$output = $output . '<div class="groupcontent">';
	$output = $output . '<p class="content">'.$array_about['description_extra'].'</p>';
	$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '</div>';

	// $output = $output . '<ul class="windows">';
	// $output = $output . '<div>';
	// $count = 0;
	// foreach($array_about['photography'] as $image => $flickr){
	// 	$count = $count +1;
	// 	if($count < 3){
	// 		$output = $output . '<a href="'.$flickr.'">';
	// 		$output = $output . '<li style="background:url('.$image.')center; background-size:cover;"></li>';
	// 		$output = $output . '</a>';
	// 		}
	// 	}
	// $output = $output . '</div>';
	// $output = $output . "<p>I update my Flickr account whenever I get a chance. I enjoy taking photos for fun as a way to capture travel experiences, and ... yeah, for my screen saver &mdash; HA!</p>";
	// $output = $output . '</ul>';
	/*———————————————————————————————————*/
	$output = $output . '</div>'; // end DIV containerinfo
	return $output;
	}$_about = about($array_about);
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
<?
function socialnetwork($array_about){
	$output = $output . '<div class="wrap">';
		$output = $output . '<div style="padding-top:60px;" class="lock">';
			$output = $output . '<div class="socialboard" id="socialnetwork">';
				$output = $output . '<p>Social Links</p>';
				$output = $output . '<ul class="programs">';
					$output = $output . '<div class="fixer">';
						$count = 0;
						foreach($array_about['networks'] as $network => $link){
							$count = $count +1;
							if($count < 6){
								$output = $output . '<li><a target="none" href="'.$link.'"><span style="background:url(_library/img/asset/gfx_icon_'.$network.'.svg)center;" class="explode"><span></a></li>';
								}
							}
					$output = $output . '</div>';
				$output = $output . '</ul>';
			$output = $output . '</div>';
		$output = $output . '</div>';
		$output = $output . '<div class="bar_vertical"></div>';
		$output = $output . '<div class="writing" style="width:93px; height:20px; background:url(_library/img/asset/gfx_writing_thanks.svg)center;"></div>';
	$output = $output . '</div>';
	return $output;
	}$_socialnetwork = socialnetwork($array_about);

?>
<?//echo '<span style="font-weight:bold;">about loaded</span>: need to create output functions<br>';?>











