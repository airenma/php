<?php

$query = require 'bootsrap.php';

$tasks = $query->selectAll('todos');


require "index.view.php";