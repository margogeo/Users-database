<?php 
    echo file_get_contents('head.html');
?>
Search a subject<br>
<form method="get" action="Remind.php">
<table>
<tr>
<td>Subject:</td>
<td>
<input type="edit" size=22 name="sbj">
</td>
</tr>
<tr>
<th colspan=2>
<input type="submit" value="ASK">
</th>
</tr>
</table>
<?php
     $usr=$_GET['usr'];
	 echo "<input type='hidden' name='usr' value='$usr'>";
     echo file_get_contents('formend.html');
?>