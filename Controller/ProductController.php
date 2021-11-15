<?php
include_once "Model/ProductModel.php";

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "View/product/list.php";
    }

    public function showFormCreate()
    {
        include_once "View/product/create.php";
    }
    public function create($data)
    {
        $data2 = [
            "name" => $data['name'],
            "sectors" => $data['name'],
            "price" => $data['name'],
            "quantity" => $data['name'],
            "current" => $data['name'],
            "description" => $data['desc']
        ];
        $this->productModel->create($data2);
        header("location:index.php");
    }
    public function deleteProduct($id)
    {
        if ($this->productModel->getById($id) !== null) {
            $this->productModel->delete($id);
            header("location:index.php");
        }
    }
    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "View/product/update.php";
    }
    public function editProduct($id,$request)
    {
        $product = $this->productModel->getById($id);
        $data = [
            "name" => $request['name'],
            "price" => $request['price'],
            "description" =>$request['desc'],
            "id" => $id
        ];
        $this->productModel->edit($data);
        header("location:index.php");
    }
}