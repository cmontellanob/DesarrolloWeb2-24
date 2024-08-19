<?php
function factorial($n)
{
    if ($n<=1)
    {
        return 1;
    }
    else
    {
        return $n*factorial($n-1);
    }
}
$n=5;
echo  factorial($n);
?>