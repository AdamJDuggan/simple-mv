<?php

require(__DIR__ . '/../helpers/DataBaseHelper.php');

class Enquiry
{
    protected $tableName = 'enquiry';

    public function testConnection() {
        $connection = DataBaseHelper::getConnection();
        $query = "SELECT * FROM `{$this->tableName}`";
        $result = DataBaseHelper::executeQuery($connection, $query);
        return $result;
    }

    /**
     * Create a new enquiry records
     */
    public function create(array $data)
    {
        return null;
    }

    /**
     * Get a single enquiry record
     */
    public function get(int $id)
    {
        return null;
    }
}