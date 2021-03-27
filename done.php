<?php
require 'done-logic.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Version B</title>
</head>

<body>
    <h1>Book search</h1>
    <h2>Version C</h2>

    <p>
        You searched for <strong> <?= htmlentities($results['searchTerm']) ?></strong>.
    </p>

    <?php if ($results['haveBooks']) : ?>
        <h2>Results:</h2>
        <?php foreach ($results['books'] as $title => $book) : ?>
            <div class='book'>
                <?= $book['title']; ?> by <?= $book['author'] ?></br>
                <img src='<?php echo $book['link']; ?>' alt='cover photo for <?= $book['title']; ?>'>
                <p><strong>Release:</strong>
                    <?= $book['year'] ?> </p>

            </div>
        <?php endforeach ?>
    <?php else : ?>
        <p>No results found</p>
    <?php endif ?>

    <p>
        <a href='foobooks.php'>&larr; Search again</a>
    </p>
</body>

</html>