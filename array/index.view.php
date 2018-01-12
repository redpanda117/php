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




        <?php
           //this is like a looping though the array in php
           //go through the array and list each name.
            foreach ($family as $name) {
                echo "<li>$name</li>";
            } 
        ?>

        <!--this is an alternative verson (does the exact same thing)-->
        <?php foreach ($family as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
        
        </ul>
        </h1>    
    </header>
</body>

</html>