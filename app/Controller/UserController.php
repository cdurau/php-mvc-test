<?php
require_once('../app/Model/UserModel.php');

class UserController
{
    public function showUsers()
    {
        $users = UserModel::getUsers();

        // var_dump($users["data"][0]);

        foreach ($users as $user) {
            include('../app/Views/UserView.php');
        }
    }
}
