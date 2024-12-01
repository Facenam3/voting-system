<?php

require_once __DIR__ . "/autoload.php";

$employees = ['John Doe', "Jane Doe", "Brad Pitt", 'Aleksandar Makedonski', 'Dalibor Jovanovski'];

foreach($employees as $employeeData) {
    $employee->insertEmployee($employeeData);
}