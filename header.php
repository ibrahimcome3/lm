  <?php
  require_once  'C:\wamp64\www\lm\class\Conn.php';
  require_once  'C:\wamp64\www\lm\class\Category.php';
  ?>
 <header class="header header-10 header-intro-clearance">
            <div class="header-top" >
                <div class="container header-dropdown" >
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +2348051067944</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>

                                <ul>
                                    <li class=""><a href="about.php">About us</a></li>
                                    <?php if(!isset($_SESSION["uid"])){ ?>
                                    <li class="login"><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                    <?php }else{ ?>
                                    <li class="login"><a href="logout.php">log out</a></li>
                                    <li class="login"><a href="dashboard.php"><i class="icon-user"></i>Dashboard</a></li>
                                    <?php } ?>

                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo" >
                            <div class="">
                            <div><img src="assets/logo/lagosmarketngcom-logos_transparent.png" style="width: 275px;" alt="LagosMarket logo"></div>
                            </div>
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="product-search.php" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                              
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="header-dropdown-link">


                            <a href="wishlist.php" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">0</span>
                                <span class="wishlist-txt">Wishlist</span>
                            </a>

                            <div class="dropdown cart-dropdown">
                                <!--<a href="cart_.php" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">-->
                                <a href="cart_.php" class="dropdown-toggle" role="button"   data-display="static">   
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">0</span>
                                    <span class="cart-txt">Cart</span>
                                </a>

                               
                          
                               
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown show is-on" data-visible="true">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu show">
                                <nav class="side-nav">
                                           <?php
                                                $object = new Category();
                                                $stmt = $object->get_parent_category();
                                           ?>
                                        
                                    <ul class="menu-vertical sf-arrows">
                                    <?php
                                    while ($row = $stmt->fetch()) {
                                    ?>
                                    <li class="megamenu-container">
                                    <a class="sf-with-ul" href="<?php echo 'category.php?catid='.$row['cat']  ?>"><?=$row['cat']?></a>
                                    </li>

                                    <?php

                                    }
                                    ?>



                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .col-lg-3 -->
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.php" >Home</a>
                                </li>



                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .col-lg-9 -->
                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p><span>sale on selected items Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->