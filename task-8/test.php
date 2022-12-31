<?php
    echo test(0);
    function test($gpa){
        switch($gpa){
            case 4:
                return 'A+';
            case $gpa >= 3.7:
                return 'A';
            default:
                return 'F' ; 
        }
    }
