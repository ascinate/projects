<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                      <h4> Feedback List</h4>

                                        </div>
                                        <div class="col-lg-4">
                                           <div class="page-header-breadcrumb">
                                                <a href="<?php echo base_url();?>admin/feedback/add" class="btn btn-success">Add Feedback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Zero config.table start -->
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Post Date</th>
                                                                <th>Rating</th>
                                                                <th>Feedback</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                          
                                                            <?php foreach($users as $val){
                                                               ?> 
                                                            <tr>
                                                               <td><?=$val->post_date?></td>
                                                               <td><?=$val->rating?></td>
                                                               <td><?=$val->feedback?></td>
                                                               <td><a href="<?php echo base_url();?>admin/feedback/edit/<?=$val->id?>"> <i class="feather icon-edit"></i></a>
                                                               &nbsp;
                                                              <a href="<?php echo base_url();?>admin/feedback/delete/<?=$val->id?>"><i class="feather icon-trash"></i></a></td>
                                                            </tr>
                                                            <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>