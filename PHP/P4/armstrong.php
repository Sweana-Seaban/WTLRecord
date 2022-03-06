<?php
    echo "<h3> armstrong</h3>";
    echo "\n";
    $number=$_GET["num"];
    $a=$number;
    $count=strlen($a);
    $sum=0;
    while($a!=0)
    {
        $rem=$a%10;
        $sum=$sum+pow($rem,$count);
        $a=$a/10;
    }
    if($number==$sum)
    {
        echo"$number is an armstrong number";
    }
    else
    {
        echo "$number is not an armstrong number";
    }
?>