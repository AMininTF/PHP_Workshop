<?php
if(isset($_POST['sb'])){
	$search = $_POST['search'];
	$word = "The quick brown fox jumps over the lazy dog";
	echo "Find: ".strstr($word, $search);
}

?>

<form name="f1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
Please enter the search: <input type="text" name="search" size="15"/>
<p><input type="submit" name="sb"/></p>
</form>