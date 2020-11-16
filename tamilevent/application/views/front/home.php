<div class="body-d1">
    <div class="container">
       <div class="comon-heading">
          <h2> Trending Top <span> Categories </span> </h2>
          <p> Find the sservice you need in just few clicks </p>
       </div>
       
       <div class="cate-part">
         <div class="row">
           
           
      
           <?php foreach($category as $val){?>
           <div class="col-md-6 col-lg-3">
              <div class="category-items">
                 <div class="products-pic">
                     <img src="<?php echo base_url();?>uploads/<?=$val->cat_icon?>" alt="pic12" width="50" height="50">
                 </div>
                 <h4> <?=$val->category_name?> </h4>
                 <p><?=$val->description?></p>
              </div>
           </div>
         <?php }?>
           
           <div class="col-md-6 col-lg-3">
              <div class="category-items pt-0">
                 <div class="hover-div-show">
                     <div class="inside-text">
                       <h4> Explore Services </h4>
                       <p> Find everything you need </p>
                       <a href="#"> Show all </a>
                      </div>
                   </div>
           </div>
           
         </div>
       </div>
       
    </div>
  </div>
 </div>
  
  <div class="body-d2">
    <div class="container">
       <div class="comon-heading">
          <h2> How it Works</h2>
          <p> A Worderfull and hassle-free process. </p>
       </div>
       <div class="work-steps">
             <div class="row">
                <div class="col-md-6 col-lg-3">
                   <div class="comon-steps">
                      <div class="steps-img">
                      </div>
                      <h5> Search th supplier you need </h5>
                      <p> Use serach engines to find our suppliers or browse through the categories to find the right supplier for your event.</p>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="comon-steps">
                      <div class="steps-img">
                      </div>
                      <h5> Contact the Supplier </h5>
                      <p> Check out their profile and drop a message in their inbox gettings with supplier wasn't this easy before!  </p>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="comon-steps">
                      <div class="steps-img">
                      </div>
                      <h5> Retrieve a Quote </h5>
                      <p> If the supplier meets your expectation,
ask for quote and crack a deal over the best price.</p>
                   </div>
                </div>
                <div class="col-md-6 col-lg-3">
                   <div class="comon-steps">
                      <div class="steps-img">
                      
                      </div>
                      <h5> Secure Payment </h5>
                      <p> Once you have the supplier, you get to choose a mode of payment as per your convenience. </p>
                   </div>
                </div>
             </div>
       </div>
    </div>
  </div>
  
  <div class="body-d3">
    <div class="container">
        <div class="row">
           <div class="col-md-6">
              <div class="left-apps-text">
                 <h2> Double Your Experience
                 <span> by Downloading <span class="sp-red"> the app! </span> </span> </h2>
                 <p> MyTamilEvent.com on your mobile! <br> Explore, Book and get the work done. </p>
                 
                 <h3> Available soon! </h3> 
                 <ul class="aps-div">
                   <li> <a href="#"> <img src="<?php echo base_url();?>assets/images/app-store.png" alt="pic2"> </a>
                        <a href="#"> <img src="<?php echo base_url();?>assets/images/google-play.png" alt="pic2"> </a>
                   </li>
                 </ul>
              </div>
           </div>
           <div class="col-md-6">
              <img src="<?php echo base_url();?>assets/images/mobile.jpg" alt="pic2">
           </div>
        </div>
    </div>
  </div>
  
  <div class="body-d4">
     <div class="container">
        <div class="comon-heading">
           <h2> Trending <span> Top Suppliers </span> </h2>
           <p> Find the service you need in just few clicks </p>
        </div>
        <div class="trding-qwl">
            <div id="owl-demo2" class="owl-carousel owl-theme owl-loaded owl-drag">
               
               <?php foreach($supplier as $val){?>
               <div class="teding-itms">
                   <div class="tr-user-pic"><img src="<?php echo base_url();?>uploads/<?=$val->portfolio_image?>"></div>
                   

                   <h5> <?=$val->first_name?> </h5>
          
                 
                   <div class="rating">
                     <?php 
                         $query=$this->db->query("select * from `feedback_master` where `business_id`='".$val->id."'");
                         foreach($query->result() as $value)
                         {?>

                     <ul>
                        <?php
                        $n=$value->rating;
                        for($i=1;$i<=$n;$i++)
                        {
                          ?>
                
                      <li><i class="far fa-star"></i></li>
                

                        <?php
                      }
                    ?>
                    </ul>
                    
                    <p><?=$value->rating?>/5</p>
                      <?php }?>

                   </div>



                   <div class="last-items-d1">
                    

                     <ul>
                      <li> <a href="#"> <?=$val->country?>  </a> </li>
                      <li> <a class="like-d1"> <span class="like-show"> <i class="fas fa-heart"></i> Save </span> </a>  </li>
                     </ul>
                  

                   </div>
                 


               </div>
                   <?php }?>

               
            </div>
        </div>
     </div>
  </div>