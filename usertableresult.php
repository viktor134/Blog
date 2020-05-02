<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP BLOG</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">delete</th>
        <th scope="col">update</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user){ ?>
    <tr>
        <td scope="row"><?php echo $user['id']; ?></td>
        <td><?= $user['name']; ?></td>
        <td><a href="/delete_user.php?id=<?= $user["id"] ?>" >delete</a></td>
        <td><a href="updateform.php">update</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>