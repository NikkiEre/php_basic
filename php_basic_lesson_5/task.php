<?php

class Task
{
  private User $user;
  private string $description; 
  private DateTime $dateCreated;
  private ?DateTime $dateUpdated;
  private ?DateTime $dateDone;
  private int $priority = 0;
  private bool $isDone = false;
  private ?Comment $comment;

  function __construct(User $user, string $description)
  {
    $this->user = $user;
    $this->description = $description;
    $this->dateCreated = new DateTime();
  }

  function setDescription(string $newDescription)
  {
    $this->description = $newDescription;
    $this->setDateUpdated();
  }

  function getDescription()
  {
    return $this->description;
  }

  function getDateCreated()
  {
    return $this->dateCreated;
  }

  function getUser()
  {
    return $this->user;
  }

  function setDateUpdated()
  {
    $this->dateUpdated = new DateTime();
  }

  function getDateUpdated()
  {
    return $this->dateUpdated;
  }

  function setDateDone()
  {
    $this->dateDone = new DateTime();
    $this->setDateUpdated();
  }

  function getDateDone()
  {
    if(dateDone) {
      return $this->dateDone;
    } else {
      return "Task in work";
    }
  }

  function setPriority(int $newStatus)
  {
    $this->priority = $newStatus;
    $this->setDateUpdated();
  }

  function getPriority()
  {
    return $this->priority;
  }

  function setIsDone(bool $isComplete)
  {
    $this->isDone = $isComplete;
    $this->setDateDone();
    $this->setDateUpdated();
  }

  function getIsDone()
  {
    return $this->isDone;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function setComment(Comment $comment)
  {
    $this->comment = $comment;

    return $this;
  }
}
