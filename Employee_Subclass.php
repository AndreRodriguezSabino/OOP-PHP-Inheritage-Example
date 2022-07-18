<?php
require_once 'People_Super_Class.php';
class Employee extends People
{
    private $department;
    private $working;

    public function changeJob()
    {
        $this->working = !$this->working;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    public function setDepartment($dep)
    {
        $this->department = $dep;
    }
    public function getWorking()
    {
        return $this->working;
    }
    public function setWorking($wor)
    {
        $this->working = $wor;
    }
}
