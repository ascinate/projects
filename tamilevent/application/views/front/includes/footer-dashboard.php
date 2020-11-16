<script src="<?php echo base_url();?>assets/dashboard/js/coustome.js"></script>
 
 <script>
function readURL(input, imgControlName) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $(imgControlName).attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imag").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#ImgPreview";
  readURL(this, imgControlName);
  $('.preview1').addClass('it');
  $('.btn-rmv1').addClass('rmv');
});
$("#imag2").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#ImgPreview2";
  readURL(this, imgControlName);
  $('.preview2').addClass('it2');
  $('.btn-rmv2').addClass('rmv');
});
$("#imag3").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#ImgPreview3";
  readURL(this, imgControlName);
  $('.preview3').addClass('it');
  $('.btn-rmv3').addClass('rmv');
});
$("#imag4").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#ImgPreview4";
  readURL(this, imgControlName);
  $('.preview4').addClass('it');
  $('.btn-rmv4').addClass('rmv');
});
$("#imag5").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#ImgPreview5";
  readURL(this, imgControlName);
  $('.preview5').addClass('it');
  $('.btn-rmv5').addClass('rmv');
});

$("#removeImage1").click(function(e) {
  e.preventDefault();
  $("#imag").val("");
  $("#ImgPreview").attr("src", "");
  $('.preview1').removeClass('it');
  $('.btn-rmv1').removeClass('rmv');
});
$("#removeImage2").click(function(e) {
  e.preventDefault();
  $("#imag2").val("");
  $("#ImgPreview2").attr("src", "");
  $('.preview2').removeClass('it');
  $('.btn-rmv2').removeClass('rmv');
});
//$("#removeImage3").click(function(e) {
//  e.preventDefault();
//  $("#imag3").val("");
//  $("#ImgPreview3").attr("src", "");
//  $('.preview3').removeClass('it');
//  $('.btn-rmv3').removeClass('rmv');
//});
//$("#removeImage4").click(function(e) {
//  e.preventDefault();
//  $("#imag4").val("");
//  $("#ImgPreview4").attr("src", "");
//  $('.preview4').removeClass('it');
//  $('.btn-rmv4').removeClass('rmv');
//});
//$("#removeImage5").click(function(e) {
//  e.preventDefault();
//  $("#imag5").val("");
//  $("#ImgPreview5").attr("src", "");
//  $('.preview5').removeClass('it');
//  $('.btn-rmv5').removeClass('rmv');
//});

</script>



<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_spiritedaway);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Export
chart.exporting.menu = new am4core.ExportMenu();

// Data for both series
var data = [ {
  "year": "15/06",
  "income": 23.5,
  "expenses": 21.1
}, {
  "year": "29/06",
  "income": 26.2,
  "expenses": 30.5
}, {
  "year": "13/06",
}, {
  "year": "27/06",
}, {
  "year": "10/08",
}, {
  "year": "24/08",
}, {
  "year": "07/09",
}  ];

/* Create axes */
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.renderer.minGridDistance = 30;

/* Create value axis */
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

/* Create series */
var columnSeries = chart.series.push(new am4charts.ColumnSeries());
columnSeries.name = "Income";
columnSeries.dataFields.valueY = "income";
columnSeries.dataFields.categoryX = "year";

columnSeries.columns.template.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}[/] [#fff]{additional}[/]"
columnSeries.columns.template.propertyFields.fillOpacity = "fillOpacity";
columnSeries.columns.template.propertyFields.stroke = "stroke";
columnSeries.columns.template.propertyFields.strokeWidth = "strokeWidth";
columnSeries.columns.template.propertyFields.strokeDasharray = "columnDash";
columnSeries.tooltip.label.textAlign = "middle";

var lineSeries = chart.series.push(new am4charts.LineSeries());
lineSeries.name = "Expenses";
lineSeries.dataFields.valueY = "expenses";
lineSeries.dataFields.categoryX = "year";

lineSeries.stroke = am4core.color("#b80f1a");
lineSeries.strokeWidth = 3;
lineSeries.propertyFields.strokeDasharray = "lineDash";
lineSeries.tooltip.label.textAlign = "middle";

var bullet = lineSeries.bullets.push(new am4charts.Bullet());
bullet.fill = am4core.color("#b80f1a"); // tooltips grab fill from parent by default
bullet.tooltipText = "[#fff font-size: 15px]{name} in {categoryX}:\n[/][#fff font-size: 20px]{valueY}[/] [#fff]{additional}[/]"
var circle = bullet.createChild(am4core.Circle);
circle.radius = 4;
circle.fill = am4core.color("#fff");
circle.strokeWidth = 3;

chart.data = data;

}); // end am4core.ready()
</script>


</body>

</html>