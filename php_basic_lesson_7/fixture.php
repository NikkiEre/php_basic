<?php

require_once "model/User.php";
require_once "model/UserProvider.php";
$pdo = require 'db.php';

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(150) NOT NULL,
    password VARCHAR(150) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER,
    description VARCHAR (150),
    isDone TINY DEFAULT (0)
)');

$user = new User('admin');

$user->setName('Администратор');

$userProvider = new UserProvider($pdo);

$userProvider->registerUser($user, "user");