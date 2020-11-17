<footer>
    <div class="container">
      <div class="row">
           <div class="col-md-6 col-lg-6">
               <div class="footer-inside-d1">
                  <a href="#" class="footer-logo"> <img src="<?php echo base_url();?>assets/images/logo.png" alt="lofooter"> </a>
                  <p> The powerful directory to find the right services you need for your perfect event and keep track of all your supplier's deals in one place.
 With the secure payment method, one to one chat feature and contact based services, put your mind at ease and enjoy the process of your event. </p>
                  <ul class="socal-media">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                  </ul>
                  <p class="copy-text mobil-none"> Copyright © 2021 MyTamilEvent.com, All right Reserved Agara Creations LTD </p>
               </div>
           </div>
           <div class="col-md-6 col-lg-6">
              <div class="row">
                <div class="footer-link-d1">
                   <h4> Links </h4>
                   <ul>
                     <li> <a href="#"> About us </a> </li>
                     <li> <a href="#"> How it works </a> </li>
                     <li> <a href="#"> Privacy and Policy </a> </li>
                     <li> <a href="#"> Contact </a> </li>
                   </ul>
                </div>
                 
                 <div class="footer-apps">
                    <a href="#"> <img src="<?php echo base_url();?>assets/images/app-store.png" alt="ft"> </a>
                    <a href="#"> <img src="<?php echo base_url();?>assets/images/app-store.png" alt="ft2"> </a>
                 </div>
                 <p class="copy-text mobil-show"> Copyright © 2019 The Workreap, All Right Reserved amentotech </p>
              </div>
              
              
           </div>
       </div>
    </div>
 </footer> 
    
 
 <!-- Bootstrap JS -->
  <script src="<?php echo base_url();?>assets/js/jquery-3.4.1.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/popper.min.js" ></script>
   <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
     <script src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js" ></script>

 <!--counter js------------->
 <script src="<?php echo base_url();?>assets/js/coustom.js"></script>
 <script type='text/javascript' src='<?php echo base_url();?>assets/js/owl.carousel.min.js'></script>





<script>

 function getPageList(totalPages, page, maxLength) {
  if (maxLength < 5) throw "maxLength must be at least 5";

  function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
  if (totalPages <= maxLength) {
    // no breaks in list
    return range(1, totalPages);
  }
  if (page <= maxLength - sideWidth - 1 - rightWidth) {
    // no break on left of page
    return range(1, maxLength - sideWidth - 1)
      .concat([0])
      .concat(range(totalPages - sideWidth + 1, totalPages));
  }
  if (page >= totalPages - sideWidth - 1 - rightWidth) {
    // no break on right of page
    return range(1, sideWidth)
      .concat([0])
      .concat(
        range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
      );
  }
  // Breaks on both sides
  return range(1, sideWidth)
    .concat([0])
    .concat(range(page - leftWidth, page + rightWidth))
    .concat([0])
    .concat(range(totalPages - sideWidth + 1, totalPages));
}

$(function() {
  // Number of items and limits the number of items per page
  var numberOfItems = $("#jar .content2").length;
  var limitPerPage = 9;
  // Total pages rounded upwards
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  // Number of buttons at the top, not counting prev/next,
  // but including the dotted buttons.
  // Must be at least 5:
  var paginationSize = 7;
  var currentPage;

  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;
    currentPage = whichPage;
    $("#jar .content2")
      .hide()
      .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
      .show();
    // Replace the navigation items (not prev/next):
    $(".pagination li").slice(1, -1).remove();
    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>")
        .addClass(
          "page-item " +
            (item ? "current-page " : "") +
            (item === currentPage ? "active " : "")
        )
        .append(
          $("<a>")
            .addClass("page-link")
            .attr({
              href: "javascript:void(0)"
            })
            .text(item || "...")
        )
        .insertBefore("#next-page");
    });
    return true;
  }

  // Include the prev/next buttons:
  $(".pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Next")
    )
  );
  // Show the page links
  $("#jar").show();
  showPage(1);

  // Use event delegation, as these items are recreated later
  $(
    document
  ).on("click", ".pagination li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
  });
  $("#next-page").on("click", function() {
    return showPage(currentPage + 1);
  });

  $("#previous-page").on("click", function() {
    return showPage(currentPage - 1);
  });
  $(".pagination").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
  });
});

</script>
<script>
$("[data-fancybox]").fancybox({
    iframe : {
        css : {
            width : '600px'
        }
    }
});
</script>

  </body>
 </html>