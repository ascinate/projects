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
                                             <h4> Event Master List</h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <a href="<?php echo base_url();?>admin/event_master/add" class="btn btn-success">Add Event Master</a>
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
                                                                <th>Event Title</th>
                                                                <th>date_of_event</th>
                                                                <th>event_list</th>
                                                                <th>country</th>
                                                                <th>guest_no</th>
                                                                <th>description</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php foreach($event_master as $val) { ?>
                                                                <tr>
                                                                   
                                                                    <td><?=$val->event_title?></td>
                                                                    <td><?=$val->date_of_event?></td>
                                                                    <td><?=$val->event_list?></td>
                                                                    <td><?=$val->guest_no?></td>
                                                                    <td><?=$val->guest_no?></td>
                                                                    <td><?=$val->description?></td>

                                                                    
                                                                    <td>
                                                                     <a href="<?php echo base_url();?>admin/event_master/edit/<?=$val->id?>"> <i class="feather icon-edit"></i></a>
                                                                      &nbsp;
                                                                    <a href="<?php echo base_url();?>admin/event_master/delete/<?=$val->id?>"><i class="feather icon-trash"></i></a>
                                                                     
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