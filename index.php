<?php include_once 'header.php'; ?>
<style>
  .carousel-image {
    height: 400px;
    object-fit: cover;
  }

  @media (max-width: 768px) {
    .carousel-image {
      height: 250px;
    }
  }

  @media (max-width: 576px) {
    .carousel-image {
      height: 180px;
    }
  }

  .product-image-wrapper {
    width: 100%;
    height: 250px;
    /* Uniform height */
    overflow: hidden;
  }

  .product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Makes sure the image fills the box and crops excess */
  }

  @media (max-width: 768px) {
    .product-image-wrapper {
      height: 200px;
    }
  }

  @media (max-width: 576px) {
    .product-image-wrapper {
      height: 160px;
    }
  }
</style>
<main>
  <section class="py-5">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="product-image/b1.jpeg" class="d-block w-100 img-fluid carousel-image" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="product-image/b2.jpg" class="d-block w-100 img-fluid carousel-image" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="product-image/b3.jpg" class="d-block w-100 img-fluid carousel-image" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img src="product-image/b4.jpg" class="d-block w-100 img-fluid carousel-image" alt="Fourth slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>


  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f1.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f2.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f3.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f4.png" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f5.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f6.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="product-image-wrapper">
              <img src="product-image/f7.jpg" class="card-img-top product-image" alt="Product Name">
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text text-muted small">A short and clear product description that tells the customer what it's about.</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-primary">$29.99</span>
                </div>
                <button class="btn btn-sm btn-success w-100">Buy Now</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Sign UP MODEL START -->
  <!-- Modal -->
  <div class="modal fade" id="registarNewAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Register New Account</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" autocomplete="off">
          <div class="modal-body">
            <label for="inputName" class="form-label">Your Full Name</label>
            <input type="text" id="inputName" class="form-control" name="name" Placeholder="write your full name..." required>

            <label for="inputEmail" class="form-label">Email Address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" Placeholder="write your full email ex: youname@gmail.com" required autocomplete="off">

            <label for="inputPhone" class="form-label">Phone Number</label>
            <input type="number" id="inputPhone" class="form-control" name="phone" Placeholder="write your phone number ex: 8801XXXXXXXXX" required>

            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" id="inputAddress" class="form-control" name="address" Placeholder="write your address...">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="radioDefault1" required>
              <label class="form-check-label" for="radioDefault1">
                AS A FARMER
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="radioDefault2" required>
              <label class="form-check-label" for="radioDefault2">
                AS A STUDENT (PART-TIME-JOB)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="radioDefault2" required>
              <label class="form-check-label" for="radioDefault2">
                AS A CUSTOMER
              </label>
            </div>

            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
            <div id="passwordHelpBlock" class="form-text">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
            <label for="inputCPassword5" class="form-label">Confirm Password</label>
            <input type="password" id="inputCPassword5" class="form-control" aria-describedby="CpasswordHelpBlock" required>
            <div id="passwordHelpBlock" class="form-text">
              Your confirm password must matched with password!
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Registar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Sign UP MODEL END -->
  <!-- Sign IN MODEL START -->
  <div class="modal fade" id="signInAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signInAccountLable" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="signInAccountLable">Sign Into Account</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" autocomplete="off">
          <div class="modal-body">
            <label for="inputEmail" class="form-label">Email Address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" Placeholder="write your full email ex: youname@gmail.com" required autocomplete="off">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Sign IN MODEL END -->


</main>
<?php include_once 'footer.php'; ?>