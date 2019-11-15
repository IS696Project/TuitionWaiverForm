<?php

class DB
{

    public $connection = 'connection';
    function __construct() {
        include "config.php";
        $this->connection = new PDO($dsn, $username, $password, $options);
    }
    //insert a new row in a table
    //input $table=>table name
    //      $data=>an array that holds key/value for the table fields
    //return the id of the inserted row, or -1 if failed
    function insert($table, $data){
        try {
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                $table,
                implode(", ", array_keys($data)),
                ":" . implode(", :", array_keys($data))
            );
            $statement = $this->connection->prepare($sql);
            if($statement->execute($data)==TRUE) {
                $id = $this->connection->lastInsertId("id");
                return $id;
            }
            else
                return -1;
        }catch(PDOException $e) {
            $this->connection->rollback();
            echo "Error!: " . $e->getMessage() . "</br>";
            return -1;
        }
    }
    //update a row in a table
    //input $table=>table name
    //      $id=>the id for the row to be updated, use $id=="" to ignore the where clause
    //      $data=>an array that holds key/value for the table fields
    //return the 1 if success, or -1 if failed
    function update($table, $id, $data){
        try {
            $valueSets = array();
            foreach($data as $key => $value) {
                $valueSets[] = $key . " = '" . $value . "'";
            }
            $sql = "UPDATE $table SET ". join(",",$valueSets) . " WHERE ";
            if($id !=="")
                $sql .= "id=$id";
            else
                $sql .= "1";

            $statement = $this->connection->prepare($sql);
            return $statement->execute($data);

        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    function read($table, $where){

        $sql = "SELECT * FROM $table WHERE ";
        if($where !== "")
            $sql .= $where;
        else
            $sql .= "1";

        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }


}