<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html style="direction: ltr;" lang="de-de">
<head>
  <meta content="text/html; charset=UTF-8"
 http-equiv="content-type">
  <title>Radio</title>
  <style type="text/css">
body {
  width: 300px;
  margin: 0 auto;
  font-family: Arial,Helvetica,sans-serif;
  font-size: large;
  color: #660000;
  font-weight: bold;
  text-align: center;
  background-color: #ffff99;
}
</style></head>
<body
 style="color: rgb(102, 51, 0); background-color: rgb(255, 255, 153);"
 alink="#990000" link="#cc0000" vlink="#663300">
<table style="text-align: center; width: 300px;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<?php
$handle = @fopen("./radio.csv", "r");
$index1 = 0;
#$zeile = (int)($_GET["name"]);
if (isset($_GET['name'])) {
                    $zeile = $_GET['name'];
                    }
                else {
                    $zeile = null;
                    }  
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) :
        $index1 = $index1 + 1;
        $teile = explode(";",$buffer);
        echo "<tr> <td><a href=\"radio.php?name=",$index1," \", target=\"_top\">",htmlentities($teile[0]),"</a></td></tr> \n";
        if ($zeile == $index1)
            $uebergabe = $teile;
    endwhile;
    if (!feof($handle)) {
        echo "Fehler: Datei radio.csv fehlerhaft!";
    }
    fclose($handle);
}
?>
</table>
<table style="text-align: center; width: 300px;" border="1" cellpadding="2" cellspacing="2">
<?php
exec ("sh status.sh ".$uebergabe[0]);
if ($zeile !== null):
$cmd = "sh radio.sh ".$uebergabe[1];
echo "<tr><td>Online: ",$uebergabe[0],"</tr> </td>";
exec($cmd);
else:
echo "<tr><td>Offline!</tr> </td>";
endif;
?>
<tr><td><a href="ruhe.php" target="_top">Ausschalten.</a></tr></td>
</tbody>
</table>
<br>
</body></html>
