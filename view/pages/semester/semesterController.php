<?php

class SemesterController {
    // store
    public function store($data)
    {
        $name = $data['name'];
        if (empty($name)) {
            return "Name is required";
        }
        $conn = new mysqli("localhost", "root", "", "tpr");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $insertQuery = "INSERT INTO semesters (name) VALUES ('$name')";
        if ($conn->query($insertQuery) === TRUE) {
            return null;
        }else{
            return "Error: " . $conn->error;
        }
        
    }

    // get all elements
    public function getAllSemesters(){
        $conn = new mysqli("localhost", "root", "", "tpr");
        $query = "SELECT * FROM semesters";
        $result = $conn->query($query);
        return $result;
    }

    // get by id
    public function getSemesterById($id){
        $conn = new mysqli("localhost", "root", "", "tpr");
        $query = "SELECT * FROM semesters WHERE id = $id";
        $result = $conn->query($query);
        return $result->fetch_assoc();
    }

    // handle update
    public function updateSemester($data){
        $id = $data['edit_id'];
        $name = $data['name'];
        if (empty($name)) {
            return "Name is required";
        }
        $conn = new mysqli("localhost", "root", "", "tpr");
        $query = "UPDATE semesters SET name = '$name' WHERE id = $id";
        if ($conn->query($query) === TRUE) {
            return null;
        }else{
            return "Error: " . $conn->error;
        }
    }

    // handle deletion
    public function deleteSemester($id){
        $conn = new mysqli("localhost", "root", "", "tpr");
        $query = "DELETE FROM semesters WHERE id = $id";
        try{

            if ($conn->query($query) === TRUE) {
                return null;
            }
        }catch(Exception $e){
           return "unable to delete, semsster id is used as foreignke";
        }
    }
}
