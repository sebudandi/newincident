<div class="row">
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div><!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $person['fname']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $person['id']; ?></h5>
            </div>
            <div class="box-footer no-padding">
               
            </div>
        </div><!-- /.widget-user -->
    </div><!-- /.col -->
    <!-- Small boxes (Stat box) -->
    <div class="col-lg-3 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Incident</h3>
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
                         <th scope="col"><?= $this->Paginator->sort('incident_report') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incident_name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('incident_details') ?></th>
                       
                        <th>Action</th>
                    </tr>
                        <?php foreach($incident as $key=>$value): ?>
                    <tr>
                <td><?php echo $value['incident_report']; ?></td>
                <td><?php echo $value['incident_name']; ?></td>
                <td><?php echo $value['incident_details']; ?></td>
                        <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'incident', 'action' => 'edit', $value['id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'incident', 'action' => 'view', $value['id']), 
    array('escape' => false)); ?>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>