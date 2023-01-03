<!doctype html>
<html>

<head>
  <title>Welcome to Fence Supply Guys </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<? echo base_url('assets/front/') ?>template.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<? echo base_url('assets/front/') ?>assets/css/bootstrap.min.css">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="<? echo base_url('assets/front/') ?>assets/css/style.css">
</head>

<body>
  <div class="page-wrapper">
    <header class="header header-10">
      <div class="header-top">
        <div class="container">
          <div class="header-left">
            <ul class="top-menu">
              <li> <a href="#">Links</a>
                <ul>
                  <li><a href="tel:#"><i class="icon-phone"></i>Call: (123) 456-7890 </a></li>
                </ul>
              </li>
            </ul>
            <!-- End .top-menu -->
          </div>
          <!-- End .header-left -->

          <div class="header-right">

            <? if ($this->session->userdata("user_id")) { ?>

              <div class="header-dropdown"> <a href="#"><i class="icon-user"></i> Account</a>
                <div class="header-menu">
                  <ul>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="<? echo base_url('customers/logout') ?>">Logout</a></li>
                  </ul>
                </div>
              </div>

            <? } else { ?>

              <ul class="top-menu top-link-menu">
                <li> <a href="#">Links</a>
                  <ul>
                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                  </ul>
                </li>
              </ul>

            <? } ?>


            <!-- End .top-menu -->

            <div class="header-dropdown"> <a href="#">USD</a>
              <div class="header-menu">
                <ul>
                  <li><a href="#">Eur</a></li>
                  <li><a href="#">Usd</a></li>
                </ul>
              </div>
              <!-- End .header-menu -->
            </div>
            <!-- End .header-dropdown -->

            <div class="header-dropdown"> <a href="#">Eng</a>
              <div class="header-menu">
                <ul>
                  <li><a href="#">English</a></li>
                  <li><a href="#">French</a></li>
                  <li><a href="#">Spanish</a></li>
                </ul>
              </div>
              <!-- End .header-menu -->
            </div>
            <!-- End .header-dropdown -->
          </div>
          <!-- End .header-right -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-top -->

      <div class="header-middle">
        <div class="container">
          <div class="header-left">
            <button class="mobile-menu-toggler"> <span class="sr-only">Toggle mobile menu</span> <i class="icon-bars"></i> </button>
            <a href="<? echo base_url() ?>" class="logo"> <img src="<? echo base_url('assets/front/') ?>images/logo.png" alt="Molla Logo" width="100%" height="25"> </a>
          </div>
          <!-- End .header-left -->

          <div class="header-right">
            <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block"> <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
              <form action="#" method="get">
                <div class="header-search-wrapper search-wrapper-wide">
                  <div class="select-custom">
                    <select id="cat" name="cat">
                      <option value="">TYPES OF CATEGORIES</option>
                      <?
                      $cats = $this->db->get_where("tbl_categories")->result();
                      foreach ($cats as $ck => $c) {
                        echo '<option value="' . $c->id . '">' . $c->category_name . '</option>';
                      }
                      ?>

                    </select>
                  </div>
                  <!-- End .select-custom -->
                  <label for="q" class="sr-only">Search</label>
                  <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                  <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </div>
                <!-- End .header-search-wrapper -->
              </form>
            </div>
            <!-- End .header-search -->



            <div class="dropdown cart-dropdown"> <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"> <i class="icon-shopping-cart"></i> <span class="cart-count">2</span> </a>


            </div>
            <!-- End .cart-dropdown -->
          </div>
          <!-- End .header-right -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-middle -->

      <div class="header-bottom sticky-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="dropdown category-dropdown"> <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories"> TYPES OF FENCING </a>
                <div class="dropdown-menu">
                  <nav class="side-nav">
                    <ul class="menu-vertical sf-arrows">
                      <?
                      $cats = $this->db->get_where("tbl_categories")->result();
                      foreach ($cats as $ck => $c) {
                        echo '<li><a href="' . base_url('products?cid=' . $c->id) . '">' . $c->category_name . '</a></li>';
                      }
                      ?>
                    </ul>
                    <!-- End .menu-vertical -->
                  </nav>
                  <!-- End .side-nav -->
                </div>
                <!-- End .dropdown-menu -->
              </div>
              <!-- End .category-dropdown -->
            </div>
            <!-- End .col-lg-3 -->

            <div class="col-lg-7">
              <nav class="main-nav">
                <ul class="menu sf-arrows justify-content-center">
                  <li> <a href="#" class="sf-with-ul"> LOCATE A BRANCH </a>

                  </li>
                  <li> <a href="#" class="sf-with-ul">About US</a>


                  </li>
                  <li> <a href="#" class="sf-with-ul"> WARRANTY INFO </a>


                  </li>
                  <li> <a href="#" class="sf-with-ul"> RESOURCES </a>


                  </li>
                </ul>
                <!-- End .menu -->
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="col-lg-2 justify-content-end">
              <div class="social-icons justify-content-end" style="margin-top: 5px;"> <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a> <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a> <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <!-- <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>-->
              </div>
              <!-- End .social-icons -->
            </div>
          </div>
          <!-- End .row -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-bottom -->
    </header>

  </div>
  <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

  <div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
      <span class="mobile-menu-close"><i class="icon-close"></i></span>

      <form action="#" method="get" class="mobile-search">
        <label for="mobile-search" class="sr-only">Search</label>
        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
      </form>

      <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
          <nav class="mobile-nav">
            <ul class="mobile-menu">
              <li class="active">
                <a href="index.html"> LOCATE A BRANCH </a>
                <!--
                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                  
                                </ul>-->
              </li>
              <li>
                <a href="category.html">About US</a>
                <!--   <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                   
                             
                                </ul>-->
              </li>
              <li>
                <a href="product.html" class="sf-with-ul"> WARRANTY INFO </a>
                <!--       <ul>
                                    <li><a href="product.html">Default</a></li>
                          
                                </ul>-->
              </li>
              <li>
                <a href="#"> RESOURCES </a>

              </li>


            </ul>
          </nav><!-- End .mobile-nav -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
          <nav class="mobile-cats-nav">
            <ul class="mobile-cats-menu">
              <li><a href="#">PostMaster</a></li>
              <li><a href="#">Wood</a></li>
              <li><a href="#">Chain Link</a></li>
              <li><a href="#">Vinyl</a></li>
              <li><a href="#">Ornamental Steel</a></li>
              <li><a href="#">Ornamental Aluminum</a></li>
              <li><a href="#">Agricultural</a></li>
              <li><a href="#">Prism 3-D</a></li>

            </ul><!-- End .mobile-cats-menu -->
          </nav><!-- End .mobile-cats-nav -->
        </div><!-- .End .tab-pane -->
      </div><!-- End .tab-content -->

      <div class="social-icons">
        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
      </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
  </div>


  <!--	Close Header-->