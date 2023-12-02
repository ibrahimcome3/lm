                           <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                            <?php $stmt1  =  $object->get_subcategorieslevel1($row['cat_id']);?>
                                                            <?php while($row1 = $stmt1->fetch()){   ?>
                                                                <div class="col-md-6">

                                                                    <div class="menu-title"><?php echo $row1['categoryName']; ?></div><!-- End .menu-title -->
                                                                    <ul>
                                                            <?php $stmt2  =  $object->get_subcategories($row1['cat_id']);?>
                                                            <?php while($row2 = $stmt2->fetch()){   ?>
                                                                        <li><a href="<?php echo 'category.php?catid='.$row1['cat_path'].'/%'  ?>"><strong><?php echo $row2['categoryName'];  ?></strong></a></li>
                                                            <?php } ?>
                                                                    </ul>

                                                                </div><!-- End .col-md-6 -->
                                                              <?php }?>
                                                             <!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="assets/images/demos/demo-13/menu/banner-3.jpg" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->

                                                <div class="menu-col menu-brands">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/1.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/2.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/3.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/4.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/5.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="assets/images/brands/6.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-brands -->
                                            </div><!-- End .megamenu -->
     <!--
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
                                            Colour
                                        </a>
                                    </h3><!-- End .widget-title -->
                                     <!--
                                    <div class="collapse show" id="widget-3">
                                        <div class="widget-body">
                                            <div class="filter-colors">
                                                <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                            </div><!-- End .filter-colors -->
                                      <!--    </div><!-- End .widget-body -->
                                  <!--    </div><!-- End .collapse -->
                              <!--    </div><!-- End .widget -->
                                 <!--
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                            Brand
                                        </a>
                                    </h3><!-- End .widget-title -->
                                  <!--
                                    <div class="collapse show" id="widget-4">
                                        <div class="widget-body">
                                            <div class="filter-items">
                                                <?php
                                              //  $brand =  new ProductItem();
                                              //  $stmt = $brand->getbrand();
                                              //  $selected_category_for_selection_brand = implode(",", decript_string(isset($_GET['arrybrand']) ? $_GET['arrybrand'] : '0'));
                                              //  $selected_category_for_selection_brand =  explode(',', $selected_category_for_selection_brand);
                                                ?>
                                                <input type="hidden" value="<?= //implode(",",$selected_category_for_selection_brand) ?>" id="0236" />
                                                <div class="filter-item">
                                                    <?php //while ($row = $stmt->fetch()) { ?>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" value="<?=//$row['brandID']?>" name=brand[] class="custom-control-input" id="brand-<?=//$row['brandID']?>" <?php // if( (in_array($row['brandID'], $selected_category_for_selection_brand))) echo "checked"?>>
                                                        <label class="custom-control-label" for="brand-<?=//$row['brandID']?>"><?=//$row['Name']?></label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <?php //} ?>
                                             <!--   </div><!-- End .filter-item -->
                                         <!--   </div><!-- End .filter-items -->
                                      <!--  </div><!-- End .widget-body -->
                                  <!--  </div><!-- End .collapse -->


                                    <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                            Size
                                        </a>
                                    </h3><!-- End .widget-title -->

                                    <div class="collapse show" id="widget-2">
                                        <div class="widget-body">
                                            <div class="filter-items">
                                                <?php  $i = 1; $stmt = $cat->get_variation_by_category($cat = 1);
                                               // if(isset($_GET['arrysize'])){

                                                $selected_category_for_selection_size = implode(",", decript_string(isset($_GET['arrysize']) ? $_GET['arrysize'] : '700ml'));
                                                echo $selected_category_for_selection_size;
                                                $selected_category_for_selection_size =  explode(',', $selected_category_for_selection_size);

                                                ?>
                                                <input type="text" value="<?= implode(",",$selected_category_for_selection_size) ?>" id="0235" />
                                                <?php// } ?>
                                                <?php
                                                //var_dump($selected_category_for_selection_size);
                                                while ($row = $stmt->fetch()) {
                                                ?>

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="size[]" class="custom-control-input"  value="<?=$row['value'];?>" id="size-<?=$i?>" <?php if( (in_array($row['value'], $selected_category_for_selection_size))) echo "checked"?>>
                                                        <label class="custom-control-label" for="size-<?=$i?>"><?=$row['value']?></label>
                                                    </div><!-- End .custom-checkbox -->
                                                </div>
                                                 <?php $i++; }?>
                                                <!-- End .filter-item -->
                                            </div><!-- End .filter-items -->
                                        </div><!-- End .widget-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .widget -->
