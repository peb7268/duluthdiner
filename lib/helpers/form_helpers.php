<?php
function d($array){
	echo "<pre>Im D'ing";
		print_r($array);
	echo "</pre><br><br><br>";
}

function processPostData($data_element, $exclusions = array('submit'))
{
	$i = 0; $keys = array_keys($data_element); $items = array();
	
	foreach($data_element as $form_element_value){	
		//just checking the sumbit item now, if you want to filter out more stuff then write a nested loop or a method.
		if($keys[$i] !== $exclusions[0]){
			$items[$keys[$i]] = $form_element_value;
		}
		$i++;
	}
	
	return $items;
}

function clean_keys($keys)
{
	$new_keys = array();
	foreach($keys as $key => $value){
		$new_keys[$value] = str_replace('_', ' ', $value);
	}
	return $new_keys;
}

function generateDropdown($name, $id = null)
{
$returnVal = <<<EOF
<select name="$name" id="$name"><option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
EOF;

	return $returnVal;
}

function formatMailMessage($items)
{
	$keys = array_keys($items);
	$clean_keys = clean_keys($keys);
	$message = '';
	foreach($items as $key => $value){
		$message .= $clean_keys[$key].": ".$value."<br>";
	}
	return $message;
}
