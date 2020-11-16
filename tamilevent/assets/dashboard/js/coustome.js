// JavaScript Document
$(document).ready(function(){
  $("a#trigger").on('click', function(){
		$("div#sidebar-wrapper").toggleClass('small');
		$("a#trigger").toggleClass('ds-new');
	});
  <!--drowp down-->
  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	  if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
	  }
	  var $subMenu = $(this).next('.dropdown-menu');
	  $subMenu.toggleClass('show');
	
	
	  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass('show');
	  });
	  return false;
	});
	
	<!--date picker-->
	$(function () {
	  $("#datepicker").datepicker({ 
			autoclose: true, 
			todayHighlight: true
	  }).datepicker('update', new Date());
	});
});


$(document).ready(function(){
  $("#Button-log").click(function(){
    $("#Div4").hide();
	$("#Div3").show();
  });
   $("#Button-log-ac").click(function(){
    $("#Div3").hide();
	$("#Div4").show();
  });
  $("#register").click(function(){
    $("#Div4").hide();
	$("#Div3").show();
  });
  $("#forget-bn").click(function(){
    $("#exampleModal").modal('hide');
  });
  
  $('#close').click(function() {
    location.reload();
   });
});

$(document).ready(function(){
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
});

$(document).ready(function() {
  $( window ).scroll(function() {
		var height = $(window).scrollTop();
		if(height >= 100) {
			$('.toogle-bn').addClass('fixed-menu');
		} else {
			$('.toogle-bn').removeClass('fixed-menu');
		}
	});
});


$(function(){
  $('.toggle').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('switc-d1');
  });
});
$(function(){
  $('.toggle2').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('switc-d1');
  });
});
$(function(){
  $('.toggle-new').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('switc-d1');
  });
});

$(function(){
  $('.toggle-new2').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('switc-d3');
  });
});

$(document).ready(function(){
  $("#radio1").click(function(){
	$("#div-edit-show").show();
  });
});


$(document).ready(function() {
  $('#table-show').click(function() {
		  $('.show-onclick').slideToggle();
		  if ($('#table-show').text() == "view less") {
			$(this).text("view more")
		  } else {
			$(this).text("view less")
		  }
		});
});
$(document).ready(function() {
  $('#table-show-3').click(function() {
		  $('.show-onclick3').slideToggle();
		  if ($('#table-show').text() == "View less") {
			$(this).text("View more")
		  } else {
			$(this).text("View less")
		  }
		});
});
$(document).ready(function() {
  $('#table-show-4').click(function() {
		  $('.show-onclick4').slideToggle();
		  if ($('#table-show').text() == "View less") {
			$(this).text("View more")
		  } else {
			$(this).text("View less")
		  }
		});
});

//fancybox

	

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
  var numberOfItems = $("#jar2 .content3").length;
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
    $("#jar2 .content3")
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
  $("#jar2").show();
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


//svae item page





	

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
  var numberOfItems = $("#jar3 .content4").length;
  var limitPerPage = 9;
  // Total pages rounded upwards
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  // Number of buttons at the top, not counting prev/next,
  // but including the dotted buttons.
  // Must be at least 5:
  var paginationSize = 9;
  var currentPage;

  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;
    currentPage = whichPage;
    $("#jar3 .content4")
      .hide()
      .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
      .show();
    // Replace the navigation items (not prev/next):
    $(".pagination2 li").slice(1, -1).remove();
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
  $(".pagination2").append(
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
  $("#jar3").show();
  showPage(1);

  // Use event delegation, as these items are recreated later
  $(
    document
  ).on("click", ".pagination2 li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
  });
  $("#next-page").on("click", function() {
    return showPage(currentPage + 1);
  });

  $("#previous-page").on("click", function() {
    return showPage(currentPage - 1);
  });
  $(".pagination2").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
  });
});


//svae item page






