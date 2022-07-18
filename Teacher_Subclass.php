<?php
require_once 'People_Super_Class.php';
class Teacher extends People
{
    private $speciality;
    private $salary;

    public function increaseSalary($sal)
    {
        $this->salary += $sal;
    }

    public function getSpeciality()
    {
        return $this->speciality;
    }
    public function setSpeciality($special)
    {
        $this->speciality = $special;
    }
    public function getSalary()
    {
        return $this->speciality;
    }
    public function setSalary($sal)
    {
        $this->salary = $sal;
    }
}
