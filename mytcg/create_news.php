<?php include("settings.php");
include("header.php");

$connect = mysql_connect("$db_server", "$db_user", "$db_password");
mysql_select_db("$db_database", $connect);

$create_news = "CREATE TABLE `$table_news` (
	`id` int(20) NOT NULL auto_increment,
	`date` TIMESTAMP,
	`title` varchar(255) NOT NULL,
	`entry` longtext NOT NULL,
	`icon` varchar(255),
	PRIMARY KEY (`id`)
)";
if (mysql_query($create_news, $connect)) {
   echo "<p>The table $table_news was successfully created. <strong>Delete this file from your server.</strong></p>\n";
}
else {
   die("Error: ". mysql_error());
}
$create_comments = "CREATE TABLE `$table_comments` (
	`id` int(20) NOT NULL auto_increment,
	`entry` int(20) NOT NULL,
	`name` varchar(255) NOT NULL,
	`comment` longtext NOT NULL,
	`timestamp` int(20) NOT NULL,
	PRIMARY KEY (`id`)
)";
if (mysql_query($create_comments, $connect)) {
   echo "<p>The table $table_comments was successfully created. <strong>Delete this file from your server.</strong></p>\n";
}
else {
   die("Error: ". mysql_error());
}
mysql_close();
include("footer.php");
?>
