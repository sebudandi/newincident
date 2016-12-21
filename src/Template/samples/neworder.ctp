<?php echo $this->Form->create(); ?>
<div class="row">
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Client Order</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Client Name:</label>
                        <input type="text" name="client_name" class="form-control" value="<?php echo $client['client_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Order Status:</label>
                        <select class="form-control" name="order_status">
                            <option value="">---Order Status---</option>
                            <option value="new">New</option>
                            <option value="on_going">On Going</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Order Details</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Billing Type:</label>
                        <select class="form-control" name="billing_type">
                            <option value="">---Billing Type---</option>
                            <option value="block">Block Billing</option>
                            <option value="itemized">Itemized Billing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Billing Frequency:</label>
                        <select class="form-control" name="billing_frequency">
                            <option value="">---Billing Frequency---</option>
                            <option value="monthly">Monthly</option>
                            <option value="annually">Annually</option>
                            <option value="once_off">Once Off</option>
                        </select>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Domain Names</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Extension:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="domain_name_extension">
                                <option value="">---Domain Extension---</option>
                                <?php foreach($domainproducts as $key => $value): ?>
                                <option value="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name_domain_name">
                        </div>
                    </div>                    
                </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
    <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Hosting</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Package:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="hosting_package">
                                <option value="">---Hosting Package---</option>
                                <?php foreach($hostingproducts as $key => $value): ?>
                                <option value="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="hosting_domain_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Servers:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nameservers">
                        </div>
                    </div>                    
                </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
    <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Custom Service</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="custom_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Desc:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="custom_detail"></textarea>
                            </div>
                        </div>                    
                    </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
</div>
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-warning">
        <!-- form start -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Create Order</button>
            </div><!-- /.box-footer -->
    </div><!-- /.box -->