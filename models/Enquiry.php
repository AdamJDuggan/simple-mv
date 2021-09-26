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
    public function create(array $props)
    {
        return null;
    }

    /**
     * Update an enquiry
     *
     * @param int $id
     * @param array $props
     */
    public function update(int $id, array $props)
    {
        return null;
    }

    /**
     * Get a single enquiry record
     *
     * @param int $id
     */
    public function get(int $id)
    {
        return null;
    }

    /**
     * Get all enquiry records
     */
    public function all()
    {
        return null;
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