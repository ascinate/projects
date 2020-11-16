<body>
    <header class="sp-index">
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
                         <form method="post" action="<?php echo base_url();?>login/login_user">
                         <div class="dropdown-menu login-div" aria-labelledby="navbarDropdown">
                           <div class="login-inside">
                              <div class="form-group">
                                 <input type="email" class="form-control" name="email" placeholder="email" required>
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control" name="password" placeholder="password" required>
                              </div>
                              <div class="button-div">
                                <input type="submit" name="submit" value="Login" class="login-bn-header">  
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
                       </form>
                       </li>
                       <li class="nav-item active">
                         <a class="nav-link join-in" href="#"> Join In </a>
                       </li>
                       
                       
                       
                     </ul>
                     
                   </div>
                 </nav>
           </div>
      </div>  
          
        <div class="banner-with-img">
          <img src="<?php echo base_url();?>assets/images/banner.png" alt="banner-pic" class="banner-pic">
          <div class="baner-content">
              <h1> Plan your events <span> while enjoying the process </span> </h1>
                <div class="select-part">
                   <div class="form-group serch-div">
                      <input type="text" class="form-control" placeholder="i'm looking for..">
                   </div>
                   <div class="form-group">
                      <select class="form-control sel-sec">
                         <option> Services </option>
                         <option> Services 2 </option>
                         <option> Services 3 </option>
                      </select>
                   </div>
                   <button class="search-bn"> Search </button>
                </div>
          </div>
        </div>
    </header>