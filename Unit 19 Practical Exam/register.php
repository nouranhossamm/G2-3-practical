<?php require_once 'config.php'; ?>

<h1><?= SITE_NAME ?></h1>

<form action="" method="post">
    <input type="text" name='name' placeholder='name'><br>
    <input type="email" name='email' placeholder='email'><br>
    <input type="number" name='age' placeholder='age'><br>
    <button type="submit">Register</button><br>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $errors = [];

    if (empty($name)) {
        $errors[] = "Please enter a valid name";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email';
    }

    if (!is_numeric($age) || $age < 15 || $age > 100) {
        $errors[] = 'Please enter a valid age';
    }

    if ($errors) {
?>
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li style='color: red;'><?= $error ?></li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <h1 style='color: green;'>Hello, <?= htmlspecialchars($name) ?></h1>
<?php
    }
}


$students = [
    [
        'name' => 'Ahmed',
        'email' => 'ahmed@gmail.com',
        'age' => 16
    ],
    [
        'name' => 'Mohamed',
        'email' => 'mohamed@gmail.com',
        'age' => 19
    ]

];

array_push($students, [
    'name' => $name,
    'email' => $email,
    'age' => $age
]);

echo "<pre>";
print_r($students);
echo "</pre>";

?>