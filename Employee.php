<?php //php 7.2.24
class Employee{
    public $name;
    public $title;
    public $salary;
    public function setEmployeeName($name){
        $this->name = $name;
    }

    public function getEmployeeTitle(){
        echo $title = "Ms. ";
    }
    
    public function getEmployeeProfile(){
        return $this->name;
    }
    
    public function getEmployeeMonthlySalary($day){
        //salary perhari
        $salary = 50000;
        //salary perbulan
        return $day = 30*$salary;
    }
}

    $employee = new Employee();
    $employee->setEmployeeName('Veny Amilia Fitri');
    echo $employee->getEmployeeTitle() . $employee->getEmployeeProfile() . ' Mendapat Gaji Perbulan Sebesar: Rp.' . $employee->getEmployeeMonthlySalary($day) . ',-'
?>