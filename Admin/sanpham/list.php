<div class="container mt-5">
    <h1 class="text-center mb-4">Danh sách danh mục</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll">
                        <label class="form-check-label" for="selectAll">Chọn tất cả</label>
                    </div>
                    <span>Mã Sản Phẩm</span>
                    <span>Mã hàng hóa</span>
                    <span>Tên Sản Phẩm</span>
                    <span>Hình</span>
                    <span>Giá</span>
                    <span>Lượt xem</span>
                    <span>Thao tác</span>
                </li>
                <!-- Example category items -->
                
     
                <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    echo '<li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="category1">
                    </div>
                    <span>'.$id.'</span>
                    <span>'.$category_id.'</span>
                    <span>'.$description.'</span>
                    <span>'.$luotxem.'</span>
                    <span>'.$image_url.'</span>
                    <span>'.$created_at.'</span>
                    <div>
                    <button type="button" class="btn  btn-sm me-2"><a href="'.$suasp.'">Sửa</a></button>
                    <button type="button" class="btn-sm"><a href="'.$xoasp.'">Xóa</a></button>
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                </li>';
                }
                ?>
                </li>
                
            </ul>
        </div>
    </div>
</div>
