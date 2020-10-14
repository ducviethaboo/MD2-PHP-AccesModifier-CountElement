<?php
class Student {
   public $name;
   public static $count = 0;

   public function __construct($name)
   {
       $this->name = $name;
       self::$count++;
   }
}
$student1 = new Student("Viet");
echo Student::$count;