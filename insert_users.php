<?php 

require_once __DIR__ . '/autoload.php';



$users = [
    '1' => [
        'fullname' => "John Doe",
        'email' => 'johndoe@pabau.com',
        'password' => password_hash('Johndoe123', PASSWORD_BCRYPT)
],
    '2' => [
        'fullname' => "Jane Doe",
        'email' => 'janedoe@pabau.com',
        'password' => password_hash('Janedoe123', PASSWORD_BCRYPT)
    ],
    '3' => [
        'fullname' => "Brad Pitt",
        'email' => 'bradpitt@pabau.com',
        'password' => password_hash('Bradpitt123', PASSWORD_BCRYPT)
    ],
    '4' => [
        'fullname' => "Marilyn Monroe",
        'email' => 'marilynmonroe@pabau.com',
        'password' => password_hash('Marilyn123', PASSWORD_BCRYPT)
    ],
    '5' => [
        'fullname' => "Aleksandar Makedonski",
        'email' => 'aleksandar@pabau.com',
        'password' => password_hash('Aleksandar123', PASSWORD_BCRYPT)
    ],
];


foreach($users as $user) {
    $result = $userInstance->insertUsers(
        $user['fullname'],
        $user['email'],
        $user['password']
    );
}