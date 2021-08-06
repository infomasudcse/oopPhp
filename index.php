<?php

class User {

    public $username;
    protected $email;
    public $role = 'member';

    public function __construct($username,$email){
        $this->username = $username;
        $this->email = $email;
    }

    public function message(){
        return $this->email.' sends new message';
    }

    //setter
    public function setEmail($email){
        if(strpos($email,'@') > -1){
            $this->email = $email;
        }
    }

    //getter
    public function getEmail(){
        return $this->email;
    }


    public function addFriend(){

        return "$this->username added new Friend";
    }
}


class AdminUser extends User {
    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level){
        
        $this->level = $level;
        parent::__construct($username,$email);
    }
}


$userOne = new User('Ima','ima@hotmail.com');
$userTwo = new User('Rakib','rakib@hotmail.com');
$userThree = new AdminUser('Zarin', 'zarin@gmail.com', 5);



echo $userOne->message();

//echo $userOne->role.'<br/>';

//echo $userThree->role.'<br/>';


//echo $userThree->username.' '.$userThree->getEmail().' '.$userThree->level;

//echo 'The class name is '. get_class($userOne);

//$userOne->setEmail('zarin@gmail.com');
// echo $userOne->username.'<br/>'; 
// echo $userOne->getEmail().'<br/>';
// echo $userOne->addFriend().'<br/>';

//print_r(get_class_vars('User'));
//print_r(get_class_methods('User'));

//$userTwo->username = 'Hiron';
//$userTwo->email = 'Hiron@gmail.com';

// echo $userTwo->username.'<br/>'; 
// echo $userTwo->getEmail().'<br/>';
// echo $userTwo->addFriend().'<br/>';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>