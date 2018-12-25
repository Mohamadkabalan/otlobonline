<?php
include("admin/config.php");
session_start();
if(!empty($_SESSION['userName'])){ ?>
    <ul class="header-cart-wrap">
        <?php

        $clientID=$_SESSION['userID'];
        $stmt = $con->prepare("SELECT * FROM orders WHERE ClientID = ? AND Status ='Pending'");
        $stmt->bind_param("i",$clientID);
        $stmt->execute();
        $result = $stmt->get_result();
        $count=$result->num_rows;
        $row = $result->fetch_array();
        $orderID=$row['ID'];
        $stmt->close();
        $result = $con->query("SELECT items.id,items.name,items.price,items.discount,items.discountStopDate,order_item.quantity,order_item.color,itemimages.link FROM `order_item` 
inner join items on order_item.item_ID=items.id
inner join itemimages on items.id=itemimages.itemID
WHERE `order_ID`='$orderID' and itemimages.main=1");
        $countItems=$result->num_rows;
        $currentDate=date("Y-m-d");
        ?>
        <li><a class="cart" href="#">My Order: <?php echo $countItems; ?>  items</a>
            <div class="mini-cart-content">
                <div class="cart-products-list">
                    <?php
                    $subTotal=0;
                    while( $row = $result->fetch_array()){
                        list($itemsID,$name,$price,$discount,$discountStopDate,$quantity,$color,$link)=$row;
                        if($currentDate > $discountStopDate){
                            $discount=0;
                        }
                        $finalItemPrice=$price - ($price * $discount/100);
                        $subTotal+=$finalItemPrice *$quantity;
                        ?>
                        <div class="sing-cart-pro">
                            <div class="cart-image">
                                <a href="#"><img src="admin/<?=$link; ?>" style="width:60px;height: 70px;" alt=""></a>
                            </div>
                            <div class="cart-product-info">
                                <a href="#" class="product-name"> <?= $name; ?> </a>
                                <div class="cart-price">
                                    <span class="quantity"><strong> <?=$quantity ?> x</strong></span>
                                    <span class="p-price">$ <?=$finalItemPrice;?></span>
                                </div>
                                <a data-itemid="<?=$itemsID;?>" data-orderid="<?=$orderID;?>" class="remove-pro removeItem" title="remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="cart-price-list">
                    <p class="price-amount"><span class="cart-subtotal">SUBTotal :</span> <span>$ <?=$subTotal;?></span> </p>

                    <div class="view-cart">
                        <a href="myorders.php">View Order</a>
                    </div>
                </div>
            </div>
        </li>
    </ul> <?php } ?>