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
                                    <h4>Add Milestones</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
                <!-- Page-header end -->
                   
                    <!-- Page body start -->
                    <form action="<?php echo base_url();?>admin/milestone/insert" method="post" enctype="multipart/form-data">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        <form id="main" method="post" action="/" novalidate="">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Project</label>
                                                <div class="col-sm-10">
                                                   
                                  <select id="inputClientCompany" name="projectid" class="form-control">
                                     <option value="">Select</option>
                                    <?php 
                                    $query=$this->db->get('project_master');
                                    foreach($query->result() as $value)
                                      {?>
                                         <option value="<?=$value->id?>"><?=$value->id?></option>
                                        <?php }?>
                                   
                                  </select>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Milestone</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" class="form-control" name=
                                                    "milestone" id="name" placeholder="Milestone" required></textarea>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" class="form-control" name=
                                                    "description" id="name" placeholder="Description" required></textarea>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price/Unit</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "price" id="name" placeholder="Price/Unit" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "quantity" id="name" placeholder="Enter Quantity" value="1">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            
                                           
                                          
                                         
                                                    </div>
                                                   
                                             
                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                     <button type="button" class="btn btn-primary m-b-0" onclick="javascript:     history.go(-1);">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Inputs Validation end -->
                                <!-- Tooltip Validation card start -->
                                
                                
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