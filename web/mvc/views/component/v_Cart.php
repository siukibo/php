    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <?php
                    include('mvc/views/component/inc_Right.php');
                ?>
                
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form name="f1" id="f1" method="post" action="?module=cart&act=update">
                                <table cellspacing="0" class="shop_table cart">
                                <?php
                                    $count =0;
                                    if(isset($_SESSION["cart"]))
                                        $count = count($_SESSION["cart"]);//đếm số phần tử của mảng cart
                                    if($count==0)
                                    {
                                    ?>
                                        <h2>Ban khong co mon hang nao trong gio hang</h2>
                                        
                                        <h3><a href="index.php">Mua hàng</a></h3>	
                                    <?php
                                    }
                                    else //count>0
                                    {
                                        //tạo chuỗi chứa danh sách các id của sản phẩm từ giỏ hàng (để SELECT)
                                        $arr = array_keys($_SESSION["cart"]);//lấy ra danh sách các key của mảng cart
                                        $str = implode(",", $arr);//tạo chuỗi chứa các phần tử của mảng ngăn cách bởi dấu phẩy
                                        //tạo đối tượng clsSanpham
                                        $sanpham = new clsSanpham();
                                        
                                        $ketqua = $sanpham->TimTheo_DS_IDSanpham($str);
                                        
                                        if($ketqua==FALSE)
                                        {
                                            echo "<h2>Lỗi hiển thị sản phẩm từ CSDL</h2>";
                                        }
                                        else
                                        {
                                            $total =0;//tổng tiền của tất cả sản phẩm trong giỏ hàng
                                            $rows = $sanpham->data;
                                            
                                        ?>

                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            $subtotal;
                                            foreach($rows as $row)
                                            {   $masp = $row["id_product"];
                                                $soluong = $_SESSION['cart'][$masp];//số lượng của masp từ giỏ hàng
                                                $total=$soluong*$row["price"];
                                                $subtotal+=$total;
                                                $hinhanh = $row["image"];
                                                if($hinhanh=="")
                                                    $hinhanh = "no-Image.png";

                                            
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="?module=cart&act=del&masp=<?=$masp?>">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/<?=$hinhanh?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?=$row['name']?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">$<?=$row['price']?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="number" size="4" class="input-text qty text" name="qty[<?=$masp?>]" title="Qty" value="<?=$soluong?>" min="0" step="1">
                                                    
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">$<?=$total?></span> 
                                            </td>
                                        </tr>
                                        
                                        <?php
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button" >
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>

                                    <?php
                                    }
                                    ?>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$<?=$subtotal?></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">$<?=$subtotal?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            

                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
