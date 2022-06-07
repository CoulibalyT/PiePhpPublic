<?php

// namespace Model;

// use PDO;
// use PDOException;
// use Core\Database;

// class MovieModel extends Database
// {
//     public $db;
//     protected $table = 'movie';

//     public function Nb_Movie()
//     {

//         $nb_movie = $this->db->prepare(
//             "SELECT COUNT(*) AS nb_movie FROM $this->table  :debut, :parPage"
//         );

//         $result->bindValue(':debut', $debutPage, PDO::PARAM_INT);
//         $result->bindValue(':parPage', $parPage, PDO::PARAM_INT);
//         $nb_movie->execute();

//         $result = $nb_movie->fetchAll(PDO::FETCH_ASSOC);


//         if (isset($_GET['page']) && !empty($_GET['page'])) {
//             $currentPage = (int) strip_tags($_GET['page']);
//         } else {
//             $currentPage = 1;
//         }

//         $parPage = 30;
//         $nb_movies = (int) $result['nb_movie'];
//         $pages = ceil($nb_movies / $parPage);
//         $debutPage = $currentPage * $parPage - $parPage;

        
//         var_dump($pages);

        // $sqlQuery = "select email from user where email='$email'";
        //     return $this->db->query($sqlQuery)->fetch(PDO::FETCH_ASSOC);
    // }

    // public function findPassword($password)
    // {
    //         $userPass = $this->db->query("SELECT password FROM {$this->table} WHERE password = '$password'");
    //         return $userPass->fetch(PDO::FETCH_ASSOC);
    // }

    // public function FindOther($password)
    // {
    //         $userPass = $this->db->query("SELECT * FROM {$this->table} WHERE password = '$password'");
    //         return $userPass->fetch(PDO::FETCH_ASSOC);
    // }

    /////////////////////////////////////////////////CRUD////////////////////////////////////////////////////////////////
// }
