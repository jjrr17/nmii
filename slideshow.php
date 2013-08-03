<?php
	$section = $_GET['sec'];
	$projects = array();
	if ($section == 'home') {
		$sections = array();
		$sections[] = array('food+beverage', '/img/banner_subpage_1.jpg', '/food-beverage/');
		$sections[] = array('winery+brewery+distillery', '/img/projects/banners/p4.jpg', '/winery-brewery-distillery/');
		$sections[] = array('aggregate+mining', '/img/projects/banners/p5.jpg', '/aggregate-mining/');
		$sections[] = array('energy+refinery', '/img/banner_home.jpg', '/energy-refinery/');
		$sections[] = array('custom fabrication', '/img/projects/banners/p8.jpg', '/custom-fabrication/');
		$sections[] = array('railroad', '/img/projects/banners/p11.jpg', '/railroad/');
		for ($i=0; $i<count($sections); $i++) {
			$s = new stdClass();
			$s->title = $sections[$i][0];
			$s->img = $sections[$i][1];
			$s->href = $sections[$i][2];
			$projects[] = $s;
		}
	} else {
		$h = fopen($_SERVER['DOCUMENT_ROOT'].'/projects.csv', 'r');
		while (($csv = fgetcsv($h)) !== false) {
			if ($csv[3] == $section) {
				$project = new stdClass();
				$project->id = $csv[0];
				$project->title = $csv[1];
				$img = '/img/projects/banners/p'.$csv[0].'.jpg';
				if (file_exists($_SERVER['DOCUMENT_ROOT'].$img)) {
					$project->img = $img;
				} else {
					$project->img = '/img/banner_FPO.gif';
				}
				$projects[] = $project;
			}
		}
		fclose($h);
	}
	echo json_encode($projects);
