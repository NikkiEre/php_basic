<?php
    foreach($tasks as $task) {
        $var = $task->getDescription();
        print_r($var);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задания</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <h3>Задания</h3>

                <label for="task_form" class="visually-hidden">Описание задания</label>
                <input type="text" id="task_form" name="task_form" class="form-control mt-3" placeholder="Введите задание" required="" autofocus="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Задать</button>
                <div class="mt-3">
                    <a href="/">Назад</a>
                </div>
            </form>
        </div>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <!-- <h4><?=$task->getDescription?></h4>
                    <p>Status: <?=$task->getIsDone ? 'true' : 'false' ?></p> -->
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
