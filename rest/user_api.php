<?php

// Get a list of users
dispatch_get('/users', 'get_users');
function get_users()
{
    $user1 = array(
        1,
        'danilo',
        'danilo@gmail.com',
        37,
        '+55(11)9.8765-5432'
    );
    $user2 = array(
        2,
        'batista',
        'batista@gmail.com',
        17,
        '+55(11)9.1411-1485'
    );
    $user3 = array(
        3,
        'queiroz',
        'queiroz@gmail.com',
        47,
        '+55(11)9.5451-5445'
    );
    $user4 = array(
        4,
        'maria',
        'mariazinha@gmail.com',
        47,
        '+55(11)9.1231-3435'
    );
    $user5 = array(
        5,
        'joaozinho',
        'joaozinho@gmail.com',
        47,
        '+55(11)9.3331-4566'
    );
    $users = array($user1, $user2, $user3, $user4, $user5);
    echo json_encode($users);
	die;
}

// Get an individual user
dispatch_get('/users/:user_id', 'get_user');
function get_user()
{
    $user_id = params('user_id');
    // Do something to get a user
    $user = "user with id: $user_id";
    echo json_encode($user);
	die;
}

// Create a new user
dispatch_post('/users', 'create_user');
function create_user()
{
    $success = TRUE;
    // Do something to create a user
    echo 'a new user was created!!!!';
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not create user');
    }
}

// Update an individual user
dispatch_put('/users/:user_id', 'update_user');
function update_user()
{
    $success = true;
    $user_id = params('user_id');
    // Do something to get a user and update
    echo "user with id: $user_id updated!!!";
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not update user');
    }
}

// Update an individual user
dispatch_delete('/users/:user_id', 'delete_user');
function delete_user()
{
    $success = True;
    $user_id = params('user_id');
    // Do something to delete a user
    echo "user $user_id removed!!!";
    if ($success) {
        status(201);
    } else {
        halt(422, 'Could not update user');
    }
}
