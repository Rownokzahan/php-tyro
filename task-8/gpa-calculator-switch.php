<?php

function GPA_scale_0_To_4($gpa)
{
    switch ($gpa) {
        case $gpa >= 4.0:
            return 'A+';
            break;
        case $gpa >= 3.7:
            return 'A';
            break;
        case $gpa >= 3.3:
            return 'A-';
            break;
        case $gpa >= 3.0:
            return 'B+';
            break;
        case $gpa >= 2.7:
            return 'B';
            break;
        case $gpa >= 2.3:
            return 'B-';
            break;
        case $gpa >= 2.0:
            return 'C+';
            break;
        case $gpa >= 1.7:
            return 'C';
            break;
        case $gpa >= 1.3:
            return 'C-';
            break;
        case $gpa >= 1.0:
            return 'D';
            break;
        default:
            return 'F';
    }
}


function GPA_scale_0_To_5($gpa)
{
    switch ($gpa) {
        case $gpa >= 5:
            return 'A+';
            break;
        case $gpa >= 4:
            return 'A';
            break;
        case $gpa >= 3.5:
            return 'A-';
            break;
        case $gpa >= 3:
            return 'B';
            break;
        case $gpa >= 2.0:
            return 'C';
            break;
        case $gpa >= 1.0:
            return 'D';
            break;
        default:
            return 'F';
    }
}

$level = $_POST['level'] ?? 'masters';
$gpa = $_POST['gpa'] ?? '0';

$grade = 'invalid';

if($gpa=='0'){
    $grade = 'F';  
}
elseif (!is_numeric($gpa) || $gpa < 0 || $gpa > 5) {
    $grade = 'invalid';
} elseif ($level == "masters" || $level == "graduation") {
    if ($gpa <= 4) {
        $grade = GPA_scale_0_To_4($gpa);
    }
} else {
    $grade = GPA_scale_0_To_5($gpa);
}

if ($grade == 'invalid') {
    echo json_encode("You have provided wrong grade point.");
} elseif ($grade == "A+") {
    echo json_encode("Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.");
} elseif ($grade == "F") {
    echo json_encode("Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success");
} else {
    echo json_encode("You have been passed with grade $grade. Forget the mistakes, Remember the lessons");
}
