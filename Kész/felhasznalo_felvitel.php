<? include("vmi.php");?>
<?
$query_str = "INSERT INTO `hirek` 
(`nev`, `email`, `tartalom`) VALUES 
('$_POST[nev]', '$_POST[email]', '$_POST[tartalom]');";
																							   
query($query_str);
header("Location: admin_users_list.php");

?>
