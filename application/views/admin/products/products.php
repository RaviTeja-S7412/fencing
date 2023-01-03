<? $this->load->view('admin/back_common/admin_header') ?>
<? $this->load->view('admin/back_common/admin_sidebar') ?>
<link href="<? echo base_url('assets/admin/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet"> 

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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Products</a></li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-header row">
                    <div class="col-md-9">
                        <h5> Products List </h5>  
                    </div>
                    <div class="col-md-3 pull-right">
                        <a class="flex btn btn-primary" href="<? echo base_url('admin/product/createProduct') ?>">Create</a>
                    </div>
            </div>


            <div class="col-md-12">
                <div class="table-responsive p-2" style="overflow: hidden; outline: none;" tabindex="1">
                    <table class="table table-custom table-lg mb-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? 
                                $data = $this->db->order_by("id","desc")->get_where("tbl_products",["deleted"=>0])->result(); 
                                foreach($data as $k => $d){
                            ?>
                            <tr>
                                <td><? echo $k+1 ?></td>
                                <td><img src="<? echo base_url().$d->product_image ?>" class="rounded" width="40" alt="..."></td>
                                <td><? echo $this->db->get_where("tbl_categories",["id"=>$d->product_category])->row()->category_name ?></td>
                                <td><? echo $d->product_name ?></td>
                                <td class="text-end">
                                    <a href="<? echo base_url('admin/product/updateProduct/').$d->id ?>"> <i class="fa fa-pencil-square-o " aria-hidden="true"></i></a> 
                                    <a href="<? echo base_url('admin/product/delProduct/').$d->id ?>"  onclick="return confirm('Are you sure want to delete')"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                                </td>
                            </tr>
                            <? } ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->


<? $this->load->view('admin/back_common/admin_footer') ?>

<script type="text/javascript">

    $("#dataTable").DataTable();
   
</script>
