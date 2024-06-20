<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome Home';
});

Route::get('/students/{marks}', function ($marks) {
    $grade = '';
    $gradePoints = 0;

    if ($marks >= 46 && $marks <= 50) {
        $grade = 'A+';
        $gradePoints = 9;
    } elseif ($marks >= 41 && $marks <= 45) {
        $grade = 'A';
        $gradePoints = 8;
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = 'B+';
        $gradePoints = 7;
    } elseif ($marks >= 31 && $marks <= 35) {
        $grade = 'B';
        $gradePoints = 6;
    } elseif ($marks >= 26 && $marks <= 30) {
        $grade = 'C+';
        $gradePoints = 5;
    } elseif ($marks >= 21 && $marks <= 25) {
        $grade = 'C';
        $gradePoints = 4;
    } elseif ($marks >= 16 && $marks <= 20) {
        $grade = 'D+';
        $gradePoints = 3;
    } elseif ($marks >= 11 && $marks <= 15) {
        $grade = 'D';
        $gradePoints = 2;
    } elseif ($marks >= 6 && $marks <= 10) {
        $grade = 'E';
        $gradePoints = 1;
    
    } else {
        return "Marks out of defined range";
    }

    return "Marks: $marks, Grade: $grade, Grade Points: $gradePoints";
});