<?php

class TaskService
{
    public static function addComment(User $user, Task $task, string $comment)
    {
        $newComment = new Comment($user, $task, $comment);
        $task->setComment($newComment);
    }
}