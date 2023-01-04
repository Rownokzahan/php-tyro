<?php
    $gpa = 1;
        switch($gpa){
            case ($gpa >= 4 && $gpa<10):
                echo 'A+';
                break;
            case ($gpa >= 3.7 && $gpa<4):
                return 'A';
                break;
            case ($gpa >= 3.5 && $gpa<3.7):
                    echo 'A';
                    break;
            default:
                echo 'F' ; 
                break;
        }

