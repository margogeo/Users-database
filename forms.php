<style type="text/css" rel="stylesheet">
.area { 
  width:300px; height: 160px; 
  border: 5px solid rgba(10,255,10,0.7);  
  border-radius:8px;
}
</style>
<table>
<tr>
<td class="area" style="background-color: rgba(80,255,80,0.1);">
<form name="remsave">
<table>
<tr>
<th colspan=2>Save remind</th>
</tr>
<tr>
<td>Subject:</td>
<td>
<input type="edit" size=22 name="sbj">
</td>
</tr>
<tr>
<td>Place:</td>
<td>
<input type="edit" size=22 name="plc">
</td>
</tr>
<tr>
<th colspan=2>
<input type="button" value="PUT" onClick="SaveRemind();">
</th>
</tr>
</table>
</form>
</td>

<td>
</td>

</tr>

<tr>
<td>
</td>
<td id="outp">
</td>
</tr>
</table>

<script language='JavaScript'>
function SaveRemind() {
	var url = 'SaveRemind.php?usr=' + usr + '&sbj=' + document.remsave.sbj.value + '&plc=' + document.remsave.plc.value;
	let ret = HttpLoadGet(url);
	alert(ret);
}
</script>

</body>
</html> 