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
        <div class="card-deck">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top img-fluid"
                        src="https://as1.ftcdn.net/v2/jpg/05/74/71/58/1000_F_574715888_LiZAHCkvCscmHXoIHD3trv0WKADo7gSq.jpg"
                        alt="Product 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description for Product 1.</p>
                        <p class="card-text">$19.99</p>
                        <button class="btn mt-auto">
                            <span>KØB</span> <!-- The original text -->
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card">


                    <img class="card-img-top"
                        src="https://images.ctfassets.net/ub3bwfd53mwy/5WFv6lEUb1e6kWeP06CLXr/acd328417f24786af98b1750d90813de/4_Image.jpg?w=750"
                        alt="Product 6">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cat</h5>
                        <p class="card-text">Cute Cat</p>
                        <p class="card-text">1$</p>
                        <button class="btn">
                            <span>KØB</span>
                        </button>

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