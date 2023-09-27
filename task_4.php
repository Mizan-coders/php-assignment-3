<?php

$studentGrades = [
    array('Math' => 85, 'English' => 92, 'Science' => 78),
    array('Math' => 88, 'English' => 95, 'Science' => 90),
    array('Math' => 75, 'English' => 80, 'Science' => 85)
];

function calculateAverageGrades($grades) {
    foreach ($grades as $student) {
        $total = 0;
        $subjectCount = 0;

        foreach ($student as $subject => $grade) {
            $total += $grade;
            $subjectCount++;
        }

        $averageGrade = $total / $subjectCount;
        echo "Student Result: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);