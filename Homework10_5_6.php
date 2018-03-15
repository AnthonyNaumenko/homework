<?php
//5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
// public методы setName, getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс,
// а также геттеры и сеттеры для них.

//6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }

}

class Worker extends User
{
    private $salary ;

    public function setSalary($salary)
    {
        $this->salary=$salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
$rab1 = new Worker();
$rab1->setName('Иван');
$rab1->setAge(25);
$rab1->setSalary(1000);

$rab2 = new Worker();
$rab2->setName('Вася');
$rab2->setAge(26);
$rab2->setSalary(2000);

echo $rab1->getSalary() + $rab2->getSalary().'<br>';

class Student extends User
{
    private $grant;
    private $course;

    public function setGrant($grant)
    {
        $this->grant=$grant;
    }

    public function getGrant()
    {
        return $this->grant;
    }

    public function setCourse($course)
    {
        $this->course=$course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}
$std = new Student;
$std->setName('student');
$std->setAge(19);
$std->setGrant(1200);
$std->setCourse(2);

echo $std->getName().', '.$std->getAge().', '.$std->getGrant().', '.$std->getCourse(). '<br>' ;

class Driver extends Worker
{
    private $experience;
    private $category;

    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

}
$drw = new Driver;
$drw->setCategory("B");
$drw->setExperience(3);

echo 'Category: '.$drw->getCategory().'<br>';
echo 'Experience: '.$drw->getExperience().'<br>';
?>