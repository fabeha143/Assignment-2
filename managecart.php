<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['addcart'])){
            if(isset($_SESSION['cart'])){

                $myitems = array_column($_SESSION['cart'], 'item-name');

                if(in_array($_POST['item-name'],$myitems)){
                    echo "<script> 
                        alert('Item exist')
                        window.location.href = 'index.php'
                        </script>";
                }
                else{

                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('item_name' =>$_POST['item-name'] , 'item_price' =>$_POST['item-price'], 'Quantity'=>1);
                    echo "<script> 
                            alert('Item added')
                            window.location.href = 'index.php'
                            </script>";
                }
                
            }
            else{
                $_SESSION['cart'][0] = array('item_name' =>$_POST['item-name'] , 'item_price' =>$_POST['item-price'], 'Quantity'=>1);
                echo "<script> 
                        alert('Item added')
                        window.location.href = 'index.php'
                        </script>";
            }
        }
        if(isset($_POST['remove'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['item_name'] == $_POST['item_name']){

                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>
                        alert('Item Removed');
                        window.location.href = 'mycart.php'
                    </script>";
                }
            }
        }
    }

?>