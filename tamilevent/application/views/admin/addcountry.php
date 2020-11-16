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
                                    <h4>Add Country</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">&nbsp;</div>
                    </div>
                </div>
                <!-- Page-header end -->
                   
                    <!-- Page body start -->
                    <form action="<?php echo base_url();?>admin/country/insert" method="post" enctype="multipart/form-data">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    
                                    <div class="card-block">
                                        <form id="main" method="post" action="/" novalidate="">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Add Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name=
                                                    "country" id="name" placeholder="Enter Your Country" required>
                                                    <span class="messages"></span>
                                                </div>
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