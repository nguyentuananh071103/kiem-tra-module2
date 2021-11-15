<?php
include_once "Controller/ProductController.php";

$productController = new ProductController();

$page = (isset($_GET["page"])?$_GET["page"]:"");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <a href="index.php?page=product-list">Products</a>
</div>
<?php
switch ($page){
    case "product-list":
        $productController->index();
        break;
    case "product-create":
        if ($_SERVER["REQUEST_METHOD"]== "GET") {

            $productController->showFormCreate();
        } else{

            $productController->create($_REQUEST);
        }
        break;
    case "product-delete":
        $productController->deleteProduct($_REQUEST["id"]);
        break;

    case "product-update":
        $id = $_GET["id"];
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $productController->showFormUpdate();
        } else{
            $productController->editProduct($id,$_REQUEST);
        }

        break;
    default:
        $productController->index();
}
?>
</body>
</html>
