<?php

//class created
class Student{

    public $id;
    private $fname;
    private $lname;

    //constructor
    public function __construct($id, $fname, $lname){   
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
    }

    //user defined function created
    public function display_user(){
        echo "Name of User is <b>".$this->fname." ".$this->lname."</b>.";
    }
}

$student1 = new Student(1, 'Alkesh', 'Rohit');
//Calling user defined 
echo $student1->display_user();

//EOF
