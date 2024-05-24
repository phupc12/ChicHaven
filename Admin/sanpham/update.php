
<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Cập Nhật  Loại Sản Phẩm</h1>
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="product_code" class="form-label">Mã Sản Phẩm</label>
            <input type="text" class="form-control" id="product_id" name="masp" disabled>
        </div>  
        <div class="mb-3">
            <label for="product_name" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="product_name" name="tensp" required>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Giá Sản Phẩm</label>
            <input type="text" class="form-control" id="product_price" name="giasp" required>
        </div>
        <div class="mb-3">
            <label for="product_picture" class="form-label">Hình Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="product_picture" name="anhsp" required>
        </div>
        <div class="mb-3">
            <label for="product_mota" class="form-label">Mô Tả Sản Phẩm</label>
            <textarea name="mota" id="" rows="10"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="submit" name="capnhat" class="btn btn-primary btn-lg w-100">Cập nhật</input>
            </div>
            <div class="col-md-6 mb-3">
                <input type="reset" class="btn btn-secondary btn-lg w-100">Nhập Lại</input>
            </div>
        </div>
                <a href="index.php?act=listsp"  class="btn btn-outline-primary btn-lg w-100"><input type="button" value="Danh Sách"></a>
        <?php 
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
        ?>
    </form>
</div>
