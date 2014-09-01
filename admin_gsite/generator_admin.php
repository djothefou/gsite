<?php

/**
 *
 */
class GeneratorAdmin {

	function __construct() {
		echo "je suis dans le fonction construc de generator admin<br/>\n";
	}

	public function clean_dir() {
		echo "je suis dans clean dir<br/>\n";
		$files = glob('../admin_site');
		foreach ($files as $file) {// iterate files
			echo "---";
			var_dump($file);
			
			unlink($file);
			// delete file
		}
	}

	public function generate() {
		echo "je suis dans generate<br/>\n";
		echo "<br/>\n";
		$path = $_SERVER['DOCUMENT_ROOT']."/truc.php";
		echo $path."<br/>\n";
		$fp = fopen($path,"w");
		var_dump($fp);
	}
}
?>