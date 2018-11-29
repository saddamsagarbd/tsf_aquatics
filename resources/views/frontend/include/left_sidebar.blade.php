<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <?php
                            $allCategory = DB::table('tbl_categories')
                                            ->where('publication_status',1)
                                            ->limit(3)
                                            ->get();

                            

                            foreach ($allCategory as $v_category) {?>
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/ProductByCategory/'.$v_category->id)}}">
                                        
                                        <?=$v_category->category_name?></a></h4>
                                </div>
                            </div>
                            <?php 
                            }
                            

                            ?>                            
                            
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                        $allBrand = DB::table('tbl_manufactur')
                                                        ->where('publication_status',1)
                                                        ->get();
                                        /*$countBrand = DB::table('tbl_manufactur')->count();*/

                                        foreach ($allBrand as $v_brand) {?>
                                            <li><a href="#"> <!-- <span class="pull-right">()</span> -->{{ $v_brand->manufacture_name}}</a></li>
                                        <?php 
                                        }
                                        

                                    ?>
                                    
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('frontend/images/aquarium/7.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>