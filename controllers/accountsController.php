<?php
//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        session_start();
        $record = accounts::findOne($_SESSION["userID"]);
        self::getTemplate('show_account', $record);
    }
    //to call the show function the url is index.php?page=accounts&action=all
    public static function all()
    {
        //echo 'in all';
        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks
    //you should check the notes on the project posted in moodle for how to use active record here
    //this is to register an account i.e. insert a new account
    public static function register()
    {
        self::getTemplate('register');
    }
    //this is the function to save the user the new user for registration
    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        //echo 'hy';
        if ($user == FALSE) {
            //echo 'in if';
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
            echo 'in else';
            //You can make a template for errors called error.php
            // and load the template here with the error you want to show.
           // echo 'already registered';
            //$error = 'already registered';
            //self::getTemplate('error', $error);
        }
    }
    public static function edit()
    {
        //echo $_REQUEST['uname'];
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('edit_account', $record);
    }
//this is used to save the update form data
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        //header("Location: index.php?page=accounts&action=");
        self::getTemplate('login_homepage', NULL);
    }
    public static function delete() {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=homepage&action=show");
    }
    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        $user = accounts::findUserbyEmail($_REQUEST['uname']);
        //print_r($user);
        if ($user == FALSE) {
            echo 'user not found';
        } else {
            if($user->checkPassword($_POST['psw']) == TRUE) {
                //echo 'login';
                session_start();
                $_SESSION["userID"] = $user->id;
                $_SESSION["email"]= $user->email;
                //forward the user to the show all todos page
                //print_r($_SESSION);
                self::getTemplate('login_homepage', NULL);
            } else {
                echo 'password does not match';
            }
        }
    }
    
    public static function logout()
    {
      session_destroy();
      header('Location:index.php?page=homepage');
    }
}
?>