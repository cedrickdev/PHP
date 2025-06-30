<?php
echo "Enter a date : ";
$year = (int)readline();

if (($year % 400 === 0) || ($year % 4 === 0)  && ($year % 100 !== 0)) {
    echo "$year is bissextile\n";
} else {
    echo "$year is not bissextile\n";
}
