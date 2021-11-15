<a href="index.php?page=product-create">ADD NEW PRODUCT</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Sectors</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Current</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)) : ?>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product["id"]?></td>
        <td><?php echo $product["name"]?></td>
        <td><?php echo $product["sectors"]?></td>
        <td><?php echo $product["price"]?></td>
        <td><?php echo $product["quantity"]?></td>
        <td><?php echo $product["current"]?></td>
        <td><?php echo $product["description"]?></td>
        <td><a onclick="return confirm('Are you sure??')"
               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
        <td><a href="index.php?page=product-update&id=<?php echo $product["id"] ?>">Edit</a></td>
    </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="5">Không có sản phẩm nào ở đây</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>