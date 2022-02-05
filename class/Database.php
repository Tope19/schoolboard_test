<?php

    class Employee
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "";
        private $database   = "superschool";
        public  $con;


        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
                return $this->con;
            }
        }

        // Insert customer data into customer table
        public function insertData($post)
        {
            $name = $this->con->real_escape_string($_POST['name']);
            $board_name = $this->con->real_escape_string($_POST['board_name']);
            $grade1 = $this->con->real_escape_string($_POST['grade1']);
            $grade2 = $this->con->real_escape_string($_POST['grade2']);
            $grade3 = $this->con->real_escape_string($_POST['grade3']);
            $grade4 = $this->con->real_escape_string($_POST['grade4']);
            $query="INSERT INTO students(name,board_name,grade1,grade2,grade3,grade4) VALUES('$name','$board_name','$grade1','$grade2','$grade3','$grade4','$salary')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg1=insert");
            }else{
                echo "Registration failed try again!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM students";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "No found records";
            }
        }

        // Fetch single data for edit from customer table
        public function displyaRecordById($id)
        {
            $query = "SELECT * FROM students WHERE id = '$id'";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM students WHERE id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>