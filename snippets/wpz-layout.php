<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
        <?= css('/media/plugins/salinapl/wallpaperizer/css/style.css') ?>       
        <?php if ($wpzHeader = $slots->wpzHeader()): ?>
            <?= $wpzHeader ?>
        <?php endif ?>
    </head>
    <body>
        <?= $slot ?>
    </body>
</html>