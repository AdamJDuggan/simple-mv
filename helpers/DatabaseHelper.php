<?php

class DataBaseHelper
{
    protected static $hostname = 'localhost';
    protected static $database = 'simplemvc';
    protected static $username = 'root';
    protected static $password = 'root';

	public static function getConnection()
	{
        $conn = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);
        if (!$conn) {
            return 'connection error: ' . mysqli_connect_error($conn);
        } else {
            return $conn;
        }
    }

    public static function executeQuery($connection, $query)
    {
        $result = mysqli_query($connection, $query);
        if(!$result) {
            return 'Query error: ' . mysqli_error($connection);
        } else {
            return $result;
        }
    }
}