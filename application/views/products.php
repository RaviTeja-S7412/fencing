<? $this->load->view('front_common/header') ?>

<main class="main">
  <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
      <h1 class="page-title"><? echo $cdata->category_name ?> <span></span></h1>
    </div><!-- End .container -->
  </div><!-- End .page-header -->
  <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page"> <? echo $cdata->category_name ?> </li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="toolbox">
            <div class="toolbox-left">
              <!-- <div class="toolbox-info">
                Showing <span>9 of 56</span> Products
              </div> -->
            </div>
            <div class="toolbox-right">
              <!-- <div class="toolbox-sort">
                <label for="sortby">Sort by:</label>
                <div class="select-custom">
                  <select name="sortby" id="sortby" class="form-control">
                    <option value="popularity" selected="selected">Latest</option>
                    <option value="rating">Most Rated</option>

                  </select>
                </div>
              </div> -->
              <!-- <div class="toolbox-layout">
                <a href="category-list.html" class="btn-layout">
                  <svg width="16" height="10">
                    <rect x="0" y="0" width="4" height="4" />
                    <rect x="6" y="0" width="10" height="4" />
                    <rect x="0" y="6" width="4" height="4" />
                    <rect x="6" y="6" width="10" height="4" />
                  </svg>
                </a>

                <a href="category-2cols.html" class="btn-layout">
                  <svg width="10" height="10">
                    <rect x="0" y="0" width="4" height="4" />
                    <rect x="6" y="0" width="4" height="4" />
                    <rect x="0" y="6" width="4" height="4" />
                    <rect x="6" y="6" width="4" height="4" />
                  </svg>
                </a>

                <a href="category.html" class="btn-layout active">
                  <svg width="16" height="10">
                    <rect x="0" y="0" width="4" height="4" />
                    <rect x="6" y="0" width="4" height="4" />
                    <rect x="12" y="0" width="4" height="4" />
                    <rect x="0" y="6" width="4" height="4" />
                    <rect x="6" y="6" width="4" height="4" />
                    <rect x="12" y="6" width="4" height="4" />
                  </svg>
                </a>

                <a href="category-4cols.html" class="btn-layout">
                  <svg width="22" height="10">
                    <rect x="0" y="0" width="4" height="4" />
                    <rect x="6" y="0" width="4" height="4" />
                    <rect x="12" y="0" width="4" height="4" />
                    <rect x="18" y="0" width="4" height="4" />
                    <rect x="0" y="6" width="4" height="4" />
                    <rect x="6" y="6" width="4" height="4" />
                    <rect x="12" y="6" width="4" height="4" />
                    <rect x="18" y="6" width="4" height="4" />
                  </svg>
                </a>
              </div> -->
            </div>
          </div>

          <div class="products mb-3">
            <div class="row">

            <?
              if(count($products) > 0){ 
              foreach($products as $p){ ?>  
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                  <div class="product">
                    <figure class="product-media"> <a href="#"> <img src="<? echo base_url().$p->product_image ?>" alt="Product image" class="product-image"> </a>
                      <div class="product-action action-icon-top"> <a href="<? echo base_url('products/view/'.$p->link) ?>" class="btn-product" title=""><span>CALL FOR PRICE <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span> </a> </div>
                    </figure>
                    
                    <div class="product-body">
                      <div class="product-cat"><? echo $p->product_name ?></div>
                      <h3 class="product-title"><? echo $p->product_name ?></h3>
                    </div>
                  </div>
                </div>
            <? }}else{
              echo '<p class="text-center">No Products Found</p>';
            } ?>    

            </div><!-- End .row -->
          </div><!-- End .products -->

          <!-- <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                  <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                </a>
              </li>
              <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item-total">of 6</li>
              <li class="page-item">
                <a class="page-link page-link-next" href="#" aria-label="Next">
                  Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav> -->
        </div><!-- End .col-lg-9 -->
        <aside class="col-lg-3 order-lg-first">
          <div class="sidebar sidebar-shop">
            <div class="widget widget-clean">
              <label>Filters:</label>
              <a href="<?php echo $_SERVER["REQUEST_URI"]; ?>" class="sidebar-filter-clear">Clear All</a>
            </div><!-- End .widget widget-clean -->

            <div class="widget widget-collapsible">
              <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                  Category
                </a>
              </h3><!-- End .widget-title -->

              <div class="collapse show" id="widget-1">
                <div class="widget-body">
                  <div class="filter-items filter-items-count">

                    <?  
                        $cats = $this->db->get_where("tbl_categories")->result();

                        foreach($cats as $ck => $c){
                    ?>
                      <div class="filter-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="cat-<? echo $ck ?>">
                          <label class="custom-control-label" for="cat-<? echo $ck ?>"><? echo $c->category_name ?></label>
                        </div><!-- End .custom-checkbox -->
                        <span class="item-count"><? echo $this->db->get_where("tbl_products",['product_category'=>$c->id])->num_rows(); ?></span>
                      </div><!-- End .filter-item -->
                    <? } ?>  

                  </div><!-- End .filter-items -->
                </div><!-- End .widget-body -->
              </div><!-- End .collapse -->
            </div><!-- End .widget -->

            <!-- End .widget -->

            <div class="widget widget-collapsible">
              <!-- <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                  Price
                </a>
              </h3> -->

              <!-- <div class="collapse show" id="widget-5">
                <div class="widget-body">
                  <div class="filter-price">
                    <div class="filter-price-text">
                      Price Range:
                      <span id="filter-price-range"></span>
                    </div>

                    <div id="price-slider"></div>
                  </div>
                </div>
              </div> -->
            </div><!-- End .widget -->
          </div><!-- End .sidebar sidebar-shop -->
        </aside><!-- End .col-lg-3 -->
      </div><!-- End .row -->
    </div><!-- End .container -->
  </div><!-- End .page-content -->
</main>

<? $this->load->view('front_common/footer') ?>
