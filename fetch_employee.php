<?php

require_once __DIR__ . "/autoload.php";

$allEmployees = $employee->getAllEmployee();

?>
<option selected>Select your nominee</option>
<?php
foreach($allEmployees as $employeeData) {
    ?>           
        <option value="<?= $employeeData['id']; ?>"><?= $employeeData['name']; ?></option>
    </select>
    <?php
}