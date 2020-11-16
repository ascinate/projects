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
                                    <h4>Edit Feedback Details</h4>
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
                                    
                                    <div class="card-block">
                                        <?php foreach($users as $val){?>

                                        <form  method="post" action="<?php echo base_url();?>admin/feedback/update/<?=$val->id;?>" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Post Date</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="date" id="name" placeholder="Enter Date"  value="<?=$val->post_date?>"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Rating</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?=$val->rating?>"id="password" name="rating" placeholder="Enter Your Last Name"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Feedback</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="" name="feedback" placeholder="Enter Email" value="<?=$val->feedback?>" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Client Name</label>
                   <div class="col-sm-10">
               
                    <select id="inputClientCompany" name="user_name" class="form-control">

                     <?php 
      $query=$this->db->query("select * from `user_master` where `user_type`='Client'");                     foreach($query->result() as $value)
                      {?>
                        <option value="<?=$value->id?>"><?=$value->first_name?></option>
                      <?php }?>
                   </select>
                 </div>
             
                  </div>
                  <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Business Name</label>
                     <div class="col-sm-10">
               
                    <select id="inputClientCompany" name="user_name" class="form-control">

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

                     <?php 
                        $query=$this->db->get('project_master');
                        foreach($query->result() as $value)
                          {?>
                            <option value="<?=$value->id?>"<?php if($val->project_id==$value->id){
                              echo 'selected';}?>><?=$value->job_title?></option>
                            <?php }?>
                   </select>
                 </div>
             </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary m-b-0">Update</button>
                                                    <button type="button" class="btn btn-primary m-b-0" onclick="javascript: history.go(-1);">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php }?>
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





