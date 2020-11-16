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
                                    <h4>Add Project</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
              
                    <form action="<?php echo base_url();?>admin/project/insert" method="post" enctype="multipart/form-data">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        <form id="main" method="post" action="/" novalidate="">

                                         <div class="form-group row">
                                           <label class="col-sm-2 col-form-label">User Name</label>
                                           <div class="col-sm-10">
                                            <select id="inputClientCompany" name="user_name" class="form-control">

                                             <option value="">Select</option>
                                             <?php 
                                             $query=$this->db->get('user_master');
                                             foreach($query->result() as $value)
                                              {?>
                                                <option value="<?=$value->id?>"><?=$value->first_name?></option>
                                              <?php }?>
                                           </select>
                                     
                                          </div>
                                      </div>
              
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Job Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="job_title" id="name" placeholder="Enter Your Job Title" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "category" id="name" placeholder="Enter Your Category " required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project Expiry</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="project_expiry" id="name" placeholder="Enter Your Project Expiry" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project Dedline</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"  name="project_dedline"  placeholder="Project Dedline" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project Type</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="project_type" placeholder="Enter Your Project Type" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="price" placeholder="Enter Your Price" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project Details</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="details" placeholder="Enter Your details" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project Location</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="location" placeholder="Enter Your Location" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="country" placeholder="Enter Your Country" required>
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