$(document).ready(function(){
	/* set id of navpart */
    var mybodyid = $('body').attr('id');
    var mynavid = '#navpart-' + mybodyid;
    /* e.g. for iii.php:
      mybodyid is 'iii'
      mynavid  is '#navpart-iii'
    */
    $(mynavid).attr('id','iamhere');

    /* append nav text to h1 */		
	var linktext = $('#iamhere a').text();
	/* e.g. for iii.php:
	  mylink is '<a href="iii.php">Article III</a>'
	  linktext is 'Article III'
	*/
	$('#header h1').append(" - " + linktext);
});

