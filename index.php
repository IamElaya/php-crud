<?php
require_once 'core/init.php';

// var_dump(Config::get('mysql/host')); // '127.0.0.1'

// $users = DB::getInstance()->get('users', array('username', '=', 'alex'));
// if($users->count()) {
//     foreach($users as $user) {
//         echo $user->username;
//     }
// }

$user = DB::getInstance()->query("SELECT * FROM users");

if($user->nocount()) {
    echo 'No user';
} else {
    echo $user->first()->username;
}
// $db = new DB();