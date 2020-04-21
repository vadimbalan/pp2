<?php

function printArr($numbers)
{
    foreach ($numbers as $num)
    {
    echo "<p>Number: $num</p>";
    }
}

// Step 4
function largest($numbers)
{
    $num = (max($numbers));

    echo "<p><br>Largest value: $num</p>";
}