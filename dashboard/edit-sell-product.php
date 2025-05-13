<?php
include_once "header.php";
include_once "private/product_function.php";
$getspid = base64_decode($_GET["sp_id"]);

$getpinfo = $PRODUCT->getSingleProduct($getspid);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="card mt-5">
        <div class="card-header">
            <h4>Edit Product Information</h4>
        </div>
        <div class="card-body">
            <form  method="post" >
                <input type="hidden" name="spid" value="<?=$getspid;?>" hidden>
                <!-- Product Name -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="product_name" value="<?= $getpinfo['product_name']; ?>" required>
                </div>

                <!-- Product Description -->
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control" id="productDescription" name="product_description" rows="3" required><?= $getpinfo['description']; ?></textarea>
                </div>

                <!-- Quantity & Price -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="productQuantity" class="form-label">Quantity</label>
                        <div class="input-group mb-3">

                            <input type="number" class="form-control" id="productQuantity" name="quantity" min="1" value="<?= $getpinfo['quantity']; ?>" required>
                            <select class="form-select" name="qtype" id="qtype" required>
                                <option value="KG">KG</option>
                                <option value="Pis">Pis</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <label for="productPrice" class="form-label">Price (৳)</label>
                        <input type="number" step="0.01" class="form-control" id="productPrice" value="<?= $getpinfo['price']; ?>" name="price" required>
                    </div>
                </div>
                <!-- Collection Address -->
                <div class="mb-3">
                    <label for="collectionAddress" class="form-label">Collection Address</label>
                    <input type="text" class="form-control" id="collectionAddress" name="collection_address" value="<?= $getpinfo['collection_address']; ?>" required>
                </div>
                <button type="submit" name="update_post" class="btn btn-success">Update Post</button>
            </form>
        </div>
    </div>
</main>


<script>
    document.getElementById('qtype').value = "<?= htmlspecialchars($getpinfo['quantity_type']) ?>";
</script>
<?php include_once "footer.php"; ?>