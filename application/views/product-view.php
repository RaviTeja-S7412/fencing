<? $this->load->view('front_common/header') ?>
  <main class="main">
	  <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
	    <div class="container d-flex align-items-center">
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
	        <li class="breadcrumb-item"><a href="javascript:history.back()">Products</a></li>
	        <li class="breadcrumb-item active" aria-current="page"><? echo $pdata->product_name ?></li>
	      </ol>
	    </div><!-- End .container -->
	  </nav><!-- End .breadcrumb-nav -->

	  <div class="page-content">
	    <div class="container">
	      <div class="product-details-top">
	        <div class="row">
	          <div class="col-md-6">
	            <div class="">
	              <div class="row">
	                <figure class="product-main-image">
	                  <img id="product-zoom" src="<? echo base_url().$pdata->product_image ?>" data-zoom-image="<? echo base_url().$pdata->product_image ?>" alt="product image">

	                  <a href="#" id="btn-product-gallery" class="btn-product-gallery">
	                    <i class="icon-arrows"></i>
	                  </a>
	                </figure><!-- End .product-main-image -->
	                <!-- End .product-image-gallery -->
	              </div><!-- End .row -->
	            </div><!-- End .product-gallery -->
	          </div><!-- End .col-md-6 -->

	          <div class="col-md-6">
	            <div class="product-details">
	              <h1 class="product-title"><? echo $pdata->product_name ?></h1><!-- End .product-title -->



	              <div class="product-price">
	                SKU: <? echo $pdata->sku ?>
	              </div><!-- End .product-price -->

	              <div class="product-content">
	                <p><? echo $pdata->description ?></p>
	              </div><!-- End .product-content -->




	              <div class="details-filter-row details-row-size">
	                <label for="qty">Qty:</label>
	                <div class="product-details-quantity">
	                  <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
	                </div><!-- End .product-details-quantity -->
	              </div><!-- End .details-filter-row -->

	              <div class="product-details-action">
	                <a href="#" class=" dftbtn"><span>CALL FOR PRICE <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span></a>


	              </div><!-- End .product-details-action -->

	              <div class="product-details-footer">


	              </div><!-- End .product-details-footer -->
	            </div><!-- End .product-details -->
	          </div><!-- End .col-md-6 -->
	        </div><!-- End .row -->
	      </div><!-- End .product-details-top -->

	      <div class="product-details-tab">
	        <ul class="nav nav-pills justify-content-center" role="tablist">
	          <li class="nav-item">
	            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
	          </li>


	        </ul>
	        <div class="tab-content">
	          <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
	            <div class="product-desc-content">
	              <h3>Product Information</h3>
                <p><? echo $pdata->product_information ?></p>
	            </div><!-- End .product-desc-content -->
	          </div><!-- .End .tab-pane -->
	          <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
	            <div class="product-desc-content">
	              <h3>Information</h3>
                <P><? echo $pdata->additional_information ?></p>
	            </div><!-- End .product-desc-content -->
	          </div><!-- .End .tab-pane -->


	        </div><!-- End .tab-content -->
	      </div><!-- End .product-details-tab -->

	      
	      </div><!-- End .owl-carousel -->
	    </div><!-- End .container -->
	  </div><!-- End .page-content -->
	</main><!-- End .main -->

  <? $this->load->view('front_common/footer') ?>