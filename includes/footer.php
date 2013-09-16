<?php 
function curPageURL() 
	{
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") 
		{
		$pageURL .= "s";
		}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") 
		{
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} 
	else 
		{
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	 return $pageURL;
	}
?>

<div id="footer" class="span-24 last">
	<p>
	Daniel East Bio 
	<br/>
	<?php  
		echo "Document URI: " . curPageURL();
	?>
	<br/>
	<?php
		// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
		echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
	?>	
	</p>
</div>