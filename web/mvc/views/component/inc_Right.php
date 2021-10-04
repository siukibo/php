				<div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
					<div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                    <?php
						require_once("mvc/models/clsSanpham.php");
						$sanpham = new clsSanpham;
						$kq =$sanpham->LaySanphamMoiNhat(4);
						$data_latest = $sanpham->data;
						foreach($data_latest as $row)
						{								
						?>
                   
                        <div class="thubmnail-recent">
                            <img src="img/<?=$row['image']?>" class="recent-thumb" alt="">
                            <h2><a href="?module=single-product&masp=<?=$row['id_product']?>">S<?=$row['name']?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?=$row['price']?></ins> <del>$800.00</del>
                            </div>                             
                        </div>
					<?php }
					?>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>