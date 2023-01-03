<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
  <div class="quixnav-scroll">
    <ul class="metismenu" id="menu">
      <li class="nav-label first">Main Menu</li>
      <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
      <li><a href="<? echo base_url('admin/dashboard') ?>"><i class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>

      </li>


      <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Orders</span></a>
        <ul aria-expanded="false">
          <li><a href="orderlist.html">List</a></li>

          <li><a href="orderdetails.html">Details</a></li>
        </ul>
      </li>
      <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Products</span></a>
        <ul aria-expanded="false">
          <li><a href="<? echo base_url('admin/products/categories') ?>"> Categories</a></li>
          <li><a href="<? echo base_url('admin/product') ?>"> Products</a></li>
        </ul>
      </li>

      <li><a href="<? echo base_url('admin/customers') ?>"><i class="icon icon-world-2"></i><span class="nav-text1">Customers </span></a> </li>

      <li><a href="users.html"><i class="icon icon-plug"></i><span class="nav-text1"> Users</span></a></li>
      <li><a href="invoices.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text"> Invoices </span></a></li>





    </ul>
  </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->