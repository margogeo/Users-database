<?php 
    echo file_get_contents('head.html');
?>
What was hidden there?<br>
<form method="get" action=".php">
<table>
<tr>
<td>Place:</td>
<td>
<input type="edit" size=22 name="plc">
</td>
</tr>
<tr>
<th colspan=2>
<input type="submit" value="LOOK">
</th>
</tr>
</table>
<?php
     $usr=$_GET['usr'];
	 echo "<input type='hidden' name='usr' value='$usr'>";
     echo file_get_contents('formend.html');
?>