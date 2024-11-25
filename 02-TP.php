<form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Enter your name"><br>
    <label for="age">Age</label>
    <input type="number" name="age" placeholder="Enter your age"><br>
    <button type="submit">Check your before enter our club</button>
</form>

<?php
$inputName = "";
$inputAge;

if (isset($_POST["name"]) && $_POST["age"]) {
    $inputName = $_POST["name"];
    $inputAge = $_POST["age"];
    allowedAge($inputName, $inputAge);
}

function allowedAge(string $name, int  $age)
{
    if ($age  < 18) {
        echo "Hi you can not  enter here,  because your age is not allowed" . " " .  " " . $age . PHP_EOL;
    } else {
        echo "Well come in our club " . "" . $name . " you can enter now" . " " . "because your are man " . " " . $age;
    }
    return $age;
}
