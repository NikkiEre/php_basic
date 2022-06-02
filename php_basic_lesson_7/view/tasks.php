<head>
    <meta charset="utf-8">
    <title>
        Tasks page
    </title>
</head>

<body>
    <h2>Tasks</h2>

    <form action="/?controller=tasks&action=add" method="post">

        <input type="text" name="task" placeholder="Введите задачу">
        <input type="submit" value="Добавить">

    </form>

    <a href="/?controller=index">Вернуться на главную</a>

    <?php foreach ($tasks as $task) : ?>

        <li id="<?=$task->getId()?>">
            <?= $task->getDescription() ?>
            <a href="/?controller=tasks&action=done&id=<?=$task->getId()?>">
                [Done]
            </a>
            <button class="done" data-id="<?=$task->getId()?>">
                Done
            </button>
        </li>

    <?php endforeach; ?>