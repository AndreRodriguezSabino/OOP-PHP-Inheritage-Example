<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Inheritage</title>
</head>
<pre>
<body>
    
    <?php
    require_once 'People_Super_Class.php'; // Once loaded others subclass, the superclass (People.php) is loaded. People.php is here only to be explicit.
    require_once 'Student_Subclass.php';
    require_once 'Teacher_Subclass.php';
    require_once 'Employee_Subclass.php';

    $p1 = new People();
    $p2 = new Student();
    $p3 = new Teacher();
    $p4 = new Employee();

    $p1->setName("Andre");
    $p2->setName("Lucas");
    $p3->setName("Graci");
    $p4->setName("Tux");

    $p2->setCourse("OOP PHP");
    $p3->setSalary(4000.00);
    $p4->setDepartment("IT");

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
</body>
</pre>

</html>