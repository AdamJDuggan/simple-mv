<?php

// Needed instead of 'require' to run on linux. Fix permissions when more time
require($_SERVER['DOCUMENT_ROOT']."/helpers/DatabaseHelper.php");

class Enquiry
{
    protected $tableName = 'enquiries';

    /**
     * For de-bugging purposes
     */
    public function testConnection() {
        $connection = DataBaseHelper::getConnection();
        $query = "SELECT * FROM `{$this->tableName}`";
        $result = DataBaseHelper::executeQuery($connection, $query);
        return $result;
    }

    /**
     * Create a new enquiry records
     */
    public function create($firstName, $lastName, $email, $enquiry)
    {
        $connection = DataBaseHelper::getConnection();
        $query = "INSERT INTO enquiries(firstName, lastName,email,enquiry ) VALUES('$firstName', '$lastName', '$email', '$enquiry')";
        $result = DataBaseHelper::getLastId($connection, $query);
        return $result;
    }

    /**
     * Update an enquiry
     *
     * @param int $id
     * @param array $props
     */
    public function update($id, $firstName, $lastName, $email, $enquiry)
    {
       
        $connection = DataBaseHelper::getConnection();
        $query = "UPDATE `{$this->tableName}` SET firstName = '$firstName', lastName = '$lastName', email = '$email', enquiry = '$enquiry' WHERE id = '$id'";
        $result = DataBaseHelper::executeQuery($connection, $query);
        return $result;
    }
    

    /**
     * Get a single enquiry record
     *
     * @param int $id
     */
    public function get(int $id)
    {
        $connection = DataBaseHelper::getConnection();
        $query = "SELECT * FROM `{$this->tableName}` WHERE id = ". $id;
        $result = DataBaseHelper::executeQuery($connection, $query);
        $enquiry = mysqli_fetch_assoc($result);
        return $enquiry;
    }

    /**
     * Get all enquiry records
     */
    public function all()
    {
        $connection = DataBaseHelper::getConnection();
        $query = "SELECT * FROM `{$this->tableName}`";
        $result = DataBaseHelper::executeQuery($connection, $query);
        return $result;
    }

    /**
     * Delete an enquiry record
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        return null;
    }
}