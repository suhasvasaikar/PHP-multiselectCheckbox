<!-  
#############################################
This file provides PHP script for multiple select with checkbox.
Author: Suhas Vasaikar
#############################################
 ->
<html>
<head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" type="text/css">

<script>
jQuery(function ($) {
	$(".chosen-select-no-results").chosen({no_results_text: "Sorry, no result found!"});
});
</script>
</head>
<body>

<?php
	if(isset($_POST['submit'])) {
		$x = $_POST['select1'];
		echo "Your Output: </br>";
		for($i=0;$i<count($x);$i++) {
			echo "".$x[$i]."</br>";
		}
;	}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<select id="select1" name="select1[]" data-placeholder="Type &apos;C&apos; to view" style="width:350px;" multiple class="chosen-select-no-results" tabindex="11">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option>Sloth Bear</option>
            <option>Sun Bear</option>
            <option>Polar Bear</option>
            <option>Spectacled Bear</option>
    </select>
    <input type="submit" value="Submit" name='submit'/>
</form>
</body>
</html>