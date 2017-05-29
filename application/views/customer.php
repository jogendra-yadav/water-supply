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
                    <a href="<?php echo site_url('add_customer.html'); ?>"><button class="btn-xs btn btn-primary pull-right" style="margin-bottom: 0px;"><i class="fa fa-plus"></i> Add customer</button></a>
                    <h5><i class="fa fa-users"></i> Customer List</h5>
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
                                <?php
                                foreach ($customer_list as $customer) {
                                    ?>
                                    <tr class="gradeX">
                                        <td><?php echo $customer->first_name . " " . $customer->last_name; ?></td>
                                        <td class="center"><?php echo $customer->address; ?></td>
                                        <td class="center"><?php echo $customer->mobile; ?></td>
                                        <td class="center"><?php echo date('d-F-Y @ h:i A', strtotime($customer->register_date)); ?></td>
                                        <td class="center">
                                            <a href="<?php echo site_url('edit_customer_' . $customer->id_customer . '.html'); ?>"><button class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
                                            <button class="btn btn-danger btn-xs delete_customer_btn" path="<?php echo site_url('delete_customer_' . $customer->id_customer . '.html'); ?>" type="button"><i class="fa fa-trash-o"></i></button>                                        
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
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