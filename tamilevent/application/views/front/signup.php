
 <body>
   <header class="sub-page-2">
     <div class="fixed-top">
          <div class="container-fluid">
             <nav class="navbar navbar-expand-lg navbar-light main-menu">
                  <a class="navbar-brand" href="#">
                     <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">How it works </a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Browse
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle sign-in" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Sign in
                        </a>
                        <div class="dropdown-menu login-div" aria-labelledby="navbarDropdown">
                          <div class="login-inside">
                             <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" required>
                             </div>
                             <div class="form-group">
                                <input type="password" class="form-control" placeholder="password" required>
                             </div>
                             <div class="button-div">
                               <a href="#" class="login-bn-header"> Login </a>
                               <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                                </div>
                             </div>
                          </div>
                          <div class="forget-sec">
                             <a href="#"> Forget Password ? </a>
                             <a href="#"> Create an account </a>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link join-in" href="#"> Join In </a>
                      </li>
                      
                      
                      
                    </ul>
                    
                  </div>
                </nav>
          </div>
     </div>
         <img src="<?php echo base_url();?>assets/images/subpage-banner.jpg" alt="banner-pic" class="banner-pic">
         
       
   </header>
   
   <div class="body-about-page-d1">
     <div class="container">
        <div class="signup-sec">
           
           <div class="form-wizard">
					<form action="" method="post" role="form">
						<div class="form-wizard-header">
							
							<ul class="list-unstyled form-wizard-steps clearfix">
								<li class="active"><span> Your details</span></li>
								<li><span>Email verification</span></li>
								<li><span>Completed</span></li>
							</ul>
						</div>
						<fieldset class="wizard-fieldset show">
                             <h2 class="comon-header-text-d1">Join for good start. </h2>
                            <div class="row justify-content-center">
                                 <div class="col-md-12">
                                   
                                 </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="fname" 
                                        placeholder="First name">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="fname"
                                        placeholder="Last name">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <input type="email" class="form-control wizard-required" id="fname"
                                      placeholder="Email">
                                      <div class="wizard-form-error"></div>
                                   </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="fname" 
                                        placeholder="passwords">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="fname" 
                                        placeholder=" Re-type passwords">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <select class="form-control wizard-required" id="fname">
                                        <option> Country </option>
                                        <option> Country1 </option>
                                        <option> Country2 </option>
                                        <option> Country3 </option>
                                     </select>
                                     <div class="wizard-form-error"></div>
                                  </div>
                               </div>
                            </div>
                            <div class="row">
                              <div class="radiostart">
                                 <h5> Start As:</h5>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="radio1" type="radio">
                                            <label for="radio1">Client <span> 
                                            (Signup as client and hire suppliers) </span></label>
                                        </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-12">
                                    <div class="wizard-form-radio">
                                            <input name="radio-name" id="radio2" type="radio">
                                            <label for="radio2">Business <span> (Signup as client and hire suppliers) 
                                            </span> </label>
                                      </div>
                                 </div>
                                 
                                 <div id="radio-show-div" class="col-md-12">
                                    <div class="show-div-radio">
                                        
                                        <div class="row">
                                           <div class="col-md-6">
                                              <div class="comon-div-checkbox">
                                                 <h5>Event type</h5>
                                                 <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Birthday</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Civil Registartion
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Mehendi / Sangeeth
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Private Party
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Reception
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Saree Ceremony
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Wedding
                                                    </label>
                                                  </div>
                                                  
                                              </div>
                                           </div>
                                           
                                           <div class="col-md-6">
                                              <div class="comon-div-checkbox">
                                                 <h5> Where do you provide your services ?</h5>
                                                 <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                       Worldwide
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      United Kingdom
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Europe
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Asia
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      North America
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      South America
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Africa
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Australia
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Africa
                                                    </label>
                                                  </div>
                                                  
                                              </div>
                                           </div>
                                           
                                           <div class="col-md-6">
                                              <div class="comon-div-checkbox">
                                                 <h5> Services </h5>
                                                 <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Bar & Cocktails
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Cakes
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Catering
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Decoration
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      DJ
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Entertainment
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Henna
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Make-up & hair
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Outfits
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Photography
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      Transpotaion
                                                    </label>
                                                  </div>
                                                  
                                              </div>
                                           </div>
                                           
                                           <div class="col-md-6">
                                              <div class="comon-div-checkbox">
                                                 <h5> Rate </h5>
                                                 <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">£</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      ££
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                      £££
                                                    </label>
                                                  </div>
                                                  
                                              </div>
                                           </div>
                                           
                                        </div>
                                    </div>
                                        
                                 </div>
                                 
                                <div class="col-md-12">
                                   <div class="form-check agree-div">
                                        <input type="checkbox" class="form-check-input wizard-required" id="zcode">
                                        <label class="form-check-label" for="exampleCheck1"> 
                                           Agree our terms & conditon 
                                        </label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            
							
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn login-submit">Login</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h2 class="comon-header-text-d1"> you're almost threre! </h2>
                            
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="eamil-ver-div">
                                     <h5> Please verify your email </h5>
                                     <p class="mt-2"> We sent an email to <a href="#"> name@emailaddress.com </a> </p>
                                     <p> Just click on the link in that email or enter the code provided to complete your signup. if you don’t see it, you may need to check your spam folder. </p>
                                     <h6> Still can't find the email? </h6>
                                     <div class="next-div-bn-sec justify-content-center">
                                      <a href="javascript:;" class="form-wizard-previous-btn re-send-bn">
                                      Back </a>
                                      <a href="javascript:;" class="form-wizard-next-btn re-send-bn"> Resend email</a>
                                      </div>
                                     <p> need help? <a href="#"> Contact Us? </a> </p>
                                  </div>
                               </div>
							</div>
                            
							
						</fieldset>	
							
						<fieldset class="wizard-fieldset">
							<h2 class="comon-header-text-d1"> Congratulation! </h2>
                            
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="eamil-ver-div">
                                     <h5> Welcome to MyTamilEvent.com! </h5>
                                     <p> Your email address was sucessfully verified. Your account is now active.
Please use the link below to login to your account. </p>
                                  </div>
                               </div>
							</div>
							
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-submit last-login-bn">Login your account</a>
							</div>
						</fieldset>	
					</form>
				</div>
        </div>
        
        
        
        
     </div>
   </div>
  