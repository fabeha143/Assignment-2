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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5"> 
                <h4>MY CART</h4>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                        $total = 0;
                        if(isset($_SESSION['cart'])){

                            foreach($_SESSION['cart'] as $key => $value){
                                $num = $key+1;
                                $total = $total + $value['item_price'];
                                echo 
                                "<tr>
                                    <td>$num</td>
                                    <td>$value[item_name]</td>
                                    <td>$value[item_price]</td>
                                    <td><input class = 'text-center 'type='number' value ='$value[Quantity]' min = '1' max = '10'></td>
                                    <td>
                                    <form action='managecart.php' method='POST'>
                                        <button name='remove' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name= 'item_name' value='$value[item_name]'>
                                    </form>
                                    </td>
                                </tr>";
                            }
                        }
                        
                        ?>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>Total : </h4>
                    <h5><?php echo $total?></h5>
                    <form method="post">
                    <button name = "orderconfirm" class="btn btn-primary btn-block" >Order confirm</button>
                    <?php
                    if(isset($_POST['orderconfirm'])){

                        if(count(($_SESSION['cart'])) > 0){
                            header('location:confirm_order.php');
                        }
                        else{
                            echo '<script>alert("please add atleast 1 item")</script>';
                        }
                    }
                        
                        ?>
                    </form>
                </div>
            </div>

        </div>
    </div>

  </body>
</html>