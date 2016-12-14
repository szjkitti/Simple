<? include("vmi.php");?>
<div style="background-color:orange;">
<h1>Megjegyzések</h1>

<?
$result = query("SELECT * FROM hirek");
?>

<table style="border:1px solid red;">


<? while ($hirek = $result->fetch_assoc()) { ?>

	<tr>
		<td style="border:1px solid red;">
			<?= $hirek['nev'] ?>
		</td>
		<td style="border:1px solid red;">
			<?= $hirek['email'] ?>
		</td>
		<td style="border:1px solid red;">
			<?= $hirek['tartalom'] ?>
		</td>
		<td style="border:1px solid red;">
			<a href="admin_users_edit.php?id=<?= $hirek['id'] ?>" target="keret" >Mód</a> | 
			<a href="admin_users_delete.php?id=<?= $hirek['id'] ?>" target="keret">Tör</a>
		</td>
	</tr>
<? } ?>

</table>
</div>