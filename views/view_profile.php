<?php 
  fromsession("in");
  getwidget();
?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Profile</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form name="fprofile" id="fprofile" action="?v=profile" method="post">
                                <div class="form-group">
                                    <label for="txtfirst_name">First Name:</label>
                                    <input type="text" name="txtfirst_name" class="form-control" id="txtfirst_name" value="<?php print $first_name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txtlast_name">Last Name:</label>
                                    <input type="text" name="txtlast_name" class="form-control" id="txtlast_name" value="<?php print $last_name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txtusername">Username:</label>
                                    <input type="text" name="txtusername" class="form-control" id="txtusername" value="<?php print $username; ?>">
                                    <input type="hidden" name="txtrealusername" class="form-control" id="txtrealusername" value="<?php print $username; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txtemail">Email:</label>
                                    <input type="text" name="txtemail" class="form-control" id="txtemail" value="<?php print $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txtphone">Phone:</label>
                                    <input type="text" name="txtphone" class="form-control" id="txtphone" value="<?php print $phone; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="txtnewpassword">New Password:</label>
                                    <input type="password" name="txtnewpassword" class="form-control" id="txtnewpassword">
                                </div>
                                <div class="form-group">
                                    <label for="txtrepeatpassword">Repeat Password:</label>
                                    <input type="password" name="txtrepeatpassword" class="form-control" id="txtrepeatpassword">
                                    <input type="hidden" name="operation" id="operation" value="change">
                                </div>
                                <button type="submit" name="btnsave" class="btn btn-success pull-right">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <script type="text/javascript">
        $(document).ready(function(){
            alr("<?php print $operation; ?>",<?php print $error; ?>,"profile");
        });
    </script>