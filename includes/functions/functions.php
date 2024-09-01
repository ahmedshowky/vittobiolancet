<?php

	/**
	== title function that echo the page title in case the page has variable [$pageTitle]
	== and echo defualt title if has't variable [$pageTitle]
	**/ 
	function getTitle() {
		global $pageTitle;
		if (isset($pageTitle)) {
			echo $pageTitle;
		} else {
			echo "VIT";
		}
	}

?>