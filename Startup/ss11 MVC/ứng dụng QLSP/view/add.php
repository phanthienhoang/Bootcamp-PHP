<?php
if(isset($message)){
  echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Thêm mới sản phẩm</h1>
      </div>
      <div class="col-12">
          <form method="post">
              <div class="form-group">
                  <label>Mã sản phẩm</label>
                  <input type="text" class="form-control" name="productID" required>
              </div>
              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" class="form-control" name="productName" required>
              </div>
              <div class="form-group">
                  <label>Dòng sản phẩm</label>
                  <input type="text" class="form-control" name="productLine" required>
              </div>
              <div class="form-group">
                  <label>Nhà sãn xuất</label>
                  <input type="text" class="form-control" name="productVendor"  required>
              </div>
              <div class="form-group">
                  <label>Mô tả</label>
                  <input type="text" class="form-control" name="Description" required>
              </div>
              <div class="form-group">
                  <label>Số lượng</label>
                  <input type="smallint" class="form-control" name="quantity" required>
              </div>
              <div class="form-group">
                  <label>giá nhập</label>
                  <input type="decimal" class="form-control" name="buy" required>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>       
     </div>   
   </div> 
</div> 