<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once 'vendor/'.$class.'.php';
}

use Academy\Employee;

// $datetime = new \DateTime();

$john = new Employee("John", "Smith", 22, 2000);

$jane = new Employee("Jane", "Smith", 22, 3000, Employee::GENDER_FEMALE);

echo $john->hello();

echo "<br />";

$john
    ->setName("Mike")
    ->setSalary(5000);

echo $john->hello();