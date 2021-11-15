<div>
    <h3>Chỉnh sửa mặt hàng</h3>
    <form action=""method="post">
        Tên hàng:  <input type="text" placeholder="tên hàng" value="<?php echo $product['name']?>">
        Loại hàng: <input type="text" placeholder="loại hàng" value="<?php echo $product['sectors']?>">
        Giá:       <input type="text" placeholder="giá" value="<?php echo $product['price']?>">
        Số lượng:  <input type="text" placeholder="số lượng" value="<?php echo $product['quantity']?>">
        Mô tả:     <input type="text" placeholder="mô tả" value="<?php echo $product['description']?>">

        <button class="btn btn-success" type="submit">Chỉnh sửa</button>
        <button class="btn btn-danger" size="10px"><a href="index.php">Thoát</a></button>
    </form>
</div>
