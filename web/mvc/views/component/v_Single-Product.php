    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <?php
                    include('mvc/views/component/inc_Right.php');
                    foreach($data as $row)
                    {
                ?>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href=""><?=$row['catname']?></a>
                            <a href=""><?=$row['name']?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/<?=$row['image']?>" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?=$row['name']?></h2>
                                    <div class="product-inner-price">
                                        <ins><?=$row['price']?></ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        
                                        <button class="add_to_cart_button" type="button" onclick="window.location.href='?module=cart&act=add&masp=<?=$row['id_product']?>'" style="height: 50px;" ><i class="fa fa-shopping-cart"></i> ADD TO CART</button>
                                    </form>   
                                    
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href=""><?=$row['catname']?></a>. Tags: <a href=""><?=$row['catname']?></a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <?=$row['description']?>                                      
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                        ?>
                       
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            <?php
                            foreach($muanhieu as $row)
                            {
                        ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/<?=$row['image']?>" alt="">
                                        <div class="product-hover">
                                            <a href="?module=cart&act=add&masp=<?=$row['id_product']?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="?module=single-product&masp=<?=$row['id_product']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="?module=single-product&masp=<?=$row['id_product']?>"><?=$row['name']?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?=$row['price']?></ins> <del>$100.00</del>
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
        </div>
    </div>

