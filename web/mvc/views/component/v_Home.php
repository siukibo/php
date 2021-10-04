

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                        <!--  Product -->   
                         <?php
                            
                            foreach($data_latest as $row)
                            {
                         ?>
                        <div class="single-product">
                                <div class="product-f-image" style=" width: 212px; height: 265px; ">
                                    <img src="img/<?= $row["image"]?>" alt="" >
                                    <div class="product-hover">
                                        <a href="?module=cart&act=add&masp=<?=$row['id_product']?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?module=single-product&masp=<?=$row['id_product']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?module=single-product&masp=<?=$row['id_product']?>"><?= $row["name"]?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?= $row["price"]?></ins> <del><!-- $100.00--></del>
                                </div> 
                        </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list" >

                            <?php
                                foreach($icon_brand as $row)
                                {
                                    echo "<img src='img/".$row['image']."' alt='' style='height: auto; 
                                    width: auto; 
                                    max-width: 270px; 
                                    max-height: 120px;'>";
                                    
                                }
                            ?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php 
                                foreach($top_seller as $row){
                        ?>
                            <div class="single-wid-product">
                            <a href="?module=single-product&masp=<?=$row['id_product']?>"><img src="img/<?=$row['image']?>" alt="" class="product-thumb"></a>
                            <h2><a href="?module=single-product&masp=<?=$row['id_product']?>"><?=$row["name"]?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?=$row["price"]?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <?php
                                }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php 
                                foreach($top_new as $row){
                        ?>
                            <div class="single-wid-product">
                            <a href="?module=single-product&masp=<?=$row['id_product']?>"><img src="img/<?=$row['image']?>" alt="" class="product-thumb"></a>
                            <h2><a href="?module=single-product&masp=<?=$row['id_product']?>"><?=$row["name"]?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?=$row["price"]?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
