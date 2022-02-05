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

        // Insert students data into students table
        public function insertData($post)
        {
            $name = $this->con->real_escape_string($_POST['name']);
            $board_name = $this->con->real_escape_string($_POST['board_name']);
            $grade1 = $this->con->real_escape_string($_POST['grade1']);
            $grade2 = $this->con->real_escape_string($_POST['grade2']);
            $grade3 = $this->con->real_escape_string($_POST['grade3']);
            $grade4 = $this->con->real_escape_string($_POST['grade4']);
            if($_POST['board_name']=="CSM"){
                $avg=$grade1+$grade2+$grade3+$grade4;
                $average = $avg/4;
                if($average >= 7){
                    $result = 'Pass';
                } else{
                    $result = 'Fail';
                }
                $query="INSERT INTO students(name,board_name,grade1,grade2,grade3,grade4,result,average) VALUES('$name','$board_name','$grade1','$grade2','$grade3','$grade4','$result', '$average')";
                $sql = $this->con->query($query);

            }
            if($_POST['board_name']=="CSMB"){
                $avg=$grade1+$grade2+$grade3+$grade4;
                $average = $avg/4;
                if($average >= 7){
                    $result = 'Pass';
                } else{
                    $result = 'Fail';
                }
                $query="INSERT INTO students(name,board_name,grade1,grade2,grade3,result,average) VALUES('$name','$board_name','$grade1','$grade2','$grade3','$result', '$average')";
                $sql = $this->con->query($query);


            }
             if ($sql==true) {
                header("Location:index.php?msg1=insert");
            }else{
                echo "Registration failed try again!";
            }

        }

        // Fetch students records for show listing
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

        // Fetch single data  from students table
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


        // Delete students data from students table
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