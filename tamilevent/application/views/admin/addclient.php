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
                                    <h4>Add Client</h4>
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
                                        <form  method="post" enctype="multipart/form-data" action="<?php echo base_url();?>admin/client/insert" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="first_name" id="name" placeholder="Enter Your First Name" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="password" name="last_name" placeholder="Enter Your Last Name"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="" name="email" placeholder="Enter Email" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Repeat Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" name="repeat_password" placeholder="Enter Your Repeat Password" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="country" placeholder="Enter Your Country Name"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Portfolio Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="email" name="userfile" required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Cover Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="email" name="userfile2"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="description" placeholder="Enter Description"required>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Other Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="other_description" placeholder="Enter Other Description"required>
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