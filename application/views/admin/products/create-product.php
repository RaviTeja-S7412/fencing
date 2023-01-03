<? $this->load->view('admin/back_common/admin_header') ?>
<? $this->load->view('admin/back_common/admin_sidebar') ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Fence Supply Guys </p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                </ol>
            </div>
        </div>
        <!--
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Summernote Editor</h4>
                            </div>
                            <div class="card-body">
                               
                            </div>
                        </div>
                    </div>
                </div>-->

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Create Product</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="post" action="<? echo base_url('admin/product/insertProduct') ?>" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Product Name
                                        <div class="input-group m-t-10">
                                            <input type="text" name="product_name" class="form-control" id="name" placeholder="Product Name" value="<? echo $p->product_name ?>" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Product Image
                                        <div class="input-group m-t-10">
                                            <input type="file" class="form-control" name="pr_image" id="designation" <? echo $p->id == "" ? 'required' : '' ?>>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Multiple Images
                                        <div class="input-group m-t-10">
                                            <input type="file" class="form-control" name="files[]" multiple="multiple">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Category
                                        <div class="input-group m-t-10">
                                            <select class="form-control" id="cat" name="product_category" required="">
                                                <option value="">Select Category</option>

                                                <? 
                                                    $cats = $this->db->get_where("tbl_categories",["deleted"=>0])->result();
                                                    foreach($cats as $c){
                                                        $sel = ($c->id == $p->product_category) ? 'selected' : "";
                                                        echo '<option value="'.$c->id.'" '.$sel.'>'.$c->category_name.'</option>';
                                                    }
                                                ?>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        MRP
                                        <div class="input-group m-t-10">
                                            <input type="number" class="form-control" name="mrp" id="email" placeholder="Product Price" value="<? echo $p->product_actual_price ?>" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Selling Price
                                        <div class="input-group m-t-10">
                                            <input type="number" class="form-control" name="price" id="email" placeholder="Product Selling Price" value="<? echo $p->product_discount_price ?>" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        SKU
                                        <div class="input-group m-t-10">
                                            <input type="text" class="form-control" name="sku" id="email" placeholder="Stock Keeping Unit" value="<? echo $p->sku ?>" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Short Description
                                        <div class="input-group m-t-10">
                                            <textarea class="form-control" name="pr_desc" id="" rows="3" placeholder="Short Description" required=""><? echo $p->product_name ?></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Product Information
                                        <div class="input-group m-t-10">
                                            <textarea class="form-control" name="product_information" id="" rows="3" placeholder=" Product Information" required=""><? echo $p->product_information ?></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Additional Information
                                        <div class="input-group m-t-10">
                                            <textarea class="form-control" name="additional_information" id="" rows="3" placeholder="Additional Information" required=""><? echo $p->additional_information ?></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-sm-12 col-lg-3 col-md-3" align="right">
                                <div class="form-group row">

                                    <div class="col-sm-6" style="margin-top: 20px;">

                                        <!--  <div class="input-group">
                                                    <div class="input-group-prepend"> -->
                                        <input type="hidden" name="id" value="<? echo $p->id ?>">                
                                        <button type="submit" id="msubmit" class="btn btn-md btn-info" style="width: 100%">Save</button>

                                        <!--   </div>
                                                    
                                                    
                                                </div> -->

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>



                </form>



            </div>
        </div>









    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<? $this->load->view('admin/back_common/admin_footer') ?>