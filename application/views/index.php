<? $this->load->view('front_common/header') ?>

<section id="banner">
  <div id="ban" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#ban" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#ban" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#ban" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active"> <img src="<? echo base_url('assets/front/images/') ?>banner.png" alt="" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Manufacturer and Distributor of <br />
            Wholesale Fencing Products</h3>
          <button class="dftbtn">EXPLORE</button>
        </div>
      </div>
      <div class="carousel-item"> <img src="<? echo base_url('assets/front/images/') ?>banner.png" alt="" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Manufacturer and Distributor of <br />
            Wholesale Fencing Products</h3>
          <button class="dftbtn">EXPLORE</button>
        </div>
      </div>
      <div class="carousel-item"> <img src="<? echo base_url('assets/front/images/') ?>banner.png" alt="" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Manufacturer and Distributor of <br />
            Wholesale Fencing Products</h3>
          <button class="dftbtn">EXPLORE</button>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#ban" data-bs-slide="prev"> <span class="carousel-control-prev-icon"></span> </button>
    <button class="carousel-control-next" type="button" data-bs-target="#ban" data-bs-slide="next"> <span class="carousel-control-next-icon"></span> </button>
  </div>
</section>
<section id="abt">
  <div class="container">
    <div class="row d-flex ">
      <div class="col-lg-8 col-12 mx-auto text-center">
        <h1> Fence Supply Guys IS THE LEADING WHOLESALE DISTRIBUTOR <br />
          OF FENCING PRODUCTS ACROSS THE USA </h1>
        <p>As a manufacturer/wholesaler we do not sell directly to the public.</p>
        <p>We are dedicated to providing quality products to professional fence contractors. With over 70 locations across the U.S. we have knowledgeable and helpful associates to help your business thrive.</p>
        <button class=" dftbtn">Find a Local Branch</button>
      </div>
    </div>
  </div>
</section>
<section id="fproducts">
  <div class="container">
    <div class="products">
      <div class="row">

        <? $cats = $this->db->get_where("tbl_categories", ["deleted" => 0])->result();

        foreach ($cats as $c) {
        ?>

          <div class="col-12 col-md-4 col-lg-4 col-xl-3">
            <div class="product">
              <figure class="product-media"> <a href="<? echo base_url('products?cid='.$c->id) ?>"> <img src="<? echo base_url() . $c->image ?>" alt="Product image" class="product-image"> </a>
                <div class="product-action action-icon-top"> <a href="<? echo base_url('products?cid='.$c->id) ?>" class="btn-product" title=""><span>CALL FOR PRICE <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </span> </a> </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat"><? echo $c->category_name ?></div>
                <!-- End .product-cat -->
                <h3 class="product-title"><? echo $c->category_name ?></h3>
                <!-- End .product-title -->
                <!-- <div class="product-price"> PostMaster Plus® is a family </div> -->
                <!-- End .product-price -->

              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->
        <? } ?>

      </div>
      <!-- End .row -->

    </div>
  </div>
</section>
<section id="manufacture">
  <div class="container">
    <h1>OUR MANUFACTURE PRODUCTS</h1>
    <div class="text-center"><img src="<? echo base_url('assets/front/images/') ?>headlines-bg.png" class="mx-auto d-block"></div>
    <div class="row">
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m1.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Aluminum Fittings</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m2.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Bands</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m3.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Cantilever Rollers</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m4.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Cast Fittings</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m5.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Fasteners</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m6.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p> Heavy Fittings</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m7.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p>Ornamental Accessories</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="m-box">
          <div class="box-top text-center"> <img src="<? echo base_url('assets/front/images/') ?>m8.png" class="mx-auto d-block" /> </div>
          <div class="d-flex align-items-center" style="">
            <p> Ornamental Steel</p>
            <button class="dftbtnsm " style="margin-left: auto; margin-right: 7px;">EXPLORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<section id="clients">
  <div class="container text-center">
    <h1>Trusted Suppliers</h1>
    <p>We know that every fence is an investment in money, security, and effort. This is why we only work with the best manufacturers of fencing products.</p>
    <div class="row">
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c1.png" class="img-fluid" /></div>
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c2.png" class="img-fluid" /></div>
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c3.png" class="img-fluid" /></div>
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c4.png" class="img-fluid" /></div>
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c5.png" class="img-fluid" /></div>
      <div class="col-lg-2 col-12"><img src="<? echo base_url('assets/front/images/') ?>c3.png" class="img-fluid" /></div>
    </div>
  </div>
</section>
<section id="getintouch">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mx-auto" id="contact">
        <form class="contact-form " name="contactformlite" method="post" action="lite_process.php" onsubmit="return validate.check(this)">
          <div class="section-title text-center mb-5"> <span class="sub-title mb-2 d-block">
              <h2>Get In Touch</h2>
            </span>
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
            <div class="text-center"><img src="<? echo base_url('assets/front/images/') ?>line.png" class="mx-auto d-block"></div>
          </div>
          <div class="row ">
            <div class="col-md-6 ">
              <input type="text" class="form-control" name="Full_Name" id="Full_Name" placeholder="Your Full Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="Email_Address" id="Email_Address" placeholder="Email Address" required>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-6 mt-2">
              <!-- <input type="tel" class="form-control" name="Telephone_Number" id="Telephone_Number" placeholder="Phone Number">-->

              <input type="tel" id="mobile_code" class="form-control" placeholder="Phone Number" name="Telephone_Number" required pattern="[0-9]{10}" />
            </div>
            <div class="col-md-6 mt-2">
              <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Enquiry About" >-->
              <div id="billdesc">
                <select id="test" class="form-select form-control" name="product_option">
                  <option class="non" value="Product">Your Inquiry About </option>
                  <option class="non" value="PostMaster ">PostMaster </option>
                  <option class="non" value="Wood">Wood</option>
                  <option class="non" value="Chain Link">Chain Link</option>
                  <option class="non" value="Vinyl">Vinyl</option>
                  <option class="non" value="Ornamental Steel">Ornamental Steel</option>
                  <option class="non" value="Agricultural"> Agricultural</option>
                  <option class="non" value="Prism 3-D">Prism 3-D</option>
                  <option class="editable" value="other">Other</option>
                </select>
                <input class="editOption" style="display:none;" placeholder="Other">
                </input>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-2">
              <textarea name="Your_Message" id="Your_Message" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-2">
              <input type="hidden" name="dial_code" id="dial_code">
              <button type="submit" class="dftbtn">SUBMIT QUOTE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<? $this->load->view('front_common/footer') ?>