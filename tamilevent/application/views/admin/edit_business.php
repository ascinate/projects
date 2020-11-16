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
                                    <h4>Edit Business</h4>
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
                                        <?php foreach($business as $val){?>

                                        <form  method="post" enctype="multipart/form-data"action="<?php echo base_url();?>admin/business/update/<?=$val->id;?>" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="first_name" id="name" placeholder="Enter Your First Name"  value="<?=$val->first_name?>"required>

                                                      <input type="hidden" class="form-control" name="password" id="name" placeholder="Enter Your First Name"  value="<?=$val->password?>"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?=$val->last_name?>"id="password" name="last_name" placeholder="Enter Your Last Name"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="" name="email" placeholder="Enter Email" value="<?=$val->email?>" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                          
                                             
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" value="<?=$val->country?>" name="country" placeholder="Enter Your Country Name"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Portfolio Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="email" name="userfile" placeholder="Enter Your Country Name">
                                                    <img src="<?=base_url()?>uploads/<?=$val->portfolio_image?>" width="150" height="100" >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Cover Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="email" name="userfile2" placeholder="Enter Your Country Name">
                                                    <img src="<?=base_url()?>uploads/<?=$val->cover_image?>" width="150" height="100" >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="description" value="<?=$val->description?>"placeholder="Enter  Description"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Other Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="other_description" value="<?=$val->other_description?>"placeholder="Enter Other Description  "required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                           
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">User Type</label>
                                                <div class="col-sm-10">
                                                      <select class="form-control" id="email" value="<?=$val->user_type?>" name="user_type">
                                             <?php 
                                            $query=$this->db->query("select * from `user_master`");
                                            foreach($query->result() as $value)
                                            {?>
                                            <option value="<?=$value->user_type?>"<?php if($val->user_type==$value->user_type){
                                              echo 'selected';}?>><?=$value->user_type?>
                                                  
                                            </option>
                                            <?php }?>
                                                     
                                                    </select>

                                                    <span class="messages"></span>
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