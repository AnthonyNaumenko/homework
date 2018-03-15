<?php
//2.Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

//3. Дополните класс Worker из предыдущей задачи private методом checkAge,
// который будет проверять возраст на корректность (от 1 до 100 лет).
// Этот метод должен использовать метод setAge перед установкой нового возраста
// (если возраст не корректный - он не должен меняться).
class Worker
{
    private $name;
    private $age;
    private $salary;
    public function setName($name)
    {
        return $this->name=$name;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            return $this->age = $age;
        }
    }

    public function setSalary($salary)
    {
        return $this->salary=$salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age) {
        if($age<100){
            return true;
        } else {
            return false;
        }
    }
}
$rab1 = new Worker ;
$rab1->setName('Ivan');
$rab1->setAge(25);
$rab1->setSalary(1000);

$rab2 = new Worker ;
$rab2->setName('Vasya');
$rab2->setAge(26);
$rab2->setSalary(2000);

echo $rab1->getAge() + $rab2->getAge(). '<br>';
echo $rab1->getSalary() + $rab2->getSalary(). '<br>';

?>
