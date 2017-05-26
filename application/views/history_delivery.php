<?php
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('navbar');
?>
<link href="<?php echo template_url('css/plugins/dataTables/datatables.min.css'); ?>" rel="stylesheet">
<link href="<?php echo template_url('css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-history"></i> History Delivery List</h5>
                    <h5 class="pull-right"><i class="fa fa-calendar"></i> Date :
                        <input class="datepicker" value="<?php echo date('d-m-Y', strtotime("-1 days")); ?>"/>
                    </h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="delivery_table table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th>Present(P)</th>
                                    <th>Absent(A)</th>
                                    <th>Repeat(R)</th>
                                    <th>Return(L)</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th>Present(P)</th>
                                    <th>Absent(A)</th>
                                    <th>Repeat(R)</th>
                                    <th>Return(L)</th>
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
<script type="text/javascript">
    var js_data = {
        url: "<?php echo site_url('get-history.html'); ?>",
        history_date: "<?php echo date('d-m-Y', strtotime("-1 days")); ?>"
    };
</script>
<script src="<?php echo template_url('js/plugins/dataTables/datatables.min.js'); ?>"></script>
<script src="<?php echo template_url('js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo custom_js_url('history_delivery.js'); ?>"></script>
