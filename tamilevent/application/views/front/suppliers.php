<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>mytamievent - Search Suppliers </title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css" />
<!-- custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/webiste-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/web-site-mobile.css">

<link rel='stylesheet' id='owl.carousel-css'  href='<?php echo base_url();?>assets/css/owl.carousel.min.css' type='text/css' media='all' />



</head>
 <body>
   <header class="sub-page sp_height">
       <div class="spacial-header">
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
       <div class="banner-with-img">
         <img src="<?php echo base_url();?>assets/images/banner.png" alt="banner-pic" class="banner-pic">
         <div class="baner-content">
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
   
   <div class="body-about-page-d1">
     <div class="container">
        
        <div class="row">
           <div class="col-md-4 col-lg-3">
              <div class="filter-menu-area">
                 <h4> Filters </h4>
                 
                 <div class="menu-filter-d1 margin-top">
                    <h5> Events type </h5>
                    <div class="flid-sec-flter">
                      <?php foreach($events as $val){?>
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1"><?=$val->event_name?></label>
                        </div>
                        <?php }?>
                       
                    </div>
                 </div>
                 
                 <div class="menu-filter-d1">
                    <h5> Services </h5>
                    <div class="flid-sec-flter">
                      <?php foreach($services as $val){?>
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1"><?=$val->services?></label>
                        </div>
                        <?php }?>
                       
                    </div>
                 </div>
                 
                 <div class="menu-filter-d1">
                    <h5> Country </h5>
                    <div class="flid-sec-flter">
                       <?php foreach($country as $val){?>
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1"><?=$val->country?></label>
                        </div>
                        <?php }?>

                        
                    </div>
                 </div>
                 
                 <div class="menu-filter-d1">
                    <h5> region based on country </h5>
                    <div class="flid-sec-flter">
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">East Mindlands</label>
                        </div>
                        
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">East of England</label>
                        </div>
                        
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">London</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">North East</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">North West</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Northen Ireland</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Scotland</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">South West</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Wales</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">West Midlands</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">East of England</label>
                        </div>
                        
                        
                    </div>
                 </div>
                 
                 <div class="menu-filter-d1">
                    <h5> Rate </h5>
                    <div class="flid-sec-flter">
                      <?php foreach($rates as $val){?>
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">
                            <?php
                            $n=$val->rate;
                            for($i=1;$i<=$n;$i++)
                            {
                              echo "£";
                              }
                            ?>
                          </label>
                        </div>
                        <?php }?>
                        
                    </div>
                 </div>
                 
                 <div class="clearfix"></div>
                 <div class="col-md-12"> <a href="#" class="apply-bn"> Apply to filter</a> </div>
                 
                               
              </div>
           </div>
           
           <div class="col-md-8 col-lg-9">
              <div id="products" class="supplier-part">
                  <div id="jar">
                    <div class="right-short-sec">
                      <ul>
                        <li> <a href="#"> <span> <i class="fas fa-chevron-up"></i> </span> Sort By Rating </a> </li>
                        <li> <a href="#"> Sort By A-Z </a> </li>
                      </ul>
                    </div>
                    <div class="grid-bn-sec">
                       <ul>
                         <li> <a  id="grid" class="active"> <i class="fas fa-th-large"></i> </a> </li>
                         <li> <a id="list" > <i class="fas fa-th-list"></i> </a> </li>
                       </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div id="posts"  class="row mt-3 mb-3">
                    
                          <?php foreach($users as $val){?>
                          <div class="item col-md-12 col-lg-6 content">
                             <div class="gird-d1s">
                               <div class="post-ima-box">
                                          <a href="<?php echo base_url();?>supplier/profile/<?=$val->id?>">

                                  <img src="<?php echo base_url();?>uploads/<?=$val->cover_image?>" alt="post1">
                                </a>
                               </div>
                               <div class="user-fild">
                                  <div class="user-picture">
                                     <img src="<?php echo base_url();?>uploads/<?=$val->portfolio_image?>" alt="user1">
                                  </div>
                                  <div class="user-dl-sec">
                                     <div class="top-user-d1">
                                                <a href="<?php echo base_url();?>supplier/profile/<?=$val->id?>">

                                       <h5> <?=$val->first_name?>&nbsp;<?=$val->last_name?></h5>
                                     </a>
                                       <ul>
                                        <?php 
                                         $query=$this->db->query("select * from `feedback_master` where `business_id`='".$val->id."'");
                                         foreach($query->result() as $value)
                                         {?>
                                           <?php
                                              $n=$value->rating;
                                              for($i=1;$i<=$n;$i++)
                                              {
                                            ?>
                
                                      <li><i class="far fa-star"></i></li>
                
                                          <?php
                                        }
                                      ?>
                                         <li> <?=$value->rating?> / 5</li>
                                         <?php }?>
                                       </ul>

                                     </div>
                                     <div class="bottom-sec-d2">
                                       <ul>
                                         <li>
                                           <?php
                                                $n=$value->rating;
                                                for($i=1;$i<=$n;$i++)
                                                {
                                                  
                                                echo "£";
                                              
                                        
                                                }
                        
                                            ?>
                                         </li>
                                         <li><?=$val->country?></li>
                                         <li> <a id="save-ft" class="save-bn-show"> 
                                         <i class="fas fa-heart"></i>  Save </a> </li>
                                       </ul>
                                     </div>
                                     
                                     <div class="paragraph-d1 d-none">
                                     <h6>0 feed back</h6>
                                     <p> There is no secret. The reson why we are able to boast of happy clients in an exponentially
                            }
competitive word is obvious. We like to challenge the way think about creativity, strive to provide creative solutions that stand out and have earned a reputation for thinking anew... </p>
                                  </div>
                                  </div>
                               </div>
                             </div>
                             
                          </div>
                        
                      <?php }?>
                     </div>
                    
                  </div>
                  <nav>
                    <ul class="pagination justify-content-center pagination-sm">
                    </ul>
                  </nav>
              </div>
           </div>
        </div>
     </div>
   </div>
   
