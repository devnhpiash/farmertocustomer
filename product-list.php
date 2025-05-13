<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product List</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

body {
  background-color: #f5f5f5;
}

header {
  background-color: #333;
  color: white;
  padding: 1rem;
  text-align: center;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  padding: 2rem;
}

.product-card {
  background: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  transition: transform 0.2s;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-image img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-details {
  padding: 1rem;
}

.product-details h2 {
  font-size: 1.1rem;
  margin-bottom: 0.5rem;
}

.product-details p {
  color: #777;
  margin-bottom: 1rem;
}

.product-details .price {
  font-weight: bold;
  color: #000;
}

button {
  padding: 0.5rem 1rem;
  background-color: #28a745;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #218838;
}

  </style>
</head>
<body>

  <header>
    <h1>ShopNow</h1>
  </header>

  <main class="product-grid">
    <!-- Product cards will be dynamically added -->
  </main>

  <script>
    const products = [
  {
    id: 1,
    name: "Wireless Headphones",
    price: "$99.99",
    image: "https://via.placeholder.com/300x200?text=Headphones"
  },
  {
    id: 2,
    name: "Smartphone",
    price: "$499.99",
    image: "https://via.placeholder.com/300x200?text=Smartphone"
  },
  {
    id: 3,
    name: "Running Shoes",
    price: "$59.99",
    image: "https://via.placeholder.com/300x200?text=Shoes"
  },
  {
    id: 4,
    name: "Smartwatch",
    price: "$149.99",
    image: "https://via.placeholder.com/300x200?text=Smartwatch"
  }
];

const productGrid = document.querySelector(".product-grid");

products.forEach(product => {
  const card = document.createElement("div");
  card.className = "product-card";
  card.innerHTML = `
    <div class="product-image">
      <img src="${product.image}" alt="${product.name}" />
    </div>
    <div class="product-details">
      <h2>${product.name}</h2>
      <p class="price">${product.price}</p>
      <button>Add to Cart</button>
    </div>
  `;
  productGrid.appendChild(card);
});

  </script>
</body>
</html>
