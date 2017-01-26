 <?php getwidget(); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Roles</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>All Roles</h4></div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" onclick="add();" data-toggle="modal" data-target="#mrole"><span class="glyphicon glyphicon-plus"></span> New</button>
                            <br />
                            <br />
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php print $string; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="mrole" role="dialog">
      <div class="modal-dialog">
            <div class="modal-content">
                    <form name="frole" id="frole" method="post" action="?v=role" autocomplete="off">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Manage Roles</h4>
                          </div>

                          <div class="modal-body">
                                    <div class="form-group">
                                        <label for="txtname"><span class="required-symbol">*</span> Name: </label>
                                        <input type="hidden" name="id" id="id" value="<?php print $id; ?>">
                                        <input type="text" name="txtname" value="<?php print $name; ?>" id="txtname" class="form-control uppercase">
                                        <input type="hidden" name="operation" id="operation" value="<?php print $operation; ?>">
                                    </div>
                                
                          </div>

                          <div class="modal-footer">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                                <button type="button" class="btn btn-danger" onclick="remove('role');"><span class="glyphicon glyphicon-floppy-remove"></span> Cancel</button>
                          </div>
                    </form>
            </div>
      </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        load("<?php print $operation?>","mrole");
        alr("<?php print $operation; ?>",<?php print $error; ?>,"role");

        $("#frole").validate({
            rules : {
                txtname : {
                    required: true,
                    minlength: 4
                }
            },
            messages : {
                txtname : {
                    required : "<span class='error-message'>Campo Obligatorio</span>",
                    minlength : "<span class='error-message'>La cantidad de Caracteres debe ser al menos de 4</span>"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>