<?php

$stdcount= 14;
$marks = array(
    array('English' => 85, 'Maths' => 90, 'Science' => 75),
    array('English' => 70, 'Maths' => 80, 'Science' => 95),
    array('English' => 75, 'Maths' => 85, 'Science' => 80),
    array('English' => 80, 'Maths' => 90, 'Science' => 85),
    array('English' => 90, 'Maths' => 95, 'Science' => 85),
    array('English' => 88, 'Maths' => 92, 'Science' => 80),
    array('English' => 92, 'Maths' => 85, 'Science' => 90),
    array('English' => 85, 'Maths' => 90, 'Science' => 75),
    array('English' => 90, 'Maths' => 80, 'Science' => 95),
    array('English' => 80, 'Maths' => 85, 'Science' => 90),
    array('English' => 95, 'Maths' => 92, 'Science' => 88),
    array('English' => 88, 'Maths' => 95, 'Science' => 85),
    array('English' => 92, 'Maths' => 88, 'Science' => 90),
    array('English' => 85, 'Maths' => 90, 'Science' => 75),
    
);

// calculate the sum of marks
$subjectsums = array();
for ($i = 0; $i < $stdcount; $i++) {
    $subjectsums[$i] = array_sum($marks[$i]);
}

// display the marks
for ($i = 0; $i < $stdcount; $i++) {
    echo "Marks of student " . ($i + 1) . " are: " . $subjectsums[$i] . "\n";
}

// calculate the average marks
$englishsum = $mathssum = $sciencesum = 0;
for ($i = 0; $i < $stdcount; $i++) {
    $englishsum += $marks[$i]['English'];
    $mathssum += $marks[$i]['Maths'];
    $sciencesum += $marks[$i]['Science'];
}

$englishavg = $englishsum / $stdcount;
$mathsavg = $mathssum / $stdcount;
$scienceavg = $sciencesum / $stdcount;

// display the average marks
echo "Average English marks of all students are: " . $englishavg . "\n";
echo "Average Maths marks of all students: " . $mathsavg . "\n";
echo "Average Science marks of all students: " . $scienceavg . "\n";
?>
