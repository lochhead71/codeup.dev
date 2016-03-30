<?php 

require_once 'Model.php';
require_once 'User.php';

// $firstUser = new User();

// $firstUser->first_name = 'Bob';
// $firstUser->last_name = 'Bobberson';
// $firstUser->email_address = 'bb@bob.com';
// $firstUser->password = 'bobsRbetter';

// $firstUser->save();

// $secondUser = new User();

// $secondUser->first_name = 'Slick';
// $secondUser->last_name = 'Wille';
// $secondUser->email_address = 'sw@bob.com';
// $secondUser->password = 'get$lick';

// $secondUser->save();

// $user = User::find(10);
// $user->first_name = 'Robert';
// $user->save();

$results = User::all();
var_dump($results);

?>