<?php 
  fromsession("in");
  getwidget();
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <center>En esta Secci&oacute;n podras ver detalladamente todos los click que se han realizado en tus diferentes sitios webs</center>
                    </div>
                </div>

            </div>
           
            <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4>Bitacora de Clicks en Sitio Web</h4>
                      </div>
                      <div class="panel-body">
                        <form name="fdashboard" class="form-inline" id="fdashboard" action="?v=dashboard" method="post">
                            <div class="form-group">
                              <label for="txtweb_id">Sitio Web:</label>
                              <select name="txtweb_id" style="width:300px;" id="web_id" class="form-control">
                                  <option value="">Seleccione:</option>
                                  <?php print $getwebs; ?>
                              </select>
                              <input type="hidden" name="operation" id="operation" value="search">
                            </div>
                            <button type="submit" class="btn btn-success">Ver Estadisticas</button>
                        </form>
                        <br />
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Nro.</th>
                                <th>Ip</th>
                                <th>Country Code</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Lat</th>
                                <th>Lon</th>
                                <th>Date Time</th>
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