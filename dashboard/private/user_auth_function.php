<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    

<?php
include_once "db.php";

class User_auth_function{
    private $db;
    public function __construct($db){
        $this->db = $db;
        
    }

    public function login($email, $password){
    $sql = "SELECT * FROM `users` WHERE `email`=?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            if ($row["user_status"] == 1) {
                $_SESSION["uid"] = $row["id"];
                $_SESSION["uname"] = $row["name"];
                $_SESSION["uemail"] = $row["email"];
                $_SESSION["utype"] = $row["user_type"];
                $_SESSION["ustatus"] = $row["user_status"];

                return json_encode(array(
                    "status" => "success",
                    "title" => "Congratulation!",
                    "message" => "Login successful!",
                    "location" => "../index.php"
                ));
            } else {
                return json_encode(array(
                    "status" => "error",
                    "title" => "Please Contact With Admin!",
                    "message" => "Your account is inactive. Please contact support.",
                    "location" => ""
                ));
            }
        } else {
            return json_encode(array(
                "status" => "error",
                "title" => "Please Try Again!",
                "message" => "Incorrect password!",
                "location" => ""
            ));
        }
    } else {
        return json_encode(array(
            "status" => "question",
            "title" => "Not Found!",
            "message" => "User not found. Please register.",
            "location" => ""
        ));
    }
}
}

$Auth=new User_auth_function($db);


if ($_SERVER["REQUEST_METHOD"]=="POST" ) {
    $email=filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password=htmlspecialchars(trim($_POST['password']));
    $result = $Auth->login($email, $password);
$result = json_decode($result, true); // decode as associative array

if ($result) {
    echo '<script>
        Swal.fire({
            title: "' . $result["title"] . '",
            text: "' . $result["message"] . '",
            icon: "' . $result["status"] . '"
        }).then(function() {
            window.location.href = "' . $result["location"] . '";
        });
    </script>';
} else {
    echo '<script>
        Swal.fire({
            title: "Login Failed",
            text: "Invalid email or password.",
            icon: "error"
        });
    </script>';
}
   

}
?>
</body>
</html>