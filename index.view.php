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
                <!--ucwords just mean upercase first letter of the word-->
                <strong><?= ucwords($taskDescription) . ":"; ?></strong>
                
                <!--this is a conditional statment-->
                <!-- if val is a boolean made a check mark/ x mark using html unicode (reference from w3school)-->
                <?php if (is_bool($val)) : ?>
                    <?= $val ? '&#9989;' : '&#10062;' ?>
                <!--if val is not a boolean then echo the val-->
                <?php else: ?>  
                    <?= $val; ?>
                <!--end of the conditional statment-->    
                <?php endif; ?>

            </li>
        <?php endforeach; ?>
        
        </ul>
        </h1>    
    </header>
</body>

</html>