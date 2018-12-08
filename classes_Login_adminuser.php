<?php
/**
* Class login
* handles the user's login and logout process
*/
class Login1
{
/**
* @var object, The database connection
*/
private $db_connection = null;
/**
* @var array, Collection of error messages
*/
public $errors = array();
/**
* @var array, Collection of success / neutral messages
*/
public $messages = array();
/**
* the function "__construct()" automatically starts whenever an object of this class is created,
* you know, when you do "$login = new Login();"
*/
public function __construct()
{
// create/read session, absolutely necessary
session_start();
// check the possible login actions:
// if user tried to log out (happen when user clicks logout button)
if (isset($_GET["logout1"])) {
$this->doLogout();
}
// login via post data (if user just submitted a login form)
elseif (isset($_POST["login1"])) {
$this->dologinWithPostData();
}
}
/**
* log in with post data
*/
private function dologinWithPostData()
{
// check login form contents
if (empty($_POST['user_name'])) {
$this->errors[] = "Username field was empty.";
} elseif (empty($_POST['user_password'])) {
$this->errors[] = "Password field was empty.";
} elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {
// create a database connection, using the constants from config_db.php (which we loaded in index_adminuer.php)
$this->db_connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// change character set to utf8 and check it
if (!$this->db_connection->set_charset("utf8")) {
$this->errors[] = $this->db_connection->error;
}
// if no connection errors (= working database connection)
if (!$this->db_connection->connect_errno) {
// escape the POST stuff
$user_name = $this->db_connection->real_escape_string($_POST['user_name']);
// database query, getting all the info of the selected user 
$sql = "SELECT user_name, user_password_hash
FROM adminuser
WHERE user_name = '" . $user_name . "';";
$result_of_login_check = $this->db_connection->query($sql);
// if this user exists
if ($result_of_login_check->num_rows == 1) {
// get result row (as an object)
$result_row = $result_of_login_check->fetch_object();
// using PHP 5.5's password_verify() function to check if the provided password fits
// the hash of that user's password
if (password_verify($_POST['user_password'], $result_row->user_password_hash)) {
// write user data into PHP SESSION (a file on your server)
$_SESSION['user_name'] = $result_row->user_name;
$_SESSION['user_login_status'] = 1;
} else {
$this->errors[] = '<span style="color:#FF0000">Wrong password. Try again.</span>';
}
} else {
$this->errors[] = '<span style="color:#FF0000">This user does not exist.</span>';
}
} else {
$this->errors[] = '<span style="color:#FF0000">Database connection problem.</span>';
}
}
}
/**
* perform the logout
*/
public function doLogout()
{
// delete the session of the user
$_SESSION = array();
session_destroy();
// return a little feeedback message
$this->messages[] = '<span style="color:#FF0000">You have logged out.</span>';
}
/**
* simply return the current state of the user's login
* @return boolean user's login status
*/
public function isUserLoggedIn()
{
if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
return true;
}
// default return
return false;
}
}