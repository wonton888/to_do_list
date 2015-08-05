<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Task.php";

    $app = new Silex\Application();

    $app->get("/", function(){

      $test_task = new Task("Go to Bathroom.");
      $test_task2 = new Task("Go through Dental Hygeiene process");
      $test_task3 = new Task("Take a Bath/Shower");
      $test_task4 = new Task("Put on Approriate Attire");
      $fifth_task = new Task("Go to Epicodus class on time!");

      $list_of_tasks = array($test_task, $test_task2, $test_task3,$test_task4,$fifth_task);
      $output = "";

      foreach ($list_of_tasks as $task){
            $output = $output . "<p>" . $task->getDescription() . "</p>";

      }

      return $output;

    });



    return $app;
 ?>
