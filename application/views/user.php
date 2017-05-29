<?php
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('navbar');
?>
<link href="<?php echo template_url('css/plugins/dataTables/datatables.min.css'); ?>" rel="stylesheet">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="<?php echo site_url('add_user.html'); ?>"><button class="btn-xs btn btn-primary pull-right" style="margin-bottom: 0px;"><i class="fa fa-plus"></i> Add user</button></a>
                    <h5><i class="fa fa-user"></i> User List</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('footer');
?>

<script src="<?php echo template_url('js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo custom_js_url('customer.js'); ?>"></script>