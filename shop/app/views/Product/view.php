<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<!--<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Single Page</li>-->
                <?=$breadcrumbs;?>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
<div class="single">
		<div class="container1">
			
			<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/<?=$product->img;?>">
								<div class="thumb-image"> <img src="images/<?=$product->img;?>" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <?php if($gallery): ?>
                            <?php foreach($gallery as $item): ?>
							<li data-thumb="images/<?=$item->img;?>">
								 <div class="thumb-image"> <img src="images/<?=$item->img;?>" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <?php endforeach; ?>
                            <?php endif; ?>
							
						</ul>
					</div>
				
                </div>
                <?php $cats = \ishop\App::$app->getProperty('cats'); ?>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
                <div class="new-collections-grid1-left simpleCart_shelfItem">
					<h3><?=$product->title;?></h3>
                    <h4><span class="item_price" id ="base-price" data-base = "<?=$product->price ?>">  <p>$<?=$product->price ?></p></span></h4>
                    <?php if($product->old_price):?>
                            <p><small><del> $<?=$product->old_price;?><?php endif ?></del></small></p>
					<!--<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                    </div>-->
                    </div>
					<div class="description">
						<h5><i>Description</i></h5>
						<p><?= $product->content;?></p>
                    </div>
                    <?php if($mods): ?>
					<div class="available">
                                <ul>
                                    <li>Color
                                        <select>
                                            <option>Выбрать цвет</option>
                                            <?php foreach($mods as $mod): ?>
                                            <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                    <?php endif;?>
					<div class="occasional">
						<h5>Category :</h5>
						<div class="colr ert">
						<span>	<a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span>
						</div>
						
						<div class="clearfix"> </div>
                    </div>
                    <div class="quantity">
                                <input type="number" size="1" value="1" name="quantity" min="1" step="1">
                            </div>
                           
					<div class="occasion-cart">
                        <p></p>
                        <a id="productAdd" class="add-to-cart-link" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>">add to cart </a>
						
					</div>
					
				</div>
				<div class="clearfix"> </div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->


<!-- недавно просмотренные товары -->
<?php if($recentlyViewed): ?>
	<div class="single-related-products">
	
		<div class="container">
		
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Recently Viewed</h3>
			
		
			<div class="new-collections-grids">
			<?php foreach($recentlyViewed as $item): ?>
				<div class="col-md-3 new-collections-grid">
                
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
                    
						<div class="new-collections-grid1-image">
							<a href="product/<?=$item['alias'];?>" class="product-image"><img src="images/<?=$item['img'];?>" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="product/<?=$item['alias'];?>">Quick View</a>
							</div>
							
						</div>
						<h4><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i><?php if($item['old_price']): ?>$<?=$item['old_price'];?> <?php endif; ?></i> <span class="item_price">$<?=$item['price'];?></span><a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>">add to cart </a></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<?php endforeach; ?>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
            </div>
			
		</div>
		
    </div>
<?php endif; ?>

<!-- //single-related-products -->