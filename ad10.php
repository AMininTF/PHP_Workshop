<?php
if(isset($_POST['sb'])){
	$old = $_POST['old'];
	$new = $_POST['new'];
	$word = "The quick brown fox jumps over the lazy dog";
	echo "Find and replace: ".str_replace($old, $new, $word);
}

?>

<form name="f1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
Please enter the search word: <input type="text" name="old" size="15"/>
<p>Replace with: <input type="text" name="new" size="15"/></p>
<p><input type="submit" name="sb"/></p>
</form>