<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: var(--bs-body-bg);
    }

    .checkout-container {
      max-width: 1140px;
      margin: auto;
    }

    .card {
      border-radius: 12px;
    }

    .form-control, .form-select {
      border-radius: 8px;
    }

    .checkout-btn {
      background-color: #e91e63;
      border: none;
      color: white;
      font-weight: bold;
      padding: 12px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .checkout-btn:hover {
      background-color: #d81b60;
    }

    .order-summary .list-group-item {
      background-color: transparent;
      border: 0;
      padding: 0.5rem 0;
    }

    @media (max-width: 768px) {
      .order-summary {
        margin-top: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="container checkout-container py-5">
    <h2 class="mb-4 text-center">Checkout</h2>
    <div class="row g-4">

      <!-- Billing Info -->
      <div class="col-lg-7">
        <div class="card p-4 shadow-sm h-100">
          <h5 class="mb-3">Billing Information</h5>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" id="firstName" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" id="lastName" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" required>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Street Address</label>
                <input type="text" id="address" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select id="state" class="form-select" required>
                  <option selected disabled>Choose...</option>
                  <option>California</option>
                  <option>Texas</option>
                  <option>New York</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" id="zip" class="form-control" required>
              </div>
            </div>

            <hr class="my-4">

            <h6 class="mb-3">Payment Method</h6>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="payment" id="creditCard" checked>
              <label class="form-check-label" for="creditCard">Credit/Debit Card</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="payment" id="paypal">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </form>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="col-lg-5">
        <div class="card p-4 shadow-sm order-summary">
          <h5 class="mb-3">Your Order</h5>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
              <div><strong>Product A</strong><br><small>Quantity: 2</small></div>
              <span>$40.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div><strong>Product B</strong><br><small>Quantity: 1</small></div>
              <span>$19.99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Shipping</span>
              <span>$5.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between fw-bold">
              <span>Total</span>
              <span>$64.99</span>
            </li>
          </ul>

          <button type="submit" class="checkout-btn w-100">Place Order</button>

          <p class="text-muted mt-3 small text-center">
            By placing your order, you agree to our <a href="#" class="text-decoration-underline">terms</a> and <a href="#" class="text-decoration-underline">privacy policy</a>.
          </p>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
