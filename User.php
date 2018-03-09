<?php
class User
{
    protected $name;
    private $age;

    public function __construct($name, $age)
    {
        //Устанавливаем значения свойств:
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge()
    {
        return $this->age;
    }

}

class Worker extends User{
    private $salary;
    public function __construct($name, $age, $salary)
    {
        parent::__construct($name, $age);
        $this->name = $name;
        $this-> salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$user = new User('Коля', 25);
//echo $user->getName();
//echo $user->getAge();
$worker = new Worker('Ivan',35, 2000);

$worker->setAge(30);



