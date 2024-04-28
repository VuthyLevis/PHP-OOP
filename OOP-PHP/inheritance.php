<?php

class Human {
    protected $id;
    protected $name;
    protected $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

class Student extends Human {
    private $score;

    public function __construct($id, $name, $email, $score)
     {

        Human::__construct($id, $name, $email);
        $this->score = $score;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getScore() {
        return $this->score;
    }
}

$student = new Student(007, "Levis", "Levis@gmail.com", 90);
echo '<h1>id : ' . $student->getId() . '</h1>';
echo '<h1>name : ' . $student->getName() . '</h1>';
echo '<h1>email : ' . $student->getEmail() . '</h1>';
echo '<h1>score : ' . $student->getScore() . '</h1>';

?>





