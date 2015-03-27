<?php

include "application/login/view/View_Login.php";

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_login
 *
 * @author igor
 */
class Controller_Login extends Controller {

    function __construct() {
        $this->view = new View_Login();
    }

    public function action_Index() {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = mysqli_real_escape_string($_POST['username']);
            $password = mysqli_real_escape_string($_POST['password']);

            if (!empty($password) && !empty($username)) {
                $user = $this->getUser($username, $password);
                if ($user === false) {
                    $this->renderDefault();
                } 
                else {
                    $this->redirectTo("projects");
                }
            } else {
                $this->renderDefault();
            }
        } else {
            $this->renderDefault();
        }
    }

    protected function renderDefault() {
        $data = array();
        $data["module_name"] = "login";
        $data["page_title"] = "Вход";
        $this->view->generateView($data);
    }

    protected function getUser($username, $password) {
        if ($username == "user1" && $password == 'user1') {
            return new User($username, $password);
        }
        return false;
    }

}
