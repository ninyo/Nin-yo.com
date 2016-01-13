<?

/*
## SKETCHES ############################################################################ */

$array_sketch = array();

/*———————————————————————————————————*/

$sketch_situation = 'I\'ve been collecting Moleskines ever since 2007, and I now have a great collection of them. The only thing that I noticed over the years is that everyone creative has them, and ever since I see them everywhere I felt less and less original. Artists/creatives are original by nature, and it was only a matter of time that I\'d try to create something fit for a minimal approach.';
$sketch_problem = 'Something I\'ve noticed is that when I buy a new Moleskine sketchbook, It feels like an object that would take care of your ideas and so I tend to treasure it, which is natural. Then after a couple months, the treasured feeling is lost and also my approach changes. Then, I\'d end up buying a new moleskine before I even complete it.';
$sketch_solution = '';
$sketch_anticipation = '';

?>
<?
$array_sketch['1-01'] = array(
	'date' => '',
	'description' => 'This was my first print, and first try out. I noticed that the 110lb uncoated cover stock felt nice, but it doesn\'t work very well with pencil. that gave me a notion that I should continue to just use pen, because once I was near completion, the pencil marks were rubbing off. Decided that these stacks should be used with an ink pen.',
	'images' => array( // this will be looped
		'photograph' => 'photograph.png',
		'front cover' => 'fc.png',
		'front flip' => 'ff.png',
		'interior' => 'i.png',
		'back flip' => 'bf.png',
		'back cover' => 'bc.png',
		),
	);
?>
<?
$array_sketch['1-02'] = array(
	'date' => '',
	'description' => 'This is my second page. Here contains my thought process in creating a more robust portfolio, and some side sketches. I\'ve gone through so much testing, and each time I felt like "this new set up will be my last", it turns out it was still only another test. Many months later after a lot of testing (which is great training nonetheless), I\'ve learned a ton of new concepts along the way that I want to apply into this new site as a dynamic container to hold my work and as a creative go to place when I\'m in need for visual inspiration.',
	'images' => array( // this will be looped
		'photograph' => array(
			'photograph.png' => '',
			),
		'front cover' => array(
			'fc.png' => '200px',
			),
		'front flip' => array(
			'ff.png' => '400px',
			),
		'interior' => array(
			'i.png' => '100px',
			),
		'back flip' => array(
			'bf.png' => '400px',
			),
		'back cover' => array(
			'bc.png' => '200px',
			),
		),
	);
?>
<?
/*———————————————————————————————————*/
// Purpose: 
// Used:    1. sketchbook.php

// add photo area and photography array


/*———————————————————————————————————*/

function sketchbook($array_sketch){
	$output = $output . "<p>This page is a container to hold all of my concept sketches to be represented as process art. Each page randomly consist of sketches, wireframing, structure, planning, graffiti, writing, ect.</p>";
	$output = $output . '<ul style="padding:0;">';
	foreach($array_sketch as $series => $sketch){
		$output = $output . '<a href="page.php?id='.$series.'">';
		$output = $output . '<li style="list-style-type:none;">';
		$output = $output . '<p>Concept Series '.$series.'</p>';
		$output = $output . '</li>';
		$output = $output . '</a>';
		}
	$output = $output . '</ul>';
	return $output;
	}$_sketchbook = sketchbook($array_sketch);

?>
<?

function page($array_sketch){
	$id = $_GET['id'];
	$sketch = $array_sketch[$id];
	/*———————————————————————————————————*/
	$count = 0;
	$output = $output . '<div>';
	foreach($sketch['images'] as $section => $images){
		$count = $count +1;
		if($count == 1){
			$output = $output . '<div style="background:#555 url('.$images.')center; background-size:cover; width:100%; height:300px;">';
			}
		}
	$output = $output . '</div>';
	$output = $output . '<p>'.$sketch['description'].'</p>';
	$output = $output . '</div>';
	$output = $output . '<div>';
	$count = 0;
	foreach($sketch['images'] as $section => $images){
		$count = $count +1;
		if($count > 1){
			$output = $output . '<li>'.$section.'</li>';
			}
		}
	$output = $output . '</div>';
	return $output;
	}$_page = page($array_sketch);

?>
<?//echo '<span style="font-weight:bold;">sketches loaded</span>: need to create output functions<br>';?>











