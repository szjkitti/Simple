<? include("vmi.php");?>
<?
 if(isset($_GET['id'])) {
 
   $result = query("DELETE FROM `hirek` WHERE `id` = ".$_GET['id']);
  }
  header("Location: admin_users_list.php");

?>
