<?php
include_once "database/DB.php";
include_once "BaseModel.php";
class ProductModel extends BaseModel
{
    protected $table = "products";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`sectors`,`price`,`quantity`,`current`,`description`) VALUE(?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["sectors"]);
        $stmt->bindParam(3, $data["price"]);
        $stmt->bindParam(4, $data["quantity"]);
        $stmt->bindParam(5, $data["current"]);
        $stmt->bindParam(6, $data["description"]);
        $stmt->execute();
    }

    public function edit($data)
    {
        try {
            $sql = "UPDATE $this->table SET `name`= ?,`sectors`= ?,`price`=?,`quantity`=?,`current`=?,`description`=? WHERE `id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindParam(1, $data["name"]);
            $stmt->bindParam(2, $data["sectors"]);
            $stmt->bindParam(3, $data["price"]);
            $stmt->bindParam(4, $data["quantity"]);
            $stmt->bindParam(5, $data["current"]);
            $stmt->bindParam(6, $data["description"]);
            $stmt->bindParam(8, $data["id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}