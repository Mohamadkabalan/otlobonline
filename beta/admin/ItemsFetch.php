<?php
include("config.php");
$CategoryID=mysqli_escape_string($con,trim($_GET['CategoryID']));
$SubCategoryID=mysqli_escape_string($con,trim($_GET['SubCategoryID']));
$brandID=mysqli_escape_string($con,trim($_GET['brandID']));
$key=mysqli_escape_string($con,trim($_GET['key']));
$query="SELECT items.id,items.name,items.price,items.discount,items.text,items.OutOfStock,items.NewArrival, items.NewArrivalStopDate, items.discountStopDate,items.brandID,itemimages.id as mainImageID,itemimages.link 
FROM items 
inner join itemimages on items.ID=itemimages.itemID
where 1 ";

if($CategoryID > 0){
    $query.=" and items.category_ID=".$CategoryID;
}

if($SubCategoryID > 0){
    $query.=" and items.subCategory_ID=".$SubCategoryID;
}
$query .=" and itemimages.main=1";
if($brandID > 0){
    $query.=" and items.brandID=".$brandID;
}
if(strlen($key) > 3){
    $query.=" and ( lower(items.name) like lower('%$key%') or lower(items.text) like lower('%$key%') )";
}
$result = $con->query($query);
$i=0;
while($row = $result->fetch_array()) {
    $response[$i]['itemID']=$row['id'];
    $response[$i]['ItemName']=$row['name'];
    $response[$i]['originItemPrice'] = $row['price'];
    $response[$i]['NewItemPrice'] =$row['price'] - ($row['price'] * $row['discount']) / 100 ;
    $response[$i]['ItemDiscount']=$row['discount'];
    $response[$i]['ItemDesc']=$row['text'];
    $response[$i]['OutOfStock']=$row['OutOfStock'];
    $response[$i]['ItemImage']=$row['link'];
    $response[$i]['NewArrival']=$row['NewArrival'];
    $response[$i]['NewArrivalStopDate']=$row['NewArrivalStopDate'];
    $response[$i]['discountStopDate']=$row['discountStopDate'];
    $response[$i]['mainImageID']=$row['mainImageID'];
    $response[$i]['brandID']=$row['brandID'];

    $query2="Select * from itemscolor where itemID=".$row['id'];
    $result2 = $con->query($query2);
    $j=0;
    $itemsArray=array();
    while($row2 = $result2->fetch_array()) {
        $itemArray=array('color' => $row2['color']);
        array_push($itemsArray,$itemArray);
        $j+=1; }
    $response[$i]['itemColors']=$itemsArray;

    $query3="Select * from itemimages where itemID=".$row['id']." and main=0";
    $result3= $con->query($query3);
    $k=0;
    $imagesArray=array();
    while($row3 = $result3->fetch_array()) {
        $imageArray=array('imageID'=>$row3['id'],'image' => $row3['link']);
        array_push($imagesArray,$imageArray);
        $k+=1; }
    $response[$i]['images']=$imagesArray;

    $query4="SELECT * FROM `colors` order by color asc";
    $result4= $con->query($query4);
    $k=0;
    $generalColorsArray=array();
    while($row4 = $result4->fetch_array()) {
        $generalColorArray=array('generalColorID'=>$row4['id'],'generalColor' => $row4['color']);
        array_push($generalColorsArray,$generalColorArray);
        $k+=1; }
    $response[$i]['generalColors']=$generalColorsArray;

    $query5="SELECT * FROM `brands` order by brand asc";
    $result5= $con->query($query5);
    $k=0;
    $generalBrandsArray=array();
    while($row5 = $result5->fetch_array()) {
        $generalBrandArray=array('generalBrandID'=>$row5['id'],'generalBrand' => $row5['brand']);
        array_push($generalBrandsArray,$generalBrandArray);
        $k+=1; }
    $response[$i]['generalBrands']=$generalBrandsArray;



    $i+=1; }


echo json_encode(array("response"=>$response));
?>