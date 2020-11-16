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
                                    <h4>Add Supplier</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
              
                    <form action="<?php echo base_url();?>admin/supplier/insert" method="post" enctype="multipart/form-data">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        <form id="main" method="post" action="/" novalidate="">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Profile Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file"  name="userfile">
                                                    <input type="hidden" >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Caption</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "caption" id="name" placeholder="Enter Caption" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

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