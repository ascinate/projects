<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
            
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Add Feedback</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
              
                    <form action="<?php echo base_url();?>admin/feedback/insert" method="post" enctype="multipart/form-data">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        <form id="main" method="post" action="/" novalidate="">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Post Date</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Enter date" name="date" id="name" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Rating</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "rating" id="name" placeholder="Enter Your Rating" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Feedback</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="feedback" id="name" placeholder="Enter Your Feedback" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Client Name</label>
                   <div class="col-sm-10">
               
                    <select id="inputClientCompany" name="user_name" class="form-control">

                     <option value="">Select</option>
                     <?php 
                    
                     $query=$this->db->query("select * from `user_master` where `user_type`='Client'");
                     foreach($query->result() as $value)
                      {?>
                        <option value="<?=$value->id?>"><?=$value->first_name?></option>
                      <?php }?>
                   </select>
                 </div>
             
                  </div>
                  <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Business Name</label>
                     <div class="col-sm-10">
               
                    <select id="inputClientCompany" name="business_name" class="form-control">

                     <option value="">Select</option>
                     <?php 
                      $query=$this->db->query("select * from `user_master` where `user_type`='Business'");
                      foreach($query->result() as $value)
                      {?>
                        <option value="<?=$value->id?>"><?=$value->first_name?></option>
                      <?php }?>
                   </select>
                 </div>
             
                  </div>
                   <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Project Name</label>
                     <div class="col-sm-10">
               
                    <select id="inputClientCompany" name="project_id" class="form-control">

                     <option value="">Select</option>
                     <?php 
                     $query=$this->db->get('project_master');
                     foreach($query->result() as $value)
                      {?>
                        <option value="<?=$value->id?>"><?=$value->job_title?></option>
                      <?php }?>
                   </select>
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
                                 </div>
                        </div>
                    </div>
                   
                </div>
            </div>
           
            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>