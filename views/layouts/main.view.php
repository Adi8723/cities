<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities</title>
    <link rel="stylesheet" href="./styles/simple.css">
</head>

<body>

    <header>
        <h1>Städte Verzeichnis</h1>
        <p>Hier finden Sie eine Übersicht über alle Städte in Deutschland</p>
        <nav>
            <?php foreach ($alphabet as $char) : ?>
                <a href="index.php?<?php echo http_build_query(['char' => $char]); ?>">
                    <?php echo e($char);?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>

    <form action="search.php" method="get">
        <?php

        ?>
        <input type="text" placeholder="stadt suchen" minlength="3" name="search" value="<?php echo e($searchValue ?? ''); ?>">
        <input type="submit" value="suchen">
    </form>


    <main>
        <?php echo $content ?>
    </main>


</body>

</html>