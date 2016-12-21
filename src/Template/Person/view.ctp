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
    
   
</div><!-- /.row -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Incident Reports</h3>
           
 <?php echo $this->Html->link('<button class="btn btn-block btn-warning btn-lg""></i>Create new</button>', 
    array('controller' => 'Incident', 'action' => 'add', $person['id']), 
    array('escape' => false)); ?>
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
                        
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incident_name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('incident_details') ?></th>
                       
                        <th>Action</th>
                    </tr>
                        <?php foreach($incident as $key=>$value): ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['incident_name']; ?></td>
                <td><?php echo $value['incident_details']; ?></td>
                        <td>
                                <?php echo $this->Html->link('<i class="fa fa-pencil"></i>', 
    array('controller' => 'person', 'action' => 'editclient', $value['id']), 
    array('escape' => false)); ?> 
                                <?php echo $this->Html->link('<i class="fa fa-fw fa-sticky-note-o"></i>', 
    array('controller' => 'person', 'action' => 'viewclient', $value['id']), 
    array('escape' => false)); ?>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>