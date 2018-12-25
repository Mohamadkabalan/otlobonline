<?php
include("config.php");

$query1="select orders.ID,orders.OrderDate,orders.status,orders.totalPrice,clients.first_name,clients.last_name
from orders 
  inner join clients on orders.ClientID=clients.id
where orders.status='Pending' or orders.status='Processing'
order by orders.OrderDate desc";
$result1 = $con->query($query1);
$i=0;
while($row1 = $result1->fetch_array()) {
    $response[$i]['OrderID']=$row1['ID'];
    $response[$i]['OrderDate']=$row1['OrderDate'];
    $response[$i]['status']=$row1['status'];
    $response[$i]['totalPrice']=$row1['totalPrice'];
    $response[$i]['clientFirstName']=$row1['first_name'];
    $response[$i]['clientLastName']=$row1['last_name'];
    $query2="select order_item.orderItemID,order_item.item_ID,items.name,items.price,items.discount,order_item.quantity,
order_item.color,order_item.size
from order_item 
  inner join items on order_item.item_ID=items.id
where order_item.order_ID=".$row1['ID'];
    $result2 = $con->query($query2);
    $j=0;
    $itemsArray=array();
    while($row2 = $result2->fetch_array()) {
 $itemArray=array('orderItemID' => $row2['orderItemID'],'itemID' =>$row2['item_ID'],'ItemName'=>$row2['name'],'ItemPrice'=>$row2['price'],'ItemDiscount'=>$row2['discount'],'ItemQuantity'=>$row2['quantity'],'ItemColor'=>$row2['color'],'ItemSize'=>$row2['size']);
        array_push($itemsArray,$itemArray);
        $j+=1; }
    $response[$i]['items']=$itemsArray;

    $i+=1; }
echo json_encode(array("response"=>$response));
?>