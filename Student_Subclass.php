<?php
require_once 'People_Super_Class.php';
class Student extends People
{
    private $join;
    private $course;

    public function cancelJoin()
    {
        echo "<p>Your join is going to be cancelled.</p>";
    }
    public function getJoin()
    {
        return $this->join;
    }
    public function setJoin($jo)
    {
        $this->join = $jo;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($cou)
    {
        $this->course = $cou;
    }
}
