<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <title>PHP practice</title>

</head>

<body>
    <header>
        <h1>
        <ul>

        <?php foreach ($task as $taskDescription => $val) : ?>
            <li>
            <strong><?= $taskDescription . ":"; ?></strong>
            <?= $val; ?>
            </li>
        <?php endforeach; ?>
        
        </ul>
        </h1>    
    </header>
</body>

</html>