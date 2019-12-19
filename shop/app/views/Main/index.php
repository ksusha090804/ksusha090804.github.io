<!-- banner -->
<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Free Online Shopping</h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>T-Shirts + Formal Pants + Jewellery + Cosmetics</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Toys + Furniture + Lighting + Watches</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Tops + Books & Media + Sports</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					 
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	
<!-- //banner-bottom -->
<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                deserunt mollit anim id est laborum.</p>
                
			<div class="new-collections-grids">

            <!-- начало колонки хит товаров -->
            <?php if($hits): ?>
            <?php foreach($hits as $hit) : ?>
				<div class="col-md-3 new-collections-grid">
                    <!-- первый товар -->
                    
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="product/<?=$hit->alias; ?>" class="product-image"><img src="images/<?=$hit->img;?>" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="product/<?=$hit->alias; ?>">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								
							</div>
						</div>
						<h4><a href="product/<?=$hit->alias; ?>"><?=$hit->title;?></a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">
                            <p><i><?php if($hit->old_price):?>
							$<?=$hit->old_price;?><?php endif ?></i> <span class="item_price"><?=$hit->price ?></span>
							<a class="add-to-cart-link" data-id="<?=$hit->id;?>" href="cart/add?id=<?=$hit->id;?>">add to cart </a></p>
						</div>
                    </div>
                     <!-- конец первого товара -->
                    
                    
               </div> <!--конец колонки -->
               <?php endforeach ?>
<? endif;?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->
<!-- new-timer -->

<!-- //collections-bottom -->

