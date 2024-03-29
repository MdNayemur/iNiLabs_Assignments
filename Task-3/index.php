<?php

class Employee
{
    private $ename;
    private $esalary;
    
    // set employee name
    public function setEName($ename)
    {
        $this->ename = $ename;
    }
    
    // get employeee name
    public function getEName()
    {
        return $this->ename;
    }

    // set employee salary
    public function setSalary($esalary)
    {
        $this->esalary = $esalary;
    }

    // get employeee salary
    public function getSalary()
    {
        return $this->esalary;
    }

}


$user = new Employee();
$user->setEName('Rahat');
$user->setSalary('50000');
echo 'Employee Name: ' . $user->getEName().' </br> Employee Salary: ' . $user->getSalary();

?>


