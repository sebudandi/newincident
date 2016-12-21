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
                            <?php echo $this->Form->input('incident_name', array('label'=>'Incident Name:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('incident_details', array('label'=>'Incident Details:', 'class'=>'form-control')); ?>
                    </div>
                   
                    <div class="form-group">
                            <?php echo $this->Form->input('events_idevents', array('label'=>'Events ID:', 'class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                            <?php echo $this->Form->input('company_details_id', array('label'=>'Company ID:', 'class'=>'form-control')); ?>
                    </div>
                   <div class="form-group">
                            <?php echo $this->Form->input('stations_idstations', array('label'=>'Stations:', 'class'=>'form-control')); ?>
                    </div>
                    
                
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
