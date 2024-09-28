<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- main css -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <!-- Nav bar -->
    <?php include('header.php') ?>

    <!-- cart -->
     <section class="cart container my-5 py-3">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/brand1.jpg" alt="">
                        <div class="products-list">
                            <p>White crystal</p>
                            <small><span>$</span>13.99</small>
                            <br>
                            <a class="remove-tbn" href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="1">
                    <a href="" class="edit-btn">Edit</a>

                </td>
                <td>
                    <span>$</span>
                    <span class="price">13.33</span>
                </td>
            </tr>

        </table>

        <div  class="cart-total" >
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$13.33</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$13.33</td>
                </tr>
            </table>
            
        </div>

        <div class="checkout-container">
            <button class="btn checkout-btn">Check out</button>
        </div>

     </section>

      
    <!-- footer -->
    <?php include('footer.php'); ?>


</body>
<!-- main js -->
<script src="assets/script.js"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>