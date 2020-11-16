<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Business List</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <a href="<?php echo base_url();?>admin/Business/add" class="btn btn-success">Add Business</a>
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
                                                                <th>Portfolio Image</th>
                                                                <th>First Name</th>
                                                                <th>Email</th>
                                                                <th>Country</th>
                                                                <th>User Type</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php foreach($business as $val) { 
                                                                ?>
                                                                <tr>
                                                                    <td><img src="<?=base_url()?>uploads/<?=$val->portfolio_image?>" width="100" height="100" ></td>
                                                                    <td><?=$val->first_name?></td>
                                                                    <td><?=$val->email?></td>
                                                                    <td><?=$val->country?></td>
                                                                    <td><?=$val->user_type?></td>
                                                                     <td>
                                                                     <a href="<?php echo base_url();?>admin/business/view/<?=$val->id?>"><i class="feather icon-search"></i></a>
                                                                     &nbsp;
                                                                     <a href="<?php echo base_url();?>admin/business/edit/<?=$val->id?>"><i class="feather icon-edit"></i></a>
                                                                      &nbsp;
                                                                    <a href="<?php echo base_url();?>admin/business/delete/<?=$val->id?>"><i class="feather icon-trash"></i></a>
                                                                    </td>
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