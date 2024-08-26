<form action="mayorv2.php" method="post">
<?php
$n=$_POST['n'];
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="valor[]" > <br>

<?php
}
?>
<input type="submit" value="Calcular Mayor">
</form>