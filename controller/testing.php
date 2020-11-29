<?php
//include 'config.php';
require("../config.php");


class userC
{

    public function adduser($user)
    {
        $sql = "INSERT INTO user (firstName,lastName, email,age, password)
			VALUES (:firstName,:lastName,:email,:age,:password)";
        $db = Config1::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'age' => $user->getAge(),
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();

        }
    }
}