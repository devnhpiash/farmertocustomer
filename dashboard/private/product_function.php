<?php
include_once "db.php";

class Product_function {
    private $db;
    private $fid;

    public function __construct($db) {
        $this->db = $db;
        $this->fid= $_SESSION['uid'];
    }

    public function add_product($pname, $pdes, $pquantity, $pqtype, $pprice, $collection_addr, $proimage) {
        $imageNames = [];

        // Upload directory
        $uploadDir = "../product-image/";

        // Loop through uploaded files
        for ($i = 0; $i < count($proimage['name']); $i++) {
            $originalName = basename($proimage['name'][$i]);
            $ext = pathinfo($originalName, PATHINFO_EXTENSION);

            // Unique file name
            $uniqueName = rand(1000, 9999) . '_' . time() . '_' . $i . '.' . $ext;
            $targetFile = $uploadDir . $uniqueName;

            if (move_uploaded_file($proimage['tmp_name'][$i], $targetFile)) {
                $imageNames[] = 'product-image/'.$uniqueName;
            }
        }

        // Convert image names to JSON
        $imageJson = json_encode($imageNames);

        $sql = "INSERT INTO `products`(`farmer_id`,`product_name`, `description`, `price`, `quantity`, `quantity_type`, `status`, `image`, `collection_address`)
                VALUES (?,?, ?, ?, ?, ?, 'pending', ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ississss", $this->fid,$pname, $pdes, $pprice, $pquantity, $pqtype, $imageJson, $collection_addr);
        
        if ($stmt->execute()) {
            return json_encode(array(
                    "status" => "success",
                    "title" => "Successfuly!",
                    "message" => "New Product Sell Post Completed!",
                    "location" => "sell-product.php"
            ));
        }else {
           return json_encode(array(
                    "status" => "error",
                    "title" => "Please Try Again!",
                    "message" => "New Product Sell Post Rejected!",
                    "location" => "sell-product.php"
            ));
        }

       
    }

    public function update_product($pname, $pdes, $pquantity, $pqtype, $pprice, $collection_addr,$spid){
        $sql="UPDATE `products` SET `product_name`=?,`description`=?,`price`=?,`quantity`=?,`quantity_type`=?,`collection_address`=? WHERE `id`=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssssssi",$pname, $pdes, $pprice, $pquantity, $pqtype,$collection_addr,$spid);
        if ($stmt->execute()) {
            return json_encode(array(
                "status"=> "success",
                "title"=> "Congratulation!",
                "message"=> "Product Information Updated!",
                "location"=> "sell-product.php"
            ));
        }else{
            return json_encode(array(
                "status"=> "error",
                "title"=> "Please Try Again!",
                "message"=> "Faild To Update Product Information!",
                "location"=> "sell-product.php"
            ));
        }
    }

    public function getMyProduct(){
        $sql = "SELECT * FROM `products` WHERE `farmer_id`=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i",$this->fid);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getSingleProduct($id){
         $sql = "SELECT * FROM `products` WHERE `id`=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}

// Instantiate
$PRODUCT = new Product_function($db);

if (isset($_POST["add_sell"]) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $pname = htmlspecialchars($_POST['product_name']);
    $pdes = htmlspecialchars($_POST['product_description']);
    $pquantity = htmlspecialchars($_POST['quantity']);
    $pqtype = htmlspecialchars($_POST['qtype']);
    $pprice = htmlspecialchars($_POST['price']);
    $collection_addr = htmlspecialchars($_POST['collection_address']);
    $proimage = $_FILES['product_image'];

    $result = $PRODUCT->add_product($pname, $pdes, $pquantity, $pqtype, $pprice, $collection_addr, $proimage);
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
        echo "<script>alert('Error posting product.');</script>";
    }
}
if (isset($_POST["update_post"]) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $pname = htmlspecialchars($_POST['product_name']);
    $pdes = htmlspecialchars($_POST['product_description']);
    $pquantity = htmlspecialchars($_POST['quantity']);
    $pqtype = htmlspecialchars($_POST['qtype']);
    $pprice = htmlspecialchars($_POST['price']);
    $collection_addr = htmlspecialchars($_POST['collection_address']);
    $spid=htmlspecialchars($_POST['spid']);
   

    $result = $PRODUCT->update_product($pname, $pdes, $pquantity, $pqtype, $pprice, $collection_addr,$spid);
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
        echo "<script>alert('Error Updateing product.');</script>";
    }
}
?>
