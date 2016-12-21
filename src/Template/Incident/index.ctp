<!-- Main content -->
<section class="content">
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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incident_name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('incident_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_details_id') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('events_idevents') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('company_details_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stations_idstations') ?></th>
                
              
               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                        <?php foreach($incident as $key=>$value): ?>
                  

                        <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['incident_name']; ?></td>
                <td><?php echo $value['incident_details']; ?></td>
                <td><?php echo $value['person_details_id']; ?></td>
                   <td><?php echo $value['events_idevents']; ?></td>
                <td><?php echo $value['company_details_id']; ?></td>
                <td><?php echo $value['stations_idstations']; ?></td>
 
                
           
                 <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $value['id']]) ?>
                    <?php echo  $this->Html->link(__('Edit'), ['action' => 'edit', $value['id']]) ?>
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $value['id']]) ?>
                </td>
     

            </tr> 



                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->