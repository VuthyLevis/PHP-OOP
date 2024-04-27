<?php
class Human{
    private $id;
    private $name;
    private $position;
    private $salary;
    public function __construct($id, $name, $position, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }
        public function get_id(){
            return $this -> id ;
        }
        public function get_name(){
            return $this -> name ;
        }
        public function get_position(){
            return $this -> position;
        }
        public function get_salary(){
            return $this -> salary;
        }
        
}
$person = new Human(007,"Levis","CEO",1200);
echo '<h1> id               : '.$person->get_id().'</h1>';
echo '<h1> Name             : '.$person->get_name().'</h1>';
echo '<h1> Postion          : '.$person->get_position().'</h1>';
echo '<h1> Salary           : '.$person->get_salary().'</h1>';
