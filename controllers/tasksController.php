<?php
class tasksController extends http\controller
{
   
    public static function show()
    {
        session_start();
        if(key_exists('userID',$_SESSION)) {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
        }
        else {
               $error = 'you must be logged in to view tasks';
               self::getTemplate('error', $error);
           }
    }
   
    public static function all()
    {
         $records = todos::findAll();
         session_start();
         if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
               $records = todos::findTasksbyID($userID);
               self::getTemplate('all_tasks', $records);
           } else {
               $error = 'you must be logged in to view tasks';
               self::getTemplate('error', $error);
           }
    }
    public static function create()
    {
        self::getTemplate('create_task', NULL);
      }
   
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
        }
        
   
    public static function store()
    {
        $id=$_REQUEST['id'];
        if($id==null){
          $record=new \todo;
          $record->owneremail=$_POST['owneremail'];
          $record->ownerid=$_POST['ownerid'];
          $record->createddate=$_POST['createddate'];
          $record->duedate=$_POST['duedate'];
          $record->message=$_POST['message'];
          $record->isdone=$_POST['isdone'];
          $record->save(); 
        }
        else{
          $record = todos::findOne($_REQUEST['id']);
          $record->owneremail=$_POST['owneremail'];
          $record->ownerid=$_POST['ownerid'];
          $record->createddate=$_POST['createddate'];
          $record->duedate=$_POST['duedate'];
          $record->message=$_POST['message'];
          $record->isdone=$_POST['isdone'];
          $record->save();
          }
        header('Location:index.php?page=tasks&action=all');
    }
   
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header('Location:index.php?page=tasks&action=all');
    }
}
?>