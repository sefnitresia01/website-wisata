<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="./pages/qgis/resources/ol.css">
    <link rel="stylesheet" href="./pages/qgis/resources/fontawesome-all.min.css">
    <link rel="stylesheet" href="./pages/qgis/resources/ol-layerswitcher.css">
    <link rel="stylesheet" href="./pages/qgis/resources/qgis2web.css">
    <style>
    .search-layer {
        top: 65px;
        left: .5em;
    }

    .ol-touch .search-layer {
        top: 80px;
    }
    </style>
    <style>
    html,
    body {
        background-color: #ffffff;
    }

    .ol-control button {
        background-color: #f8f8f8 !important;
        color: #000000 !important;
        border-radius: 0px !important;
    }

    .ol-zoom,
    .geolocate,
    .gcd-gl-control .ol-control {
        background-color: rgba(255, 255, 255, .4) !important;
        padding: 3px !important;
    }

    .ol-scale-line {
        background: none !important;
    }

    .ol-scale-line-inner {
        border: 2px solid #f8f8f8 !important;
        border-top: none !important;
        background: rgba(255, 255, 255, 0.5) !important;
        color: black !important;
    }
    </style>
    <style>
    #map {
        width: 1066px;
        height: 540px;
    }
    </style>
    <title></title>

<body>
    <div class="content-header">
        <div class="container-fluid">

            <div class="col-sm-12">
                <h1 class="m-0 text-dark"> Kategori Peta Persebaran Lokasi Objek Wisata di Pulau Sipora Kabupaten
                    Kepulauan Mentawai</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div id="googleMap" style="width:100%;height:430px;position: static; z-index: 50;"></div>
                    </div>
                </div>
            </div><!-- /.col -->

        </div><!-- /.container-fluid -->
    </div>
    <div class="container">

    </div>
    <div id="map">
        <div id="popup" class="ol-popup">
            <a href="#" id="popup-closer" class="ol-popup-closer"></a>
            <div id="popup-content"></div>
        </div>
    </div>
    <script src="./pages/qgis/resources/qgis2web_expressions.js"></script>
    <script src="./pages/qgis/resources/polyfills.js"></script>
    <script src="./pages/qgis/resources/functions.js"></script>
    <script src="./pages/qgis/resources/ol.js"></script>
    <script src="./pages/qgis/resources/ol-layerswitcher.js"></script>
    <script src="./pages/qgis/layers/Batas_Kecamatan_Polygon_1.js"></script>
    <script src="./pages/qgis/layers/Hasil_Survey_gps_2.js"></script>
    <script src="./pages/qgis/layers/JarakJalan_3.js"></script>
    <script src="./pages/qgis/layers/ObjekdanPendukungWisata_4.js"></script>
    <script src="./pages/qgis/layers/ObjekdanPendukungWisata_5.js"></script>
    <script src="./pages/qgis/styles/Batas_Kecamatan_Polygon_1_style.js"></script>
    <script src="./pages/qgis/styles/Hasil_Survey_gps_2_style.js"></script>
    <script src="./pages/qgis/styles/JarakJalan_3_style.js"></script>
    <script src="./pages/qgis/styles/ObjekdanPendukungWisata_4_style.js"></script>
    <script src="./pages/qgis/styles/ObjekdanPendukungWisata_5_style.js"></script>
    <script src="./pages/qgis/./layers/layers.js" type="text/javascript"></script>
    <script src="./pages/qgis/./resources/Autolinker.min.js"></script>
    <script src="./pages/qgis/./resources/qgis2web.js"></script>
</body>

</html>