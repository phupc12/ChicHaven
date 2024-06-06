<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Checkout</h1>
        </div>
      </div>
      <div class="col-lg-7">
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section before-footer-section">
  <div class="container">
    <div class="row">
    <?php
      if(isset($_SESSION['user'])){
        extract($_SESSION['user']);
        if(array_key_exists('rol', $_SESSION['user']) && $_SESSION['user']['rol'] == 1){
          echo '<div class="col-md-7 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Chi tiết vận chuyển</h2>
          <div class="p-3 p-lg-5 border">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Họ Tên  <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" value="'.$name.'" placeholder="Họ tên của bạn" required>
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" value="'.$address.'" placeholder="Địa chỉ của bạn" required>
                </div>
              </div>
  
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email_address" name="c_email_address" value="'.$email.'" placeholder="Email của bạn" required>
  
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" value="'.$phone.'" placeholder="Số điện thoại của bạn" required>
                </div>
              </div>
            </form>
          </div>
        </div>';
        } else {
          echo '<div class="col-md-7 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Chi tiết vận chuyển</h2>
          <div class="p-3 p-lg-5 border">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Họ Tên  <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname" value="'.$name.'" placeholder="Họ tên của bạn" required>
                </div>
                
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" value="'.$address.'" placeholder="Địa chỉ của bạn" required>
                </div>
              </div>
  
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email_address" name="c_email_address" value="'.$email.'" placeholder="Email của bạn" required>
  
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" value="'.$phone.'" placeholder="Số điện thoại của bạn" required>
                </div>
              </div>
            </form>
          </div>
        </div>';
        }
      } else {
        echo '<div class="col-md-7 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">Chi tiết vận chuyển</h2>
        <div class="p-3 p-lg-5 border">
          <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_fname" class="text-black">Họ Tên  <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname" value="" placeholder="Họ tên của bạn" required>
              </div>
              
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Địa chỉ <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_address" name="c_address" value="" placeholder="Địa chỉ của bạn" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email_address" name="c_email_address" value="" placeholder="Email của bạn" required>

              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Số điện thoại <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" name="c_phone" value="" placeholder="Số điện thoại của bạn" required>
              </div>
            </div>
          </form>
        </div>
      </div>';
      }
    ?>
      <div class="col-md-5">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Đơn hàng của bạn</h2>
            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>Sản phẩm</th>
                  <th>Tổng cộng</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Product 1 <strong class="mx-2">x</strong> 1</td>
                    <td>$49.00</td>
                  </tr>
                  <tr>
                    <td>Product 2 <strong class="mx-2">x</strong> 1</td>
                    <td>$49.00</td>
                  </tr>
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Tổng phụ của giỏ hàng</strong></td>
                    <td class="text-black">$98.00</td>
                  </tr>
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Tổng số đơn hàng</strong></td>
                    <td class="text-black font-weight-bold"><strong>$98.00</strong></td>
                  </tr>
                </tbody>
              </table>

              <div class="border p-3 mb-3">
                <h3 class="h6 mb-0">
                  <a class="d-block" data-toggle="collapse" href="#collapsecod" role="button" aria-expanded="false" aria-controls="collapsecod">
                    Thanh toán khi nhận hàng
                  </a>
                </h3>
                <div class="collapse" id="collapsecod">
                  <div class="py-2">
                    <p class="mb-0">Thanh toán bằng tiền mặt khi giao hàng.</p>
                  </div>
                </div>
              </div>

              <div class="border p-3 mb-5">
                <h3 class="h6 mb-0">
                  <a class="d-block" data-toggle="collapse" href="#collapsemomo" role="button" aria-expanded="false" aria-controls="collapsemomo">
                    Thanh toán qua Momo
                  </a>
                </h3>
                <div class="collapse" id="collapsemomo">
                  <div class="py-2">
                    <p class="mb-0">Pay via Momo; you will be redirected to Momo to complete your purchase.</p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button class="btn btn-black btn-lg py-3 btn-block">Place Order</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>