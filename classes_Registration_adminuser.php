<?php
/**
* Class registration
* handles the user registration
*/
class Registration1
{
/**
* @var object $db_connection The database connection
*/
private $db_connection = null;
/**
* @var array $errors Collection of error messages
*/
public $errors = array();
/**
* @var array $messages Collection of success / neutral messages
*/
public $messages = array();
/**
* the function "__construct()" automatically starts whenever an object of this class is created,
* you know, when you do "$registration = new Registration();"
*/
public function __construct()
{
if (isset($_POST["register"])) {
$this->registerNewUser();
}
}
/**
* handles the entire registration process. checks all error possibilities
* and creates a new user in the database if everything is fine
*/
private function registerNewUser()
{
if (empty($_POST['user_name'])) {
$this->errors[] = '<span style="color:#FF0000">Empty Username</span>';
} elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
$this->errors[] = '<span style="color:#FF0000">Empty Password</span>';
} elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
$this->errors[] = '<span style="color:#FF0000">Password and password repeat do not the match</span>';
} elseif (strlen($_POST['user_password_new']) < 6) {
$this->errors[] = '<span style="color:#FF0000">Password has a minimum length of 6 characters</span>';
} elseif (strlen($_POST['user_name']) > 54 || strlen($_POST['user_name']) < 8) {
$this->errors[] = '<span style="color:#FF0000">Username cannot be shorter than 8 or longer than 54 characters</span>';
} elseif (!preg_match('/^[a-z\d]{2,54}$/i', $_POST['user_name'])) {
$this->errors[] = '<span style="color:#FF0000">Username does not fit the name scheme: only a-Z and numbers are allowed, 8 to 54 characters</span>';
} elseif (!empty($_POST['user_name'])
&& strlen($_POST['user_name']) <= 54
&& strlen($_POST['user_name']) >= 8
&& preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
&& !empty($_POST['user_password_new'])
&& !empty($_POST['user_password_repeat'])
&& ($_POST['user_password_new'] === $_POST['user_password_repeat'])
) {
// create a database connection
$this->db_connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// change character set to utf8 and check it
if (!$this->db_connection->set_charset("utf8")) {
$this->errors[] = $this->db_connection->error;
}
// if no connection errors (= working database connection)
if (!$this->db_connection->connect_errno) {
// escaping, additionally removing everything that could be (html/javascript-) code
$user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
$user_password = $_POST['user_password_new'];
// crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
// hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
// PHP 5.3/5.4, by the password hashing compatibility library
$user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
// check if username or email address already exists
$sql = "SELECT * FROM adminuser WHERE user_name = '" . $user_name . "';";
$query_check_user_name = $this->db_connection->query($sql);
if ($query_check_user_name->num_rows == 1) {
$this->errors[] = '<span style="color:#FF0000">Sorry, that username is already taken.</span>';
} else {
// write new user's data into database
$sql = "INSERT INTO adminuser (user_name, user_password_hash)
VALUES('" . $user_name . "', '" . $user_password_hash . "');";
$query_new_user_insert = $this->db_connection->query($sql);
// if user has been added successfully
if ($query_new_user_insert) {
$this->messages[] = '<span style="color:#4B0082">Your account has been created successfully. You can now login.</span>';
} else {
$this->errors[] = '<span style="color:#FF0000">Sorry, your registration failed. Please go back and try again.</span>';
}
}
} else {
$this->errors[] = '<span style="color:#FF0000">Sorry, no database connection.</span>';
}
} else {
$this->errors[] = '<span style="color:#FF0000">An unknown error occurred.</span>';
}
}
}