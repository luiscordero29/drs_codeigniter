<?php $this->load->view('dashboard/head'); ?>    
<?php $this->load->view('dashboard/header'); ?>
<?php $this->load->view('dashboard/aside-sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $this->load->view('dashboard/content-header'); ?>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="fa fa-file-pdf-o"></i>
                                <h3 class="box-title"><?php echo $module_description; ?></h3>
                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 300px;">
                                        <?php echo form_open(''); ?>
                                        <input name="table_search" class="form-control pull-right" placeholder="Buscar" type="text" value="<?php echo $table_search; ?>">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                        <?php echo form_close(''); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tbody><tr>
                                      <th>ID</th>
                                      <th>User</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Reason</th>
                                    </tr>
                                    <tr>
                                      <td>183</td>
                                      <td>John Doe</td>
                                      <td>11-7-2014</td>
                                      <td><span class="label label-success">Approved</span></td>
                                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                      <td>219</td>
                                      <td>Alexander Pierce</td>
                                      <td>11-7-2014</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                      <td>657</td>
                                      <td>Bob Doe</td>
                                      <td>11-7-2014</td>
                                      <td><span class="label label-primary">Approved</span></td>
                                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                      <td>175</td>
                                      <td>Mike Doe</td>
                                      <td>11-7-2014</td>
                                      <td><span class="label label-danger">Denied</span></td>
                                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                  </tbody></table>
                               
                            </div>
                            <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    <?php            
                                        $pagination = (int)($table_rows / $table_limit);
                                        for ($item=0; $item <= $pagination ; $item++) { 
                                    ?>                                         
                                        <li <?php if($item == $table_page): ?>class="active"<?php endif; ?>>
                                            <a href="<?php echo site_url('nominas/index/'.$item.'/'.$table_search); ?>">
                                                <?php echo $item+1; ?>
                                            </a>
                                        </li>
                                    <?php                            
                                        }
                                    ?>
                                </ul>
                            </div>
                        <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- ./col -->
                </div>
            </section>
            <!-- /.content -->
        </div>
<?php $this->load->view('dashboard/footer'); ?>      