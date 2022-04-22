<?php
Session_start();
class my_db extends SQLite3
{
    public function __construct()
    {
        $this->open('database.sqlite3');
    }
}
$conn = new my_db();
if (!$conn) {
    echo $conn->lastErrorMsg();
}
else {
    $success =  "Connection Successfully";
    $_SESSION["success"] = $success;
}
?>