<?php

require(__DIR__ . '/../helpers/DataBaseHelper.php');

class Enquiry
{
    protected $tableName = 'enquiry';

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