<?php 
  fromsession("in");
  getwidget();
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Web Sites</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>All Web Sites</h4></div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" onclick="add();" data-toggle="modal" data-target="#mweb"><span class="glyphicon glyphicon-plus"></span> New</button>
                            <br />
                            <br />
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>User</th>
                                    <th>Name</th>
                                    <th>Url</th>
                                    <th>BlockDays</th>
                                    <th>WebKey</th>
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

<div class="modal fade" id="mweb" role="dialog">
      <div class="modal-dialog">
            <div class="modal-content">
                    <form name="fweb" id="fweb" method="post" action="?v=web" autocomplete="off">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Manage Web Sites</h4>
                          </div>

                          <div class="modal-body">
                                <input type="hidden" name="id" id="id" value="<?php print $id; ?>">
                                
                                <div class="form-group">
                                    <label for="txtuser_id"><span class="required-symbol">*</span> User: </label>
                                    <select class="form-control uppercase" name="txtuser_id" id="txtuser_id">
                                        <option value="">Select</option>
                                        <?php print $getusers; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtname"><span class="required-symbol">*</span> Name: </label>
                                    <input type="text" class="form-control uppercase" name="txtname" id="txtname" value="<?php print $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txturl"><span class="required-symbol">*</span> Url: </label>
                                    <input type="text" value="<?php print $url; ?>" class="form-control" name="txturl" id="txturl">
                                </div>
                                <div class="form-group">
                                    <label for="txtblockdays"><span class="required-symbol">*</span> Bloack Days: </label>
                                    <input type="text" value="<?php print $blockdays; ?>" class="form-control" name="txtblockdays" id="txtblockdays">
                                </div>
                                <div class="form-group">
                                    <label for="txtwebkey"><span class="required-symbol">*</span> Web Key: </label>
                                    <input type="text" readonly="readonly" class="form-control" name="txtwebkey" value="<?php print $webkey; ?>" id="txtwebkey">
                                </div>
                                <input type="hidden" name="operation" id="operation" value="<?php print $operation; ?>">
                          </div>

                          <div class="modal-footer">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                                <button type="button" class="btn btn-danger" onclick="rmv('web');"><span class="glyphicon glyphicon-floppy-remove"></span> Cancel</button>
                          </div>
                    </form>
            </div>
      </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        load("<?php print $operation?>","mweb");
        alr("<?php print $operation; ?>",<?php print $error; ?>,"web");

        $("#fweb").validate({
            rules : {
                txtuser_id : {
                    required : true
                },
                txtname : {
                    required: true
                },
                txturl : {
                    required: true
                },
                txtblockdays : {
                    required: true
                },
                txtwebkey : {
                    required: true
                }
            },
            messages : {
                txtuser_id : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtname : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txturl : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtblockdays : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtwebkey : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>