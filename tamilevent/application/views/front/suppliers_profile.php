<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>mytamievent -Supplier Profile – Contact</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css" />
<!-- custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/webiste-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/web-site-mobile.css">



<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">

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
         <img src="<?php echo base_url();?>assets/images/subpage-banner.jpg" alt="banner-pic" class="banner-pic">
         
       
   </header>
   
   <div class="body-about-page-d1">
     <div class="container">
        <div class="post-items-d1">
           <div class="user-left">
       <?php foreach($supplier_profile as $val){?>

              <div class="user-div-box">
                 <img src="<?php echo base_url();?>uploads/<?=$val->portfolio_image?>" alt="us1">
              </div>
              <ul class="user-rating-div">

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
                <li> (0 Feedback )</li>
              </ul>
           </div>
           <div class="user-right-details">
              <div class="top-detiails-d1">
                 <div class="user-name-sec">
                    <h4> <?=$val->first_name?></h4>
                    <ul class="rating-list">
                      <li> £££ </li>
                      <li>  <?=$val->country?> </li>
                      <li>
                        <a id="save-ft" class="save-bn-show"> 
                              <i class="fas fa-heart"></i>  Save 
                        </a>
                      </li>
                    </ul>
                    
                 </div>
                 <div class="right-project-sec">
                    <ul>
                      <li> <span> 0 </span> Onging <br> Projects </li>
                      <li> <span> 0 </span> Completed <br> Projects </li>
                    </ul>
                 </div>
              </div>
              <div class="bottom-details-d2">
                 <p> <?=$val->other_description?>
                 </p>
                 <a href="#" class="contact-bn-d2" data-toggle="modal" data-target="#contactModal"> Contact </a>
              </div>
           </div>
         <?php }?>
        </div>
        
        <div class="body-fancybox-d1">
           <div class="row">
              <div class="col-md-12 col-lg-9">
                 <div class="fancy-box-sec" id="jar">
                   <div class="col-md-4 content2">
                      <div class="img-items ">
                        <a href="images/Event-pic2.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic2.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic1.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 1">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic3.jpg" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic3.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="https://www.youtube.com/embed/ipw1fQad5sg" data-type="iframe" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic2.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic2.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic1.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 1">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic3.jpg" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic3.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="https://www.youtube.com/embed/ipw1fQad5sg" data-type="iframe" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="https://www.youtube.com/embed/3R13sEZkEBE" data-type="iframe" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic2.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic2.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic1.jpg" data-fancybox="gallery" data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 1">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="images/Event-pic3.jpg" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic3.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                   
                   <div class="col-md-4 content2">
                      <div class="img-items">
                        <a href="https://www.youtube.com/embed/ipw1fQad5sg" data-type="iframe" data-fancybox="gallery"  data-caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ">
                           <img src="<?php echo base_url();?>assets/images/Event-pic1.jpg" alt="pic">
                        </a>
                      </div>
                   </div>
                 </div>
                 
                  <nav>
                    <ul class="pagination justify-content-center pagination-sm">
                    </ul>
                  </nav>
              </div>
              
              <div class="col-md-12 col-lg-3">
                 <div class="right-sec-dv-d1">
                    <h4> Things you should konow </h4>
                    <ul>
                      <li> -50% Non-refundable deposit to secure the booking. </li>
                      <li> -Final payment will be on the day of the event.</li>
                      <li>-Taking booking from May 2021</li>
                    </ul>
                 </div>
                 
                 <div class="right-sec-dv-d1">
                    <h4> Share this Supplier </h4>
                    <ul>
                      <li> <a href="#"> <i class="fab fa-linkedin"></i>  Share on Linkdin </a> </li>
                      <li> <a href="#"> <i class="fab fa-facebook-square"></i> Share on Facebook </a> </li>
                      <li> <a href="#"> <i class="fab fa-twitter-square"></i> Share on Twitter </a></li>
                      <li> <a href="#"> <i class="fab fa-pinterest-square"></i>  Share on Pinterest </a></li>
                    </ul>
                 </div>
                 
                 <div class="right-sec-dv-d1">
                    <h4> Report this supplier </h4>
                    <div class="form-add-div">
                       <div class="form-group">
                          <select class="form-control sp-dp-d2">
                             <option> I have problem with this supplier </option>
                             <option> I have problem with this supplier </option>
                             <option> I have problem with this supplier </option>
                          </select>
                       </div>
                       <div class="form-group">
                          <textarea name="" cols="" rows="" class="form-control sp-text-area"></textarea>
                       </div>
                       <button type="submit" class="submit-d1-bn"> Submit </button>
                    </div>
                 </div>
                 
              </div>
           </div>
        </div>
        
        <div class="body-supli-div">
           <div class="inside-div-d1">
              <h5> Client Feedback</h5>
              <div class="show-defalt">
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d1" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text2" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d2" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro     <div id="show-more-text3" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d3" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text4" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d4" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
              </div>
              
              <div id="hide-defalt">
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d1" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text2" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d2" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text3" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d3" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">
                     <div class="recomand-div">
                        <div class="top-recomaand">
                           <div class="left-recon">
                              <h4> suren Bala </h4>
                              <p> <span> <i class="far fa-calendar-alt"></i> </span> 6 Aug 2020 </p>
                              <h3> Wonderful and very Friendly! </h3>
                           </div>
                           <div class="right-recoman-reting">
                              <ul>
                                <li> 
                                   <span> <i class="far fa-star"></i> </span> 
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="far fa-star"></i> </span>
                                   <span> <i class="fas fa-star-half-alt"></i> </span>
                               </li>
                               <li>
                                 <i class="fas fa-exclamation-circle"></i>
                               </li>
                              </ul>
                           </div>
                        </div>
                        <div class="content-area">
                           <p> Caecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum.Seden utem perspiciatis undesieu omnis volupatatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae ab. lloion inventore veritatisetm quasitea architecto beataea dictaed quia couuntur magni dolores eos aquist ration vtatem seque nesnt. Neque porro  <div id="show-more-text4" class="more-show">
                             <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.    </p>
                           </div>
                           </p>
                           <a id="read-move-d4" class="redd-more-bn"> (read more) </a>
                        </div>
                     </div>
                  </div>
              </div>
              
              <a id="learn-d1-bn" class="len-bn"> Learn more </a>
              
           </div>
        </div>
     </div>
   </div>
   
