<?php
    if(isset($_SESSION['user']))
        extract($_SESSION['user']);
?>
<div class="container">
    <h2 style="font-size: 23px;">Xin chào, <a style="color: red; font-size: 33px;"><?=$name?><span style="color: black;">!</span></a></h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tổng số sản phẩm</h3>
                    <p class="card-text"><?php echo $total_products; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Total Orders</h3>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tổng số khách hàng</h3>
                    <p class="card-text"><?php echo $total_users; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
