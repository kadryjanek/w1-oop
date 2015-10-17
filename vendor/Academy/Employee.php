<?php

namespace Academy;

class Employee extends AbstractPerson
{
    private $salary;
    
    private $commission;
    
    public function __construct($name, $surname, $age, $salary, $gender = self::GENDER_MALE)
    {
        parent::__construct($name, $surname, $age, $gender);
        
        $this->salary = $salary;
    }
    
    /**
     * @param float $salary
     * @return Employee
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }
    
    public function getSalaryYear()
    {
        return $this->salary * 12;
    }
}

