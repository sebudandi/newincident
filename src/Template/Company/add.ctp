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
                            <?php echo $this->Form->input('company_name', array('label'=>'Company Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('location', array('label'=>'Location:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('area', array('label'=>'Area:', 'class'=>'form-control')); ?>
                    </div>
                    
                
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
