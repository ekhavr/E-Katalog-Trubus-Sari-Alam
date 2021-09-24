<?php include ("../core/dbconfig.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trubus Sari Alam</title>
	<link href="assets1/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets1/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets1/css/datepicker3.css" rel="stylesheet">
	<link href="assets1/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="assets1/fonts/font.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Trubus Sari Alam</span></a>
				
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div> -->
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-home">&nbsp;</em> Beranda</a></li>
			<li><a href="index.php?val=kelolaadmin"><em class="fa fa-group">&nbsp;</em> Kelola Admin</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-reorder">&nbsp;</em> Kelola Produk<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="index.php?val=daftarproduk">
						<span class="fa fa-arrow-right">&nbsp;</span> Produk</a></li>
					<li><a class="" href="index.php?val=kategori">
						<span class="fa fa-arrow-right">&nbsp;</span> Kategori</a></li>
				</ul>
			</li>
			<li><a href="index.php?val=carapesan"><em class="fa fa-cart-plus">&nbsp;</em> Cara Pesan</a></li>
			<li><a href="index.php?val=profil"><em class="fa fa-user">&nbsp;</em> Profil</a></li>
			<li><a href="index.php?val=kontak"><em class="fa fa-phone">&nbsp;</em> Kontak</a></li>
			
			<li><a href="logout.php"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
		<!-- Main Content-->
		<div class="main-content">
				<div class="main-content-inner">
					<?php
						if(isset($_GET['val']) && $_GET['val']=="daftarproduk"){
							include "app/daftarproduk.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="tambahproduk"){
							include "app/tambahproduk.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="tambahgambar"){
							include "app/tambahgambar.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="prosesgambar"){
							include "app/proses_tambahgbr.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kategori"){
							include "app/kategori.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="carapesan"){
							include "app/carapesan.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="cara-edit"){
							include "app/cara-edit.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="profil"){
							include "app/profil.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="profil-edit"){
							include "app/profil-edit.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kontak"){
							include "app/kontak.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kontak-edit"){
							include "app/kontak-edit.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="gambar"){
							include "app/gambar.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kelolaadmin"){
							include "app/kelolaadmin.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="tambahadmin"){
							include "app/tambahadmin.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="prosestambahadmin"){
							include "app/proses_tambahadmin.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="adminhapus"){
							include "app/proses_hapusadmin.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="adminubah"){
							include "app/kelolaadminubah.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="produk-edit"){
							include "app/produk-edit.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="produk-delete"){
							include "app/produk-delete.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kategori-edit"){
							include "app/kategori-edit.php";
						}else
						if(isset($_GET['val']) && $_GET['val']=="kategori-delete"){
							include "app/kategori-delete.php";
						}else
						{
							//halaman utama
							include "app/home.php";
						}
					?>
				</div>
		</div><!-- /.main-content -->
		
		
	
	<script src="assets1/js/jquery-1.11.1.min.js"></script>
	<script src="assets1/js/bootstrap.min.js"></script>
	<script src="assets1/js/chart.min.js"></script>
	<script src="assets1/js/chart-data.js"></script>
	<script src="assets1/js/easypiechart.js"></script>
	<script src="assets1/js/easypiechart-data.js"></script>
	<script src="assets1/js/bootstrap-datepicker.js"></script>
	<script src="assets1/js/custom.js"></script>
		<!-- inline scripts related to this page -->
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

		<script>
		$(function() {
		 	$("ul li").on("click", function() {
		    $("ul li").removeClass("active");
		    $(this).addClass("active");
			  });
	  });

		</script>


		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>
	</body>
</html>
