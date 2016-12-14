<?
				
	function query($querySTR){
		$conID = mysqli_connect('localhost', 'root', '', 'zsolt_site');
		 if (!isset($conID))
		 {
		  echo "Hiba a kapcsolódás során. Hibaüzenet:".mysqli_error($conID);
		 }	 
		 mysqli_query($conID, "SET NAMES 'utf8'");
		 
		 $temp_result = mysqli_query($conID, $querySTR) or die ("Hiba a végrehajtás során...<BR>".$querySTR); 
		 //print_r($result);
		 mysqli_close($conID);
		 return $temp_result;
	}
				
		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MCDonald's</title>


<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: white;
    background-color: orange;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
div.vmi {
	float:left;
}

footer {
	padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
</style>

</head>
<body>

<div class="container">

<header>
   <img src="logo.png" alt="Mountain View" style="width:10%;height:auto;"><h1>MC Donald's</h1>
</header>
 <div style="width:100%;">
	<ul>
  <li><a href="header.php">Kezdőlap</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Termékek</a>
    <div class="dropdown-content">
      <a href="szendvicsek.php" target="keret">Szendvicsek</a>
      <a href="salatak.html" target="keret">Saláták</a>
      <a href="uditok.html" target="keret">Üditők</a>
	  <a href="desszertek.html" target="keret">Desszertek</a>
      <a href="menuk.html" target="keret">Menük</a>
      <a href="kavek.html" target="keret">Kávék</a>
	  <a href="jatekok.html" target="keret">Játékok</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Rólunk</a>
    <div class="dropdown-content">
      <a href="tortenet.html" target="keret">Történet</a>
      <a href="mekilexikon.html" target="keret">Mekilexikon</a>
      <a href="rendezvenyek.html" target="keret">Rendezvények</a>
    </div>
  </li>
  <li><a href="ettermeink.html" target="keret">Éttermeink</a></li>
  <li><a href="admin_users_add.php" target="keret">Ötletláda</a></li>
  <li><a href="kapcsolatok.html" target="keret">Kapcsolat</a></li>
</ul>
</div>
<div class="vmi" style="width:14%; height:400px; background-color:#dfdfe4;"><br><br>
Regisztrációs menü<br><br>
<form action="action_page.php"> <br>
 &nbsp; Felhasználónév:&nbsp;<br>
  <input type="text" name="" value="Adja meg a nevét">
  <br>

 Jelszó:&nbsp;<br>
  <input type="password" name="jelszo" value="jelszo">&nbsp;&nbsp;
  <br><br>
  <input type="submit" value="Belépés">

  <h4><a href="regisztarcio.html">Regisztráció</a></h4>
</form>
</div>
<iframe name="keret" width="85%" height="395px"; src="index.html">
</iframe>

<footer>Copyright &copy; SzJk/Vágesz Kft.</footer>
</div>















