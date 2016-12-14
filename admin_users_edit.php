<? include("vmi.php");?>
<?
  if(isset($_GET['id'])) {

  $result = query("SELECT * FROM hirek WHERE `id` = ".$_GET['id']);

}
$akt_felhasznalo= $result->fetch_assoc();
?>
<div style="background-color:orange;">
<h1> Tartalom módosítása </h1>

<form action="felhasznalo_felvitel.php" method="POST">
  Felhasználó neve:<br>
  <input type="text" name="nev" value="<?= $akt_felhasznalo['nev']; ?>" >
  <br>
  Felhasználó emailje:<br>
  <input type="email" name="email" value="<?= $akt_felhasznalo['email']; ?>">
  <br>
  Megjegyzés:<br>
  <textarea name="tartalom" value="<?= $akt_felhasznalo['tartalom']; ?>" rows="15" cols="50">
  </textarea><br>
  <br><br>
  <input type="submit" value="Felvisz">
</form> 
</div>
