<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Clients</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Company Name</th>
                            <th>Telephone No</th>
                            <th>Email Address Address</th>
                            <th>Billing Address</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($clients as $key=>$value): ?>
                        <tr>
                            <td><?php echo $value['client_id']; ?></td>
                            <td><?php echo $value['client_name']; ?></td>
                            <td><?php echo $value['company_name']; ?></td>
                            <td><?php echo $value['client_telephone_number']; ?></td>
                            <td><?php echo $value['client_email_address']; ?></td>
                            <td><?php echo $value['billing_email_address']; ?></td>
                            <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'clients', 'action' => 'editclient', $value['client_id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'clients', 'action' => 'viewclient', $value['client_id']), 
    array('escape' => false)); ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->