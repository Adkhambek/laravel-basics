<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/blog.css">
</head>
<body>
<?php foreach ($posts as $post): ?>
    <article>
        <h1><a href="/post/<?= $post["id"] ?>"><?= $post["title"] ?></a></h1>
        <p><?= $post["body"] ?></p>
    </article>
<?php endforeach; ?>
</body>
</html>
