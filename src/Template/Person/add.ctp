<div class="row">
        <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Person</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                            <?php echo $this->Form->input('fname', array('label'=>'First Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('lname', array('label'=>'Last Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('mname', array('label'=>'Other Names:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('dob', array('label'=>'Date of birth:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('pob', array('label'=>'Place of birth:', 'class'=>'form-control')); ?>
                    </div>  
                   <div class="form-group">
                            <?php echo $this->Form->input('photo', array('label'=>'Photo:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('nationality', array('label'=>'Nationality:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('maritialStatus', array('label'=>'Gender:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('passportNo', array('label'=>'Passport Number:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
