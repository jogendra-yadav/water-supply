<?php
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('navbar');
?>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if ($this->session->flashdata('edit_error')) {
                ?>
                <div class="bg-danger p-xs b-r-sm text-center"><?php echo $this->session->flashdata('edit_error'); ?></div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><i class="fa fa-pencil-square-o"></i> Edit Customer</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?php echo site_url('update_customer_details_' . $customer->id_customer . '.html'); ?>" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-4"><input type="text" name="first_name" placeholder="First Name" value="<?php echo $customer->first_name; ?>" class="form-control"></div>
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-4"><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $customer->last_name; ?>" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-4">
                                <textarea placeholder="Address" name="address" class="form-control"><?php echo $customer->address; ?></textarea>
                            </div>
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-4"><input type="text" name="mobile" value="<?php echo $customer->mobile; ?>" placeholder="Mobile" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button class="btn btn-sm btn-primary pull-right" type="submit">Update Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('footer');
?>