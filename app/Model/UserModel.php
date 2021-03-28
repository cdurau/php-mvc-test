<?php

class UserModel
{
    private $id;
    private $firstName;
    private $lastName;
    private $picture;
    private $email;

    public function __construct($id, $firstName, $lastName, $picture, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->picture = $picture;
        $this->email = $email;
    }

    public static function getUsers()
    {
        // kvstore API url
        $apiUrl = 'https://dummyapi.io/data/api/user?limit=10';
        // create & initialize a curl session
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, $apiUrl);

        // Set Header
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'app-id: 6060d9dd03d3f7775a3c8900',
            'Content-Type: application/json'
        ));

        // return the transfer as a string, also with setopt()
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // curl_exec() executes the started curl session
        // $output contains the output string
        $output = curl_exec($curl);

        // close curl resource to free up system resources
        // (deletes the variable made by curl_init)
        curl_close($curl);

        $response = json_decode($output, true);

        return $response["data"];
    }
}
