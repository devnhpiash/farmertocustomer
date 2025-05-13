<?php 
include_once "header.php"; 
include_once "private/product_function.php"; 
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3>Manage Sell Product</h3>
          <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button"
              class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#postProductModal">
              Post Product
              
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
              <h4 class="card-title">Product List</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive small">
          <table class="table table-striped table-bordered table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Price</th>
                <th scope="col">Collection Address</th>
                <th scope="col">Status</th>
                <th scope="col">Create At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               $all_pro=$PRODUCT->getMyProduct();
              if($all_pro!=null){
                $row=0;
                foreach($all_pro as $key=>$value){
                  $row++;
                  $images = json_decode($value['image'], true); // Decode JSON into PHP array
                  if (!empty($images)) {
                     $image= '<img src="../' . htmlspecialchars($images[0]) . '" width="50" height="30" alt="Product Image">';
                  } else {
                     $image= 'No image';
                  }

              ?>
              <tr>
                <td><?=$row;?></td>
                <td><?= $image;?></td>
                <td><?=$value['product_name'];?></td>
                <td><?=$value['quantity'];?> / <?=$value['quantity_type'];?></td>
                <td><?=$value['price'];?></td>
                <td><?=$value['collection_address'];?></td>
                <td><?=$value['status'];?></td>
                <td><?=date('d-m-Y', strtotime($value['created_at']));?></td>
                <td>
                  <a href="edit-sell-product.php?sp_id=<?=base64_encode($value['id']);?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="delete-sell-product.php?sp_id=<?=base64_encode($value['id']);?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
                
              </tr>
             <?php 
                }
              }
            ?>
            </tbody>
          </table>
        </div>
          </div>
        </div>
        
        
</main>

<!-- Modal -->
<div class="modal fade" id="postProductModal" tabindex="-1" aria-labelledby="postProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form  method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="postProductModalLabel">Post a Product for Sale</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <!-- Product Name -->
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="product_name" required>
          </div>

          <!-- Product Description -->
          <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea class="form-control" id="productDescription" name="product_description" rows="3" required></textarea>
          </div>

          <!-- Quantity & Price -->
          <div class="row mb-3">
            <div class="col">
                <label for="productQuantity" class="form-label">Quantity</label>
              <div class="input-group mb-3">
                
                <input type="number" class="form-control" id="productQuantity" name="quantity" min="1" required>
                <select class="form-select" name="qtype" id="qtype" required>
                    <option value="KG">KG</option>
                    <option value="Pis">Pis</option>
                </select>
            </div>
            </div>
           
            <div class="col">
              <label for="productPrice" class="form-label">Price (৳)</label>
              <input type="number" step="0.01" class="form-control" id="productPrice" name="price" required>
            </div>
          </div>

          <!-- Product Image -->
          <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input class="form-control" type="file" id="productImage" name="product_image[]" accept="image/png, image/jpg, image/jpeg" required multiple>
          </div>

          <!-- Collection Address -->
          <div class="mb-3">
            <label for="collectionAddress" class="form-label">Collection Address</label>
            <input type="text" class="form-control" id="collectionAddress" name="collection_address" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" name="add_sell" class="btn btn-success">Post Product</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php include_once "footer.php"; ?>