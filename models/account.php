<?php
final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';
    public static function getTablename()
    {
        $tableName = 'accounts';
        return $tableName;
    }
    
    public static function findTasks()
    {
       
        $records = todos::findAll();
        print_r($records);
        return $records;
    }
    
    public static function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;
    }
    public function checkPassword($LoginPassword) {
        return password_verify($LoginPassword, $this->password);
    }
    }
?>