<head>
    <meta charset="utf-8">
    <title>
        Main page
    </title>
</head>

<body>
    <h1>
        <?= $pageTitle ?>
    </h1>

    <?php if (is_null($username)): ?>
        <a href='/?controller=security'>Login</a>
    <?php else: ?>
        Hello, <?=$username?>
        <a href="/?controller=security&action=logout">Logout</a>
        <a href="/?controller=tasks">Tasks</a>
    <?php endif; ?>
</body>