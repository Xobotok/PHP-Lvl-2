<?php
include_once '../engine/db.php';
$page = $_POST['page'];
$db = new Database();
$result = $db->getProductsFromTo(24 * $page + 1, 24);
/*foreach ($result as $value) {
    $title = $value['title'];
    $desc = $value['description'];
    $price = $value['price'];
    $image = $value['image'];
    echo "<div class=\"good__item col-lg-4 col-md-6 col-sm-12 col-xs-12\">
    <div class=\"good__item_block\">
    <img src=\"$image\" alt=\"\">
    <h5 class=\"good__item_title\">$title</h5>
<p class=\"good__item_title\">$desc</p>
<h5 class=\"good__item_price\"><b>$price</b></h5>
</div>
</div>";
}*/
echo $result = json_encode($result);


