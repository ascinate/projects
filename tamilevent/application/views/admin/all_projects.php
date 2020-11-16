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
                                    <h4>All Project List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
                 
                    <div class="page-body">
                        <?php foreach($users as $val){?>
              
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        
                                        <form id="main" method="post" action="/" novalidate="">

                                         <div class="form-group row">
                                           <label class="col-sm-2 col-form-label"><b>User Name</b></label></label>
                                            <div class="col-sm-10">
                                          
                                                <?php 
                                                $query=$this->db->get('user_master');
                                                foreach($query->result() as $value)
                                                {?>
                                                <option value=""><?=$value->first_name?></option>
                                                 <?php }?>
                                     
                                            </div>
                                            </div>
              
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Job Title</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->job_title?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Category</b></label>
                                                <div class="col-sm-10">
                                                  <?=$val->category?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project Expiry</b></label>
                                                <div class="col-sm-10">
                                                  <?=$val->project_expiry?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project Dedline</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->project_dedline?>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project Type</b></label>
                                                <div class="col-sm-10">
                                                <?=$val->project_type?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Price</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->project_price?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project Details</b></label>
                                                <div class="col-sm-10">
                                                 <?=$val->project_details?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project Location</b></label>
                                                <div class="col-sm-10">
                                                  <?=$val->project_location?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Country</b></label>
                                                <div class="col-sm-10">
                                               <?=$val->country?>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                
                                                      <button type="button" class="btn btn-primary m-b-0" onclick="javascript: history.go(-1);">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                             
                                    </div>
                                </div>
                                 </div>
                        </div>
                 
                    <?php }?>
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