
<?php
//1.Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения
// (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
class Worker1
{
    public $name;
    public $age;
    public $salary;
}
$rab1 = new Worker1;
$rab1->name = 'Ivan';
$rab1->age = 25;
$rab1->salary = 1000;

$rab2 = new Worker1;
$rab2->name = 'Vasya';
$rab2->age = 26;
$rab2->salary = 2000;

echo $rab1->salary+$rab2->salary.'<br>';
echo $rab1->age+$rab2->age.'<br>';
echo '<hr>';
//2.Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
class Worker2
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
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
$rab1 = new Worker2;
$rab1->setName('Ivan');
$rab1->setAge(25);
$rab1->setSalary(1000);

$rab2 = new Worker2;
$rab2->setName('Vasya');
$rab2->setAge(26);
$rab2->setSalary(2000);

echo $rab1->getSalary()+$rab2->getSalary().'<br>';
echo $rab1->getAge()+$rab2->getAge().'<br>';

echo '<hr>';
