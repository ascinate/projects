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
                                    <h4>All Business List</h4>
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

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>First Name</b></label>
                                                <div class="col-sm-10">
                                                    <?=$val->first_name?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Last Name</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->last_name?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Email</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->email?>
                                                </div>
                                            </div>
                                          
                                             
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Country</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->country?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Portfolio Image</b></label>
                                                <div class="col-sm-10">
                                                    
                                                    <img src="<?=base_url()?>uploads/<?=$val->portfolio_image?>" width="150" height="100" >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Cover Image</b></label>
                                                <div class="col-sm-10">
                                                    
                                                    <img src="<?=base_url()?>uploads/<?=$val->cover_image?>" width="150" height="100" >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Description</b></label>
                                                <div class="col-sm-10">
                                                  <?=$val->description?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Other Description</b></label>
                                                <div class="col-sm-10">
                                                   <?=$val->other_description?>
                                                </div>
                                            </div>
                                           
                                        <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>User Type</b></label>
                                                <div class="col-sm-10">
                                                      <?=$val->user_type?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                
                                                      <button type="button" class="btn btn-primary m-b-0" onclick="javascript: history.go(-1);">Cancel</button>
                                                </div>
                                            </div>

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