<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href=<?=PATH;?>><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li>Поиск по запросу "<?=h($query);?>"</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container1">
			
			<div class="col-md-8 products-right">
            <?php if(!empty($products)): ?>
				<div class="products-right-grids-bottom">
					<div class="col-md-4 products-right-grids-bottom-grid">
                    <?php foreach($products as $product): ?>
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							<div class="new-collections-grid1-image">
								<a href="product/<?=$product->alias;?>" class="product-image"><img src="images/<?=$product->img;?>" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="product/<?=$product->alias;?>">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									
								</div>
							</div>
							<h4><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h4>
							
							<h4>
                                    <a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i>add to cart</i></a> <span class=" item_price">$<?=$product->price;?></span>
                                    <?php if($product->old_price): ?>
                                        <small><del>$<?=$product->old_price;?></del></small>
                                    <?php endif; ?>
                                </h4>
						</div>
                    <?php endforeach; ?>
					</div>
					
                    <div class="clearfix"> </div>
                    <?php endif ;?>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs --