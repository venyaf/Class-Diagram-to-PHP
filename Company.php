<?php //php 7.2.24
class Company{
    public $name;
    public function setCompanyName($name){
        $this->name = $name;
    }
    public function getCompanyName(){
        return $this->name;
    }
}
    $company = new Company();
    $company->setCompanyName('DOT');
    echo 'Company Name: ' . $company->getCompanyName()
?>