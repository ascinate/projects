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
                                    <h4>Add Event Master</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
                <!-- Page-header end -->
                   
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    <div class="card-header">
                                       

                                    </div>
                                    <div class="card-block">
                                        <form  method="post" enctype="multipart/form-data" action="<?php echo base_url();?>admin/event_master/insert" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Event Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="event_title" id="name" placeholder="Enter Event Title" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                           

                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">User Name</label>
                                                <div class="col-sm-10">
                                                    

                                                    <select class="form-control" name="user_name" id="name"  required>

                                                     <option value="">Select</option>
                                                     <?php 
                                                     $query=$this->db->get('user_master');
                                                     foreach($query->result() as $value)
                                                      {?>
                                                     <option value="<?=$value->id?>"><?=$value->first_name?></option>
                                                      <?php }?>
                                                   </select>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>


                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date Of Event</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="date_of_event" id="name" placeholder="Enter Date Of Event" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Event List</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="event_list" id="name" placeholder="Enter Event List" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="country" id="name" placeholder="Enter Country" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Guest No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="guest_no" id="name" placeholder="Enter Guest No" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="description" id="name" placeholder="Enter Description" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            
                                      
                                            

                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                    <button type="button" class="btn btn-primary m-b-0" onclick="javascript: history.go(-1);">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Inputs Validation end -->
                        
                                            
                                        </form>
                                    </div>
                                </div>
                                <!-- Form components Validation card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
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