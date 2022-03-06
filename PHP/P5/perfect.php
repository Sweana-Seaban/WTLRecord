<?php
    $number=$_GET["num"];
    $flag=$number;
    $addition=0;
    for($i=1;$i<$number;$i++)
    {
        if($flag%$i==0)
        {
            $addition=$addition+$i;
        }
    }
    if($addition==$number)
    {
        echo "$flag is a perfect number";
    }
    else if($addition>$number)
    {
        echo "$flag is an abundunt number";
    }
    else
    {
        echo "$flag is a deficient number";
    }
?>