<?php

require_once __DIR__ . "/autoload.php";

$allCategories = $category->getAllCategory();
?>
<option selected>Select your category</option>
<?php
foreach($allCategories as $categoryData) {
    ?>
    <option value="<?= $categoryData['id'] ?>"><?= $categoryData['name'] ?></option>
    </select>

<?php
}