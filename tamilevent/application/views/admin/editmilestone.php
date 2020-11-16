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
                                    <h4>Edit Milestone Details</h4>
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

                                        <form  method="post" action="<?php echo base_url();?>admin/milestone/update/<?=$val->id;?>" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><b>Project</b></label>
                                                <div class="col-sm-10">
                                                    <select id="inputClientCompany" name="projectid" class="form-control">

                                                    <?php
                                                    $query=$this->db->query("select * from `project_master`");
                                                    foreach($query->result() as $value)
                                                    {?>
                                                    <option value="<?=$value->id?>"<?php if($val->project_id==$value->id){
                                                    echo 'selected';}?>><?=$value->id?>

                                                    </option>
                                                    <?php }?>
                                                 </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Milestone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?=$val->milestone?>"id="password" name="milestone" placeholder="Enter Milestone">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="" name="description" placeholder="Enter Description" value="<?=$val->description?>">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                                   <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Price</label>
                                                   <div class="col-sm-10">
                                                   <input type="text" class="form-control" id="" name="price" placeholder="Enter Price" value="<?=$val->unit_price?>">
                                                    <span class="messages"></span>
                                                  </div>
                 
             
                  </div>
                  <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Quantity</label>
                     <div class="col-sm-10">
               
                    <input type="text" class="form-control" id="" name="quantity" placeholder="Enter Quantity" value="<?=$val->quantity?>">
                                                    <span class="messages"></span>
                 </div>
             
                  </div>
                  
                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary m-b-0">Update</button>
                                                    <button type="button" class="btn btn-primary m-b-0" onclick="javascript:     history.go(-1);">Cancel</button>
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





