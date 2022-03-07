<?php 
	function generatePageHeader($base_url,$library,$stylesheet)
	{
		$librarys = json_decode(file_get_contents("config/plugins.json"),true);

		// base header
		echo '<!DOCTYPE html><html lang="en"><meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><head><!-- Base setting --><base href='.$base_url.'>';

			// Library
			foreach($librarys as $key => $value)
			{
				if(stristr($library,$key))
					echo $value;
			}

		// end base header
		echo '<!-- Custom setting -->
		<link rel="stylesheet" href="vendor/css/'.$stylesheet.'.css">
		</head>';
	}
?>