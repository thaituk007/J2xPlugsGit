<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="csrf-token" content="juoOSzO5lPFc4SKgpQMoPTDjVK3HYAxjbaIRFZHT">
<title>รายงานสถานการณ์โควิด-19 ประจำประเทศไทย</title>
<link href="/css/fonts.css" rel="stylesheet">
<script src="https://covid19.th-stat.com/vendor/jquery/jquery.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/sweetalert/sweetalert2.all.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/moment/moment.js"></script>
<link href="https://covid19.th-stat.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://covid19.th-stat.com/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="https://covid19.th-stat.com/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="https://covid19.th-stat.com/vendor/semantic_ui/semantic.min.css" rel="stylesheet" type="text/css">
<link href="https://covid19.th-stat.com/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/ed9bc597bb.js" crossorigin="anonymous"></script>
<link href="https://covid19.th-stat.com/script/covid_19/style.css?v=8" rel="stylesheet">
<script src="https://covid19.th-stat.com/vendor/jsdelivr/polyfill.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/jsdelivr/classList.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/jsdelivr/findindex_polyfill_mdn.js"></script>
<script src="https://covid19.th-stat.com/vendor/jsdelivr/apexcharts.js"></script>
<script src="https://covid19.th-stat.com/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
<script src="https://covid19.th-stat.com/vendor/jquery-jvectormap/jquery-jvectormap-th-merc.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://covid19.th-stat.com/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="https://covid19.th-stat.com/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis-network.min.css" rel="stylesheet" type="text/css" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159954844-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159954844-1');
    </script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PD7SPDV');</script>
<style>
        section.main-body {
            padding: 0;
            margin: auto;
        }
        #infected_network{
            height: 100%;
        }


    </style>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PD7SPDV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<section class="main-body">
<div class="block-in-body">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 pd-0">
<div class="col-xs-12 col-sm-12 pd-0">
<div class="block-st-all">
<div class="col-xs-12 col-sm-12">
<div class="card-default">
<p>ติดเชื้อสะสม</p>
<h1 style="line-height: inherit;">
1,771
<span>
<br>
(เพิ่มขึ้น 120)
</span>
</h1>
</div>
</div>
<div class="col-xs-4 col-sm-4">
<div class="card-default">
<p>หายแล้ว</p>
<h1>
342
<span><br>&nbsp;</span>
</h1>
</div>
</div>
<div class="col-xs-4 col-sm-4">
<div class="card-default">
<p>รักษาอยู่ใน รพ.</p>
<h1>
1,417
<span><br>
(เพิ่มขึ้น 118)
</span>
</h1>
</div>
</div>
<div class="col-xs-4 col-sm-4">
<div class="card-default">
<p>เสียชีวิต</p>
<h1>
12
<span><br>
(เพิ่มขึ้น 2)
</span>
</h1>
</div>
</div>
</div>
<script>
    function loadToday(){
        $.ajax({
            dataType: "json",
            url: '/api/open/today',
            method: "GET",
            async: false,
            success : function(data){

            }
        });
    }
    loadToday()
</script>
<div class="col-xs-12 col-sm-12 text-right">
<span>อัพเดทข้อมูลล่าสุด : 01/04/2020 12:41</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div>
</div>
</body>
</html>
