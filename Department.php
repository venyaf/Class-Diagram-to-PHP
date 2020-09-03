<?php //php 7.2.24
class Department{
    public $name;
    public function setDepartmentName($name){
        $this->name = $name;
    }
    public function getDepartmentName(){
        return $this->name;
    }
}
    $department = new Department();
    $department->setDepartmentName('Information Technology');
    echo 'Department Name: ' . $department->getDepartmentName()
?>