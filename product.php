<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Details</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .product-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      max-width: 1000px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-gallery {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .main-image img {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .thumbnails {
      display: flex;
      gap: 10px;
    }

    .thumbnails img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border: 2px solid transparent;
      cursor: pointer;
      border-radius: 5px;
      transition: border-color 0.2s ease;
    }

    .thumbnails img:hover {
      border-color: #e91e63;
    }

    .product-details {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .product-details h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .price {
      color: #e91e63;
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .stock {
      color: #28a745;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .description {
      color: #555;
      font-size: 1rem;
      margin-bottom: 20px;
    }

    .quantity-section {
      margin-bottom: 20px;
    }

    .quantity-section label {
      font-weight: bold;
    }

    .quantity-section input {
      width: 60px;
      margin-left: 10px;
      padding: 5px;
    }

    .total-price {
      font-weight: bold;
      margin-bottom: 20px;
    }

  .add-to-cart {
    background-color: #e91e63;
    color: white;
    border: none;
    padding: 15px 25px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
  }

    .add-to-cart:hover {
      background-color: #d81b60;
    }

    @media (max-width: 768px) {
      .product-container {
        flex-direction: column;
        align-items: center;
      }

      .product-details {
        align-items: center;
        text-align: center;
      }

      .thumbnails {
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <div class="product-container">
    <div class="product-gallery">
      <div class="main-image">
        <img id="mainPreview" src="product-image/f1.jpg" alt="Main Product">
      </div>
      <div class="thumbnails">
        <img src="product-image/f1.jpg" onclick="changeImage(this)" alt="Thumbnail 1">
        <img src="product-image/f2.jpg" onclick="changeImage(this)" alt="Thumbnail 2">
        <img src="product-image/f3.jpg" onclick="changeImage(this)" alt="Thumbnail 3">
      </div>
    </div>

    <div class="product-details">
      <h1>Elegant Summer Dress</h1>
      <p class="price">$49.99 each</p>
      <p class="stock" id="stockStatus">In Stock: 10</p>
      <p class="description">
        This elegant summer dress is perfect for casual outings and special occasions. Made from breathable fabric and available in various sizes.
      </p>

      <div class="quantity-section">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" value="1" min="1" max="10" onchange="updateTotal()" />
      </div>

      <!-- <p class="total-price" id="totalPrice">Total: $49.99</p> -->
     <span><strong class="price  fw-bold fs-5" id="totalPrice">Total: 29.99</strong><i class="price" style="font-size:20px">৳</i></span>
      <a href="check-out.php" class="add-to-cart mt-2">Buy Now</a>
    </div>
  </div>

  <script>
    function changeImage(thumbnail) {
      const mainImg = document.getElementById("mainPreview");
      mainImg.src = thumbnail.src;
    }

    const unitPrice = 49.99;
    const stock = 10;

    function updateTotal() {
      const qtyInput = document.getElementById("quantity");
      let quantity = parseInt(qtyInput.value);

      if (isNaN(quantity) || quantity < 1) {
        quantity = 1;
        qtyInput.value = 1;
      } else if (quantity > stock) {
        quantity = stock;
        qtyInput.value = stock;
      }

      const total = (unitPrice * quantity).toFixed(2);
      document.getElementById("totalPrice").innerText = `Total: ${total}`;
    }

    // Ensure price updates on page load
    window.onload = updateTotal;
  </script>
</body>
</html>
