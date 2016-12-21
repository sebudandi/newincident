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
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
             
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maritialStatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('passportNo') ?></th>
              
               
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
                        <?php foreach($person as $key=>$value): ?>

                        <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['fname']; ?></td>
                <td><?php echo $value['lname']; ?></td>
                <td><?php echo $value['mname']; ?></td>
                <td><?php echo $value['dob']; ?></td>
                <td><?php echo $value['pob']; ?></td>
                <td><?php echo $value['photo']; ?></td>
                <td><?php echo $value['nationality']; ?></td>
               <td><?php echo $value['maritialStatus']; ?></td>
               <td><?php echo $value['passportNo']; ?></td>
           
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