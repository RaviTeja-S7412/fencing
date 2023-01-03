<?php $d  = &get_instance(); ?> 
<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed <a href="#" target="_blank">Ampcus Inc</a> </p>
         
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<? echo base_url('assets/admin/') ?>vendor/global/global.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>js/quixnav-init.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>js/custom.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>vendor/chartist/js/chartist.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>vendor/moment/moment.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>vendor/pg-calendar/js/pignose.calendar.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>vendor/pnotify/pnotify.custom.min.js"></script>
    <script src="<? echo base_url('assets/admin/') ?>js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>
<script type="text/javascript">
<?php    
if($d->session->flashdata("msg")){
        ?>
    
$(function(){

new PNotify({
    title: '<?php echo $d->session->flashdata("title");?>',
    text: '<?php echo $d->session->flashdata("msg");?>',
    type:'<?php echo $d->session->flashdata("type");?>',
    animate: {
        animate: true,
        in_class: 'bounceInDown',
        outClass: 'fadeOut'
    },
	delay : 2000,
});   
	
	setTimeout(function(){ $(".ui-pnotify").hide(); },2000);
	
});

<?php
    }
    ?>
</script>