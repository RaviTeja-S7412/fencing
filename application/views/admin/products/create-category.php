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
                    <li class="breadcrumb-item"><a href="<? echo base_url('admin/products/categories') ?>">Categories</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Category</a></li>
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
                        <h5> Create Category </h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="post" action="<? echo base_url('admin/products/categories/insertCategory') ?>" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Category Name
                                        <div class="input-group m-t-10">
                                            <input type="text" name="cat_name" class="form-control" id="name" placeholder="Category Name" value="<? echo $cat->category_name ?>" required="">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        Category Image
                                        <div class="input-group m-t-10">
                                            <input type="file" class="form-control" name="cat_img" id="" <? echo $cat->id == "" ? 'required' : '' ?>>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-sm-12 col-lg-3 col-md-3" align="right">
                                <div class="form-group row">

                                    <div class="col-sm-6" style="margin-top: 20px;">
                                        <input type="hidden" name="id" value="<? echo $cat->id ?>">
                                        <button type="submit" id="msubmit" class="btn btn-md btn-info" style="width: 100%">Save</button>

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