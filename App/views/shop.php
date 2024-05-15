<!-- Start Hero Section -->
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
                    <?php
                        $i=0;
                        foreach ($spshow as $sp) {
                            extract($sp);
							$linksp="index.php?act=sanphamchitiet&idsp=".$id;
                            $image_url=$img_path.$image_url;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div class="col-12 col-md-4 col-lg-3 mb-5 '.$mr.'">
                                        <a class="product-item" href="'.$linksp.'">
                                            <img src="'.$image_url.'" class="img-fluid product-thumbnail">
                                            <h3 class="product-title">'.$name.'</h3>
                                            <strong class="product-price">$'.$price.'</strong>
                
                                            <span class="icon-cross" onclick="addToCart(' . $id . ')">
                        <img src="App/views/public/images/cross.svg" class="img-fluid">
                    </span>
                                        </a>
                                    </div>';
                                $i+=1;
                        }
                    ?>

					
		      	</div>
		    </div>
		</div>