<?php 

class Users {

    protected $collection_users;

    public function __construct($collection_users) {
        $this->collection_users = $collection_users;
    }

    public function checkInput($var) {
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripcslashes($var);
        
        return $var;
    }

    public function register($username, $password, $email, $country, $address) {

        $document = $this->collection_users->insertOne([
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'country' => $country,
            'address' => $address,
            'admin'=> 'no',
            'created_at' => new MongoDB\BSON\UTCDateTime(),
            'UNIX_time' => (new MongoDB\BSON\ObjectID())->getTimestamp()
            ]);
        //
        $_SESSION['user_id'] = $document->getInsertedId();
    }

    public function userData($userId){
        $document = $this->collection_users->findOne(["_id" => new MongoDB\BSON\ObjectId($userId)]);
        return $document;
    }

    public function logout() {

        /* $_SESSION = array();
        session_destroy();
        

        session_start(); */
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();
        header('Location: index.php');
        
    }

    public function login($username, $password) {
        //$document = $this->collection_users->findOne(['username' => $username, 'password' => $password]);
        $document = $this->collection_users->findOne(
            ['username' => $username, 'password' => $password],
            ['projection' => ['_id' => 1]]
        );

        if(!empty($document->_id)) {
           

                //start up regular user session
                $_SESSION['user_id'] = $document->_id;
            
        }
        else {
            return false;
        }
    }

    public function checkAdmin($username, $password) {
        //$document = $this->collection_users->findOne(['username' => $username, 'password' => $password]);
        $document = $this->collection_users->findOne(
            ['username' => $username, 'password' => $password],
            ['projection' => ['_id' => 1, 'admin' => 1]]
        );

        if(!empty($document->_id)) {
            if($document->admin == 'yes') {
                
                //start up admin session
                $_SESSION['admin_id'] = $document->_id;
                $_SESSION['user_id'] = $document->_id;
            }
        }
        else {
            return false;
        }
    }
}