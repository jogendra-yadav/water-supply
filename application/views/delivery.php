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
                    <h5><i class="fa fa-truck"></i> Delivery List</h5>
                    <h5 class="pull-right"><i class="fa fa-calendar"></i> Date : <?php echo date('d-M-Y'); ?></h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="delivery_table table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Present(P)</th>
                                    <th>Absent(A)</th>
                                    <th>Repeat(R)</th>
                                    <th>Return(L)</th>
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
                                        <td class="center">
                                            <span class="present_count_span_<?php echo $customer->id_customer; ?>"><?php echo $customer->bottel_present; ?></span>
                                            <button type="button" data-action_url="<?php echo site_url('reset_count_delivery.html'); ?>" data-id_customer="<?php echo $customer->id_customer; ?>" data-action_for="present" class="btn btn-xs btn-default pull-right reset_count"><i class="fa fa-refresh"></i></button>
                                        </td>
                                        <td class="center">
                                            <span class="absent_count_span_<?php echo $customer->id_customer; ?>"><?php echo $customer->bottel_absent; ?></span>
                                            <button type="button" data-action_url="<?php echo site_url('reset_count_delivery.html'); ?>" data-id_customer="<?php echo $customer->id_customer; ?>" data-action_for="absent" class="btn btn-xs btn-default pull-right reset_count"><i class="fa fa-refresh"></i></button>
                                        </td>
                                        <td class="center">
                                            <span class="repeat_count_span_<?php echo $customer->id_customer; ?>"><?php echo $customer->bottel_repeat; ?></span>
                                            <button type="button" data-action_url="<?php echo site_url('reset_count_delivery.html'); ?>" data-id_customer="<?php echo $customer->id_customer; ?>" data-action_for="repeat" class="btn btn-xs btn-default pull-right reset_count"><i class="fa fa-refresh"></i></button>
                                        </td>
                                        <td class="center">
                                            <span class="return_empty_count_span_<?php echo $customer->id_customer; ?>"><?php echo $customer->bottel_empty_return; ?></span>
                                            <button type="button" data-action_url="<?php echo site_url('reset_count_delivery.html'); ?>" data-id_customer="<?php echo $customer->id_customer; ?>" data-action_for="return_empty" class="btn btn-xs btn-default pull-right reset_count"><i class="fa fa-refresh"></i></button>
                                        </td>
                                        <td class="center">
                                            <button data-action_url="<?php echo site_url('increase_count_delivery.html'); ?>" data-id_customer="<?php echo $customer->id_customer; ?>" data-action_for="present" class="btn btn-primary btn-xs present_button action_button">P <i class="fa fa-plus"></i> </button>
                                            <button data-id_customer="<?php echo $customer->id_customer; ?>" data-action_url="<?php echo site_url('increase_count_delivery.html'); ?>" data-action_for="absent" class="btn btn-warning btn-xs absent_button action_button">A <i class="fa fa-plus"></i> </button>
                                            <button data-id_customer="<?php echo $customer->id_customer; ?>" data-action_url="<?php echo site_url('increase_count_delivery.html'); ?>" data-action_for="repeat" class="btn btn-success btn-xs repeat_button action_button">R <i class="fa fa-plus"></i> </button>
                                            <button data-id_customer="<?php echo $customer->id_customer; ?>" data-action_url="<?php echo site_url('increase_count_delivery.html'); ?>" data-action_for="return_empty" class="btn btn-danger btn-xs return_empty_button action_button">L <i class="fa fa-plus"></i> </button>
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
                                    <th>Present(P)</th>
                                    <th>Absent(A)</th>
                                    <th>Repeat(R)</th>
                                    <th>Return(L)</th>
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
<script src="<?php echo custom_js_url('delivery.js'); ?>"></script>