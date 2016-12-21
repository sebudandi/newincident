<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Client Orders</h3>
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
                            <th>Order ID</th>
                            <th>Order Date</th>
                            <th>Billing Type</th>
                            <th>Billing Frequency</th>
                            <th>Next Due Date</th>
                            <th>Due Status</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($orders as $key=>$value): ?>
                        <tr>
                            <td><?php echo $value['order_id']; ?></td>
                            <td><?php echo $value['order_date']; ?></td>
                            <td><?php echo $value['billing_type']; ?></td>
                            <td><?php echo $value['billing_frequency']; ?></td>
                            <td><?php echo $value['next_due_date']; ?></td>
                            <td><?php echo $value['next_due_date']; ?></td>
                            <td><?php echo $value['order_status']; ?></td>
                            <td><?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'clients', 'action' => 'vieworder', $value['order_id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-search-plus"></i>', 
    array('controller' => 'billing', 'action' => 'billorder', $value['order_id']), 
    array('escape' => false)); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->