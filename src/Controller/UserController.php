<?php
namespace Controller;
// require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));   //Require de l'autoload car toute les class son charger dans ce fichier

use Core\Controller;
use Core\ORM;
use Model\UserModel;

class UserController extends Controller
{
    // protected function getDB(){
    //     return $this->db;
    // }

    function addAction()
    {
        $css = 'inscription.css';
        $this->render('register', ['css' => $css]); //VUE REGISTER
    }

    function loginAction()
    {
        $css = 'connection.css';
        $this->render('login', ['css' => $css]);
    }

    function ShowAction()
    {
        $this->render('show');
    }

    public function login()
    {
        $input = $this->request->getQueryParams(); //FONCTION QUI VERIFIE LES INPUTS   //THIS REQUEST EST EGALE A LA L'INSTANCE DE LA CLASSE NEW REQUEST
        //   var_dump($input);
        $email = $input['Email'];
        $pass = $input['Pass'];
        echo '<pre>';
        //   print_r($input);
        echo '<pre>';

        //         $page = new Pagination();
        // $data = array("Hey","Hello","oui");
        // $numbers = $page->Paginate($data,1);
        // $result = $page->FetchResult();

        // foreach($result as $r){
        //   echo '<div>'.$r.'</div>';
        // }
        // foreach($numbers as $num){
        //     echo '<a href="loginPost?page='.$num.'">'.$num.'</a>';
        // }

        // var_dump($Entity);
        //   $all = $orm->create('user',array('email'=> 'super titre', 'password'=>'Tene'));

        // $all = $orm->update('user',array('email'=> 'eeeeeeee', 'password'=>'eeeeeeee'),1);
        // $all = $orm->delete('user',1);
        // $all = $orm->find('movie',array('where' => 'title like "%Ta%"'));

        // var_dump($all);

        //   var_dump($all);
        $user = new UserModel($input);
        $newData = $user->findInfo($email); //RECUPERER MOT DE PASSE DANS LA BASE DE DONNÉE
        // var_dump($_REQUEST);

        //  $newEmail = $user->findEmail($email);                       //RECUPERER EMAIL DANS LA BASE DE DONNÉe
        //   $findOther = $user->findOther($email);
        if ($email === $newData['email'] && $pass === $newData['Password']) {
            session_start();
            $show = new UserController();
            $show->show($_SESSION['id']);
            $_SESSION['id'] = $newData['id'];
            $_SESSION['email'] = $newData['email'];
            $_SESSION['password'] = $newData['Password'];
            $_SESSION['zipcode'] = $newData['zipcode'];
            $_SESSION['address'] = $newData['address'];
            $_SESSION['city'] = $newData['city'];
            $_SESSION['country'] = $newData['country'];

            // var_dump(session_status());
            header('Location:' . BASE_URI . '/profil');
        } else {
            header('Location:' . BASE_URI . '/register');
        }
    }

    function registerAction()
    {
        $input = $this->request->getQueryParams();
        $classModel = new UserModel($input);

        //   $email = $input['UserEmail'];
        //   $pass = $input['UserPass'];
        //   $classModel->setEmail($email);                            //MODIFICATION DE LA VALEUR EMAIL
        //   $classModel->setPass($pass);                              //MODIFICATION DE LA VALEUR PASSWORD
        //  var_dump($classModel->getEmail(), $classModel->getPass());
        if (!$classModel->id) {
            $classModel->save();
            header('Location:' . BASE_URI . '/login');
        }
    }

    function logout()
    {
        session_start();
        if ($_SESSION) {
            session_destroy(); //destroy the session
            header('Location:' . BASE_URI . '/'); //to redirect back to "index.php" after logging out
            exit();
        }
    }

    function update()
    {
        session_start();
        $input = $this->request->getQueryParams();
        //  var_dump($input);
        $orm = new ORM();
        $update = $orm->update('user', $input, $_SESSION['id']);

        //  var_dump($update);
    }

    function delete()
    {
        session_start();
        $orm = new ORM();
        if (isset($_SESSION['id'])) {
            $orm->delete('user', $_SESSION['id']);
            session_destroy(); //destroy the session
            header('Location:' . BASE_URI . '/'); //to redirect back to "index.php" after logging out
            exit();
        }
    }

    public function profil()
    {
        session_start();
        // var_dump($_SESSION);
        $css = 'profil.css';
        $this->render('profil', ['css' => $css]);
    }

    public function show($id)
    {
        if (empty($id)) {
            session_start();
            $id = $_SESSION['id'];
            echo "ID de l'utilisateur a afficher : $id" . PHP_EOL;
        } else {
            echo "ID de l'utilisateur a afficher : $id" . PHP_EOL;
        }
    }
}
