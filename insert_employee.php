<?php

require_once __DIR__ . "/autoload.php";

$employees = ['John Doe', "Jane Doe", "Brad Pitt", 'Aleksandar Makedonski', 'Marilyn Monroe'];

foreach($employees as $employeeData) {
    $employee->insertEmployee($employeeData);
}