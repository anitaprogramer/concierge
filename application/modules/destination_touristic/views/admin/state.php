<div class="row-fluid">    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">        <div class='headline'>            <h1><?php echo $headline; ?></h1>            <div class="btn-group">                <?php                echo anchor(backend_current_route(), '<i class="glyphicon glyphicon-chevron-left"></i>', array('class' => 'btn btn-default tip-bottom', 'title' => 'Regresar'));                ?></div>        </div>    </div></div><div class="row-fluid">    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">        <?php echo $message; ?>    </div></div><div class="row-fluid">    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-20">        <?php if (!empty($rs_state) && $rs_state !== false): ?>            <div class="panel panel-primary">                <div class="panel-heading">                    <h3 class="panel-title"> <span class="icon"><i class="glyphicon glyphicon-align-justify"></i></span> </h3>                </div>                              <div class="panel-body list-state">                    <?php foreach ($rs_state as $value): ?>                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">                            <div class="checkbox">                                <label>                                    <input type="checkbox" id="state" data-state-id="<?php echo $value->state_id; ?>" data-destination-id="<?php echo $rs_destination->destination_touristic_id; ?>" data-destination-state-id="<?php echo $value->destination_state_id; ?>" name="state[]" <?php echo ($value->destination_state_id) ? 'checked="checked"' : '' ?> value="<?php echo $value->state_id; ?>"> <?php echo $value->name; ?>                                </label>                            </div>                        </div>                    <?php endforeach; ?>                </div>                            </div>              <?php else: ?>            <div class="alert alert-info">                No hay registros            </div>        <?php endif; ?>    </div></div>