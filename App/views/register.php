  <!-- Start Registration Section -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2 class="mb-4 text-center">Đăng ký</h2>
        <form action="index.php?act=register" method="post">
          <div class="mb-3">
            <label for="registerName" class="form-label">Tên đăng nhập</label>
            <input type="text" name="name" class="form-control" id="registerName" placeholder="Nhập tên của bạn">
          </div>
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Địa chỉ email</label>
            <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Nhập emal của bạn">
          </div>
          <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="registerPassword" placeholder="Nhập mật khẩu của bạn">
          </div>
          <div class="mb-3">
            <label for="registerPassword" class="form-label">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" id="registerPassword" placeholder="Nhập số điện thoại của bạn">
          </div>
            <div class="mb-3">
            <label for="registerConfirmPassword" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control" id="registerConfirmPassword" placeholder="Nhập địa chỉ của bạn">
          </div>
          <div class="d-grid">
            <button type="submit" value="Đăng ký" name="dangky" class="btn btn-primary">Đăng ký</button>
          </div>
          <p class="mt-3 text-center">Bạn đã có tài khoản? <a href="index.php?act=login">Đăng nhập</a></p>
        </form>
        <h6 style="color: red;">
        <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
        </h6>
      </div>
    </div>
  </div>
  <!-- End Registration Section -->