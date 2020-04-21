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

    echo "Removed Dupes: [ ";
    foreach ($num_unique as $values)
    {
        echo "$values ";
    }
    echo "]";

}