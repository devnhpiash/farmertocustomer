
<?php
include_once "db.php" ;

class Users{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function user_register($name , $email , $phone , $address , $userType , $password){
        $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `password`,  `address`, `user_type`) VALUES (? , ?, ?, ?, ?, ?)";
        $stml = $this->db->prepare($sql);
        $stml->bind_param("ssssss", $name, $email, $phone, $password, $address, $userType);
        if ($stml->execute()) {
           return true; 
        }else{
            return false;
        }
    }

    
}

$user=new Users($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    // Sanitize input
    $name     = htmlspecialchars(trim($_POST['name']));
    $email    = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone    = htmlspecialchars(trim($_POST['phone']));
    $address  = htmlspecialchars(trim($_POST['address']));
    $userType = htmlspecialchars(trim($_POST['userType']));
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Password match check
    if ($password !== $cpassword) {
        echo '<script>
            Swal.fire({
                title: "Password Mismatch!",
                text: "Please make sure both passwords are the same.",
                icon: "warning"
            });
        </script>';
        exit;
    }
    // OPTIONAL: Securely hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Register the user using a method (assuming $user is a class instance)
    $result = $user->user_register($name, $email, $phone, $address, $userType, $hashedPassword);

    if ($result) {
        echo '<script>
            Swal.fire({
                title: "Success!",
                text: "Your registration was completed successfully.",
                icon: "success"
            }).then(function(){
                window.location.href="index.php";
            });
        </script>';
    } else {
        echo '<script>
            Swal.fire({
            title: "Somethings Wrong!",
            text: "Faild To Registration. Please Try Again",
            icon: "error"
        });</script>';
    }
    

}

?>

