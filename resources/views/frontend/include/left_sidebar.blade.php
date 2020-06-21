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


                        <!--price-range-->
                        <!-- <div class="price-range">
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div> -->
                        <!--/price-range-->
                        
                        <!--shipping-->
                        <!-- <div class="shipping text-center">
                            <img src="{{asset('frontend/images/aquarium/7.jpg')}}" alt="" />
                        </div> -->
                        <!--/shipping-->
                    
                    </div>
                </div>