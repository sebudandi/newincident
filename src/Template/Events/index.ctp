<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Persons</h3>
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
                <th scope="col"><?= $this->Paginator->sort('event_name') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('date_event') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venue') ?></th>
                
              
               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                        <?php foreach($events as $key=>$value): ?>
                        <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['event_name']; ?></td>
                <td><?php echo $value['date_event']; ?></td>
                <td><?php echo $value['venue']; ?></td>
                
           
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