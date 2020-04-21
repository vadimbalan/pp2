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

// Step 5
function removeDupes($numbers)
{
    $num_unique = array_unique($numbers);

    $result = "";
    foreach ($num_unique as $values)
    {
        $result .= "$values, ";
    }
    $result = rtrim($result, ", ");
    echo "Removed Dupes: [$result]";

}

// Step 6
function distribution($numbers)
{
    $unique = array_unique($numbers);
    $dupes = array_count_values($numbers);
    $associativeArray  = array_combine($unique, $dupes);

    $result = "";
    foreach($associativeArray as $x => $y)
    {
        $result .= "$x=>$y, ";
    }
    $result = rtrim($result, ", ");
    echo "<p>Associative Array: [$result]</p>";
}