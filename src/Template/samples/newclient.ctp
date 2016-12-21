<div class="row">
        <?php echo $this->Form->create(); ?>
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">New Client</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                            <?php echo $this->Form->input('client_name', array('label'=>'Client Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('company_name', array('label'=>'Company Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('physical_address', array('label'=>'Physical Address:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('telephone_number', array('label'=>'Telephone Number:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="form-group">
                            <?php echo $this->Form->input('email_address', array('label'=>'Email Address:', 'class'=>'form-control')); ?>
                    </div>  
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
