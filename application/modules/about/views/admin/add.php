<div class="row-fluid">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class='headline'>
            <h1><?php echo $headline; ?></h1>
            <div class="btn-group">
                <?php
                echo anchor(backend_current_route(), '<i class="glyphicon glyphicon-chevron-left"></i>', array('class' => 'btn btn-default tip-bottom', 'title' => 'Regresar'));
                echo anchor(backend_current_route() . 'add', '<i class="glyphicon glyphicon-plus"></i>', array('class' => 'btn btn-default tip-bottom', 'title' => 'Agregar nuevo'));
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div id='breadcrumb'><?php echo $breadcrumb; ?></div>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class='message-container'><?php echo $message; ?></div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-list-alt"> Formulario</span>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart(backend_current_route(true), array('class' => 'form-horizontal')); ?>
                <?php
                echo form_control_horizontal($title);
                echo form_control_horizontal($description);
                echo form_control_horizontal($image);
                ?>
                <div class="form-actions text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
