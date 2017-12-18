<?php

class accountsController extends http\controller
{
        public static function show()
    {
        session_start();
        $record = accounts::findOne($_SESSION["userID"]);
        self::getTemplate('show_account', $record);   
    }
    
    
    public static function all()
    {
        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);
    }
     public static function register()
    {
        self::getTemplate('register');
    }
    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = $_POST['password'];
            $user->password = account::setPassword($_POST['password']);
            $user->save();
            header("Location: index.php?page=homepage&action=show");
        } else {
            $error = 'already registered';
            self::getTemplate('error', $error);
        }
    }
    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('edit_account', $record);
    }
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        self::getTemplate('user_homepage', NULL);
    }
    public static function delete() {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=homepage&action=show");
    }
    
    public static function login()
    {
        $user = accounts::findUserbyEmail($_REQUEST['uname']);
    
        if ($user == FALSE) {
            $error = 'user not found';
                self::getTemplate('error', $error);
            
        } else {
            if($user->checkPassword($_POST['psw']) == TRUE) {
               
                session_start();
                $_SESSION["userID"] = $user->id;
               
                self::getTemplate('user_homepage', NULL);
            } else {
                $error = 'password does not match';
                self::getTemplate('error', $error);
            }
        }
    }
    
    public static function back1()
    {
      self::getTemplate('user_homepage', NULL);
    }
    
    public static function logout()
    {
      session_destroy();
      $_SESSION=array();
      header('Location:index.php?page=homepage');
    }
}
?>