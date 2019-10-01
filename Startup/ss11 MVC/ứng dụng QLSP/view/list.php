<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
  <thead>
  <tr>
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Dòng sản phẩm</th>
      <th>Nhà sản xuất</th>
      <th>Mô tả</th>
      <th>số lượng</th>
      <th>giá nhập</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($array as $key => $product): ?>
  <tr>

      <td><?php echo $product->productID ?></td>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->productLine ?>
      <td><?php echo $product->productVendor ?></td>
      <td><?php echo $product->Description ?></td>
      <td><?php echo $product->quantity ?></td>
      <td><?php echo $product->buy ?></td>
      <td> <a href="./index.php?page=delete&id=<?php echo $product->productID; ?>" class="btn btn-warning btn-sm">Delete</a></td> 
      <td> <a href="./index.php?page=edit&id=<?php echo $product->productID; ?>" class="btn btn-sm">Update</a></td>  
  <?php endforeach; ?> 
  </tbody>
</table>