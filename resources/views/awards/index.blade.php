<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <h1 style="color: rgb(67, 94, 85)"><?= $title ?></h1>

    <p>Here are some awards for you.</p>

    <ul>
        <?php foreach($awards as $award): ?>
        <li style="color: rgb(67, 94, 85)">
            <?= $award ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <p>Current time: <?= $current_time ?></p>
</body>
</html>