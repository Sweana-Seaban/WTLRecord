<?
$usr=$_GET["usr"];
?>
<p>Welcome <?=$usr?>!</p>
<p>Request received on:
<?

print date("l M dS, Y, H:i:s");
?>
</p>