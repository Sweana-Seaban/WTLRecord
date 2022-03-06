<?php
echo 'You have chosen these fruits :';
foreach ($_POST['fruits'] as $fruits)
{
echo $fruits. ' <br>';
}
?>
