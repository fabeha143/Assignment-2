<?php
    include('header.php');
    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
   
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-lg-3">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="images/a52.png" class="card-img-top" alt="samsung A72">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Samsung A52</h5>
                            <p class="card-text">Price: Rs 50,000</p>
                            <button type= "submit" class="btn btn-info" name="addcart">Add to Cart</button>
                            <input type="hidden" name= "item-name" value="Samsung A72">
                            <input type="hidden" name= "item-price" value="69000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="images/a32.png" class="card-img-top" alt="samsung A72">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Samsung A32</h5>
                            <p class="card-text">Price: Rs 40,000</p>
                            <button type= "submit" class="btn btn-info" name="addcart">Add to Cart</button>
                            <input type="hidden" name= "item-name" value="Samsung A32">
                            <input type="hidden" name= "item-price" value="40000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="images/a51.jpg" class="card-img-top" alt="samsung A72">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Samsung A51</h5>
                            <p class="card-text">Price: Rs 32,000</p>
                            <button type= "submit" class="btn btn-info" name="addcart">Add to Cart</button>
                            <input type="hidden" name= "item-name" value="Samsung A32">
                            <input type="hidden" name= "item-price" value="40000">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="images/a32.png" class="card-img-top" alt="samsung A72">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Samsung A32</h5>
                            <p class="card-text">Price: Rs 40,000</p>
                            <button type= "submit" class="btn btn-info" name="addcart">Add to Cart</button>
                            <input type="hidden" name= "item-name" value="Samsung A32">
                            <input type="hidden" name= "item-price" value="40000">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>