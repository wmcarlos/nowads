 <?php getwidget(); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Users</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>All Roles</h4></div>
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" onclick="add();" data-toggle="modal" data-target="#muser"><span class="glyphicon glyphicon-plus"></span> New</button>
                            <br />
                            <br />
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>Rol</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
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

<div class="modal fade" id="muser" role="dialog">
      <div class="modal-dialog">
            <div class="modal-content">
                    <form name="fuser" id="fuser" method="post" action="?v=user" autocomplete="off">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Manage Users</h4>
                          </div>

                          <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" value="<?php print $id; ?>">
                                        <label for="txtrole_id"><span class="required-symbol">*</span> Role: </label>
                                        <select name="txtrole_id" id="txtrole_id" class="form-control uppercase">
                                            <option value="">Select</option>
                                            <?php print $getroles; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtfirst_name"><span class="required-symbol">*</span> First Name: </label>
                                        <input type="text" name="txtfirst_name" id="txtfirst_name" value="<?php print $first_name; ?>" class="form-control uppercase"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtlast_name"><span class="required-symbol">*</span> Last Name: </label>
                                        <input type="text" name="txtlast_name" id="txtlast_name" value="<?php print $last_name; ?>" class="form-control uppercase"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtusername"><span class="required-symbol">*</span> Username: </label>
                                        <input type="text" name="txtusername" id="txtusername" value="<?php print $username; ?>" class="form-control uppercase"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtemail"><span class="required-symbol">*</span> Email: </label>
                                        <input type="text" name="txtemail" id="txtemail" value="<?php print $email; ?>" class="form-control uppercase"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtphone"><span class="required-symbol">*</span> Phone: </label>
                                        <input type="text" name="txtphone" id="txtphone" value="<?php print $phone; ?>" class="form-control uppercase"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtpassword"><span class="required-symbol">*</span>Password: </label>
                                        <input type="password" name="txtpassword" id="txtpassword" value="<?php print $password; ?>" class="form-control uppercase"/>
                                    </div>
                                     <input type="hidden" name="operation" id="operation" value="<?php print $operation; ?>">
                          </div>

                          <div class="modal-footer">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                                <button type="button" class="btn btn-danger" onclick="remove('user');"><span class="glyphicon glyphicon-floppy-remove"></span> Cancel</button>
                          </div>
                    </form>
            </div>
      </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        load("<?php print $operation?>","muser");
        alr("<?php print $operation; ?>",<?php print $error; ?>,"user");

        $("#fuser").validate({
            rules : {
                txtrole_id : {
                    required: true
                },
                txtfirst_name : {
                    required : true
                },
                txtlast_name :{
                    required : true
                },
                txtusername : {
                    required : true
                },
                txtemail : {
                    required : true
                },
                txtphone : {
                    required : true
                }
            },

            messages : {
                txtrole_id : {
                    required: "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtfirst_name : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtlast_name :{
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtusername : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtemail : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                },
                txtphone : {
                    required : "<span class='error-message'>Campo Obligatorio</span>"
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>