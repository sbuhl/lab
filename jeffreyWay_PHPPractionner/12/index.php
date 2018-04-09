<?php

require 'functions.php';

class Task{

	public $description;

	public $completed = false;

	//constructeur apparait automatiquement lorsqu'on instancie une tache. Dès qu'on fait un new.
	public function __construct($description)
	{
		$this->description = $description;
	}
	public function complete()
	{
		$this->completed = true;
	}
	public function isComplete()
	{
		return $this->completed;
	}


}

// $task = new Task('Go to the store'); // create the new task
// $task->complete(); // complete the task
// dd($task->isComplete());

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencast'),
	new Task('Clean my room')
];

$tasks[0]->complete();
//dd($tasks[1]);


require 'index.view.php';