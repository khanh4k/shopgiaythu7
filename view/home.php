<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url('webroot/image/slider/img.jpg');">
                <div class="overlay"></div>

            </li>
            <li style="background-image: url(webroot/image/slider/cover-img-1.jpg);">
                <div class="overlay"></div>

            </li>
            <li style="background-image: url(webroot/image/slider/img-2.jpg);">
                <div class="overlay"></div>

            </li>
        </ul>
    </div>
</aside>



<div class="colorlib-product">
    <div class="container">
        <div class="row">
        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>SẢN PHẨM NỔI BẬT</h2>
            </div>
        </div>
        <?php
 $product=featuredProductsL4();
?>


        <div class="container ">
            <div class="row wrapper-dt">
                <div class="col-12">
                    <div class="row pad-dt">
                        <div class="row pad-dt"><?php while( $row=mysqli_fetch_array($product)){ ?>
                            <div class="col-3 col-dt">
                                <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>">
                                    <div class="item">
                                        <div class="product-lable">
                                            <?php $price_sale=price_sale($row['MaSP'],$row['DonGia']); if($price_sale < $row['DonGia']) { 
                      echo '<span>Giảm '.number_format( $row['DonGia'] - $price_sale).'đ </span>';}?>
                                        </div>
                                        <div><img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>"></div>
                                        <div class="item-name">
                                            <p> <?php echo $row['TenSP']; ?> </p>
                                        </div>
                                        <div class="item-price">
                                            <p> <?php echo number_format($price_sale,0).'đ'; ?> </p>
                                            <h6> <?php if(number_format($row['DonGia']) !== number_format($price_sale)) {echo number_format($row['DonGia']).'đ';} ;  ?>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div><?php }  ?>
                            <div id="data_sp"></div>
                        </div>
                    </div>
                </div>
                <div id="loading" style="display:none">
                    <img src="webroot/image/loader.gif" alt="Loading..." />
                </div>
            </div>
        </div>

    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>SẢN PHẨM MỚI</h2>
            </div>
        </div>
        <?php
 $product=newsProductsL4();
?>


        <div class="container ">
            <div class="row wrapper-dt">
                <div class="col-12">
                    <div class="row pad-dt">
                        <div class="row pad-dt"><?php while( $row=mysqli_fetch_array($product)){ ?>
                            <div class="col-3 col-dt">
                                <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>">
                                    <div class="item">
                                        <div class="product-lable">
                                            <?php $price_sale=price_sale($row['MaSP'],$row['DonGia']); if($price_sale < $row['DonGia']) { 
                      echo '<span>Giảm '.number_format( $row['DonGia'] - $price_sale).'đ </span>';}?>
                                        </div>
                                        <div><img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>"></div>
                                        <div class="item-name">
                                            <p> <?php echo $row['TenSP']; ?> </p>
                                        </div>
                                        <div class="item-price">
                                            <p> <?php echo number_format($price_sale,0).'đ'; ?> </p>
                                            <h6> <?php if(number_format($row['DonGia']) !== number_format($price_sale)) {echo number_format($row['DonGia']).'đ';} ;  ?>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div><?php }  ?>
                            <div id="data_sp"></div>
                        </div>
                    </div>
                </div>
                <div id="loading" style="display:none">
                    <img src="webroot/image/loader.gif" alt="Loading..." />
                </div>
            </div>
        </div>

    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>SẢN PHẨM BÁN CHẠY</h2>
            </div>
        </div>
        <?php
 $product=sellingProductsL4();
?>


        <div class="container ">
            <div class="row wrapper-dt">
                <div class="col-12">
                    <div class="row pad-dt">
                        <div class="row pad-dt"><?php while( $row=mysqli_fetch_array($product)){ ?>
                            <div class="col-3 col-dt">
                                <a href="?view=product-detail&id=<?php echo $row['MaSP'] ?>">
                                    <div class="item">
                                        <div class="product-lable">
                                            <?php $price_sale=price_sale($row['MaSP'],$row['DonGia']); if($price_sale < $row['DonGia']) { 
                      echo '<span>Giảm '.number_format( $row['DonGia'] - $price_sale).'đ </span>';}?>
                                        </div>
                                        <div><img src="webroot/image/sanpham/<?php echo $row['AnhNen']; ?>"></div>
                                        <div class="item-name">
                                            <p> <?php echo $row['TenSP']; ?> </p>
                                        </div>
                                        <div class="item-price">
                                            <p> <?php echo number_format($price_sale,0).'đ'; ?> </p>
                                            <h6> <?php if(number_format($row['DonGia']) !== number_format($price_sale)) {echo number_format($row['DonGia']).'đ';} ;  ?>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div><?php }  ?>
                            <div id="data_sp"></div>
                        </div>
                    </div>
                </div>
                <div id="loading" style="display:none">
                    <img src="webroot/image/loader.gif" alt="Loading..." />
                </div>
            </div>
        </div>

    </div>
</div>
<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>ĐỐI TÁC TIN CẬY</h2>
            </div>
        </div>

        <div class="row">
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="webroot/image/brand/brand-6.png" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>