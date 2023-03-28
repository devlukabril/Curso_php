<?php 

    require_once("models/User.pbp");

    class UserDAO implements UserDAOInterface{

        public function buildUser($data){


        }
        public function create(User $user, $authUser = false){


        }
        public function update(User $user){


        }
        public function verifytoken($protected = false){


        }
        public function setTokenToSession($token, $redirect = true){


        }
        public function authenticateUser($email, $password){


        }
        public function findByEmail($email){


        }
        public function findById($id){


        }
        public function findByToken($token){


        }
        public function changePassword(user $user){


        }








    }

?>