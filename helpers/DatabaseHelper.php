<?php
require(__DIR__ . '/../config.php');

class DataBaseHelper
{
    public static function getConnection()
	{
        $db = $GLOBALS['database'];
        $conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
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