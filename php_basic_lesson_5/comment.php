<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $user, Task $task, string $comment)
    {
        $this->author = $user;
        $this->task = $task;
        $this->text = $comment;
    }
}