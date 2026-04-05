<?php

// Define a class
class Student {
    public $name;
    public $rollNumber;
    public $email;
    
    // Constructor
    public function __construct($name, $rollNumber, $email) {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        $this->email = $email;
    }
    
    // Method to display student info
    public function displayInfo() {
        echo "<h3>Student Details</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->rollNumber . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// Create objects
$student1 = new Student("John Doe", 101, "john@example.com");
$student2 = new Student("Jane Smith", 102, "jane@example.com");

// Call methods
$student1->displayInfo();
echo "<br>";
$student2->displayInfo();

?>