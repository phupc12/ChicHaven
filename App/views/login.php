  <!-- Start Login Section -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2 class="mb-4 text-center">Đăng nhập</h2>
        <form action="index.php?act=login" method="post">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Tên đăng nhập</label>
            <input type="text" name="name" class="form-control" id="loginEmail" placeholder="Nhập tên của bạn">
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Mật khẩu</label>
            <input type="password" name="pass" class="form-control" id="loginPassword" placeholder="Nhập mật khẩu của bạn">
          </div>
          <div class="d-grid">
            <button type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
          </div>
          <p class="mt-3 text-center">Bạn chưa có tài khoản? <a href="index.php?act=register">Đăng ký</a></p>
        </form>
        <h6 style="color: red">
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </h6>
      </div>
</div>
  </div>
  <!-- End Login Section -->