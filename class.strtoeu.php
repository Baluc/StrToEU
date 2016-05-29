<?php 

class StrToEU {

	var $error = '';
	var $languages = array(
	  
            // seting up letters 
	
						"en" => array(
							"app" => array(
								"A", "B", "C", "D",
								"E", "F", "G", "H",
								"I", "J", "K", "L",
								"M", "N", "O", "P",	

								"Q", "R", "S", "T",
								"U", "V", "W", "X",
								"Y", "Z"	
							),
							"low" => array(
								"a", "b", "c", "d",
								"e", "f", "g", "h",
								"i", "j", "k", "l",
								"m", "n", "o", "p",	

								"q", "r", "s", "t",
								"u", "v", "w", "x",
								"y", "z"	
							)				
						),
						"de" => array(
							"app" => array(
								"A", "Ä", "B", "C",
								"D", "E", "F", "G",
								"H", "I", "J", "K",
								"L", "M", "N", "O",	
								"Ö", "P", "Q", "R",
								"S", "ẞ", "T", "U",
								"Ü", "V", "W", "X",
								"Y", "Z"	
							),
							"low" => array(
								"a", "ä", "b", "c",
								"d", "e", "f", "g",
								"h", "i", "j", "k",
								"l", "m", "n", "o",	
								"ö", "p", "q", "r",
								"s", "ß", "t", "u",
								"ü", "v", "w", "x",
								"y", "z"	
							)				
						),
						"fr" => array(
							"app" => array(
								"A", "B", "C", "D",
								"E", "F", "G", "H",
								"I", "J", "K", "L",
								"M", "N", "O", "P",	
								"Q", "R", "S", "T",
								"U", "V", "W", "X",
								"Y", "Z", "É", "Â",
								"Ê", "Î", "Ô", "Û",
								"À", "È", "Ù", "Ë",
								"Ï", "Ü", "Ÿ", "Ç"

							),
							"low" => array(
								"a", "b", "c", "d",
								"e", "f", "g", "h",
								"i", "j", "k", "l",
								"m", "n", "o", "p",	
								"q", "r", "s", "t",
								"u", "v", "w", "x",
								"y", "z", "é", "â",
								"ê", "î", "ô", "û",
								"à", "è", "ù", "ë",
								"ï", "ü", "ÿ", "ç"

							)				
						)
						
// ,
						// "code" => array(
							// "app" => array(
								// "", "", "", "",
								// "", "", "", "",
								// "", "", "", "",
								// "", "", "", "",	
								// "", "", "", "",
								// "", "", "", "",
								// "", ""	
							// ),
							// "low" => array(
								// "", "", "", "",
								// "", "", "", "",
								// "", "", "", "",
								// "", "", "", "",	
								// "", "", "", "",
								// "", "", "", "",
								// "", ""	
							// )				
						// )						
						
					);    
	
	function checkInput($txt,$lang) {
		
		// validate the input parameters $txt (string to convert) and $lang (string language)
		
		if(empty($lang)) {	
		
			// language is not set
			
		}
		else {
			$languages = $this->languages;
			if(empty($languages[$lang])) {
				
				// language is unsupported	
				
			}
			else {
			  
			  // return ok of validation
			  
				return 1;				
			} 			
		}	
	}

	function app($txt,$lang) {
	  
	  // convert a string to uppercase
	  
		if($this->checkInput($txt,$lang) == 1) {
			$languages = $this->languages;			
			$ret = str_replace($languages[$lang]['low'],$languages[$lang]['app'],$txt);			
		}
		else {
			$ret = $txt;
		}
		if(!empty($ret)) {	
			return $ret;
		}		
	}

	function low($txt,$lang) {
	  
	  // convert a string to lowercase	  
	  
		if($this->checkInput($txt,$lang) == 1) {
			$languages = $this->languages;				
			$ret = str_replace($languages[$lang]['app'],$languages[$lang]['low'],$txt);			
		}
		else {
			$ret = $txt;
		}
		if(!empty($ret)) {	
			return $ret;
		}			
	}	

}

?>
