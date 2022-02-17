<?php

class Employee{
    public $name;
    protected $profile;
    private $salary;
    const rate = 0.01; // constants can be accessed via self operator if inside same class.
        // and can be accessed via scope resolution operator class_name::const_name

    public function __construct($name, $profile, $salary){
        $this->name = $name;
        $this->profile = $profile;
        $this->salary = $salary + ( $salary * self::rate);
    }

    public function showEmployeeDetails(){
        echo "Welcome : ".$this->name."<br/>";  
        echo "Profile : ".$this->profile."<br/>";  
        echo "Salary : ".$this->salary."<br/>";  
        echo "<br/>";
    }
}

class Worker extends Employee{
    public function __construct($name, $profile, $salary){
        parent::__construct($name, $profile, $salary);
    }

    public function showWorkerDetails(){
        echo "Welcome : ".$this->name."<br/>";  
        echo "Profile : ".$this->profile."<br/>";  
        echo "Salary : ".$this->salary."<br/>";  
        echo "<br/>";
    }
}

$emp = new Employee('Riya', 'Trainee', 45000);
echo "<b>showEmployeeDetails(Riya): </b><br/>";
$emp->showEmployeeDetails();

$workerObj = new Worker('Mayuri', 'HR', 550000);
echo "<b>showEmployeeDetails(Mayuri): </b><br/>";
$workerObj->showEmployeeDetails();

echo "<b>showWokerDetails(Mayuri- Private salary can't be accessed!): </b><br/>";
$workerObj->showWorkerDetails();

?>