<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <title>Home Page - Product Showcase</title>
</head>

<body>
  <div class="container" style="margin-top:30px">
    <!-- Products Section -->
    <!-- Backend Team !!! here is where you will add the products from the database -->
    <div class="row">
      <!-- Product 1 -->
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="placeholder-image-1.jpg" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Description for Product 1.</p>
            <p class="card-text">$19.99</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="https://images.ctfassets.net/ub3bwfd53mwy/5WFv6lEUb1e6kWeP06CLXr/acd328417f24786af98b1750d90813de/4_Image.jpg?w=750" alt="Product 6">
          <div class="card-body text-center">
            <h5 class="card-title">Cat</h5>
            <p class="card-text">Cute Cat</p>
            <p class="card-text">Not To Sale</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>

</html>