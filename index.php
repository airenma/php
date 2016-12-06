<?php

require "functions.php";
require "class.php";

$pdo = connectToDB();

$tasks = fetchAllTasks ($pdo);







require "index.view.php";
