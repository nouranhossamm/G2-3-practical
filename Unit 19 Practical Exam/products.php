<?php
require_once("connect.php");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$count = 0;
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped table-hover table-bordered border-primary caption-top table-responsive align-middle text-center">
        <caption class="h1 text-center text-primary">List of Products</caption>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Status</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td>
                        <?php if ($row["quantity"] <= 0) : ?>
                            <p>Out Of Stock</p>
                        <?php else: ?>
                            <p>Available</p>
                        <?php endif ?>
                    </td>
                    <?php $count += 1;
                    $total += $row['price'] * $row['quantity'];
                    ?>
                <?php endwhile ?>
            <?php endif ?>

                </tr>

                <tr>
                    <td colspan="2">Total</td>
                    <td colspan="4"><?= $total ?></td>
                </tr>
                <tr>
                    <td colspan="2">Count</td>
                    <td colspan="4"><?= $count ?></td>
                </tr>
    </table>

</body>

</html>