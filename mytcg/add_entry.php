<?php require('check.php'); 
require_once('settings.php');
include('header.php');
?>
	<form method="POST" action="add_entry.php">
   <b>Title:</b><br>
   <input type="text" name="entrytitle"><br>
   <textarea cols="60" rows="6" name="entry"> 
   </textarea><br>
  <input type="submit" name="submit" value="Submit">
  </form>
<?php
  if ($HTTP_POST_VARS['submit']) {
    $title=$HTTP_POST_VARS['title'];
    $entry=$HTTP_POST_VARS['entry'];
    $query ="INSERT INTO $table_news (title,entry)";
    $query.=" VALUES ('$title','$entry')";
    $result=mysql_query($query);
    if ($result) echo "<b>Successfully Posted!</b>";
    else echo "<b>ERROR: unable to post.</b>";
  }
	include("footer.php");
?>
