<?php
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так:
// new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
class Worker
{
    private $name;
    public  $age;
    private $salary;

    public function __construct($name, $salary)
    {

        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

$rab = new Worker ('Дима', 1000);
$rab->age = 25;

echo $rab->getSalary() * $rab->age. '<br>';


?>
