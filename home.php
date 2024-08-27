<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Peta Persebaran Lokasi Objek Wisata di Pulau Sipora Kabupaten Kepulauan
                    Mentawai</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="googleMap" style="width:100%;height:430px;position: static; z-index: 50;"></div>
        </div>
    </div>
</div>

<script>
// google maps
axios.get('./pages/lapangan/api_lapangan.php')
    .then(function(response) {
        data = response.data
        data.forEach(element => {
            var marker_cabang = L.marker([element.longitude, element.latitude], {
                    icon: element.objek_wisata_lapangan
                }).addTo(mymap)
                .bindPopup(
                    `<a href='?page=pages/lapangan/detail&idlapangan=${element.id_objek_wisata}'><center>${element.objek_wisata_lapangan}</center><marquee direction="left" scrollamount="5" align="center"> <font color='red'><font size="1"><i>"tesklik disini untuk melihat info detail lapangan"<i></marquee></h2></font></font></span></a>`
                )
                .openPopup();
        });
    })
<?php 

// function read() {
//     include '../../model/koneksi.php';

//     $tmp2 =[];
// $data2 = $koneksi->query("SELECT * FROM tbl_lapangan")or die();
// while ($d2 = $data2->fetch_assoc()) {
//     $tmp2[] = $d2;
// }
// echo json_encode($tmp2);

// }
?>
var myIcon = L.icon({

    iconUrl: 'https://1.bp.blogspot.com/-Tr-jSw-RGlk/WOZhFxqtuBI/AAAAAAAAADs/H2_6N3GKt3kS8ufEsLRcr1LTrJcoaxXnwCPcBGAYYCw/s1600/segitiga12.jpg',
    iconSize: [20, 20], // size of the icon

});

var mymap = L.map('googleMap').setView([-0.9461115952401302, 100.3670597076416], 15);
L.tileLayer(
    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYmlsaGFxaSIsImEiOiJja2wyZDBqcDEwYnZ1MnZ0aGZqMjR4cTE2In0.QUOillKsDV9zHh0MeHVTEw'
    }).addTo(mymap);

axios.get('./pages/lapangan/api_lapangan.php')
    .then(function(response) {
        data = response.data
        data.forEach(element => {
            var marker_cabang = L.marker([element.longitude, element.latitude], {
                    icon: myIcon
                }).addTo(mymap)
                .bindPopup(
                    `
                    <a href='?page=pages/lapangan/detail&idlapangan=${element.id_objek_wisata}'><center>${element.objek_wisata_lapangan}</center><marquee direction="left" scrollamount="5" align="center"> <font color='red'><font size="1"><i>"tesklik disini untuk melihat info detail lapangan"<i></marquee></h2></font></font></span>
                    Jenis Objek Wisata : ${element.jenis_objek_wisata}</a>`
                )
                .openPopup();
        });
    })

// control search
var searchControl = L.esri.Geocoding.geosearch({
    position: 'topright',
    placeholder: 'Masukan Nama Jalan',
    useMapBounds: false,
    providers: [L.esri.Geocoding.arcgisOnlineProvider({
        apikey: 'AAPKf202e83b05504e4ca5e85d4767db699fP7X93ytiyOvYbH5lGBv_wz1m-CMPhEAPoDFhAW8qyVmruGsLWwG3zYrVrAndWufI',
        nearby: {
            lat: 100.3670597076416,
            lng: -0.9461115952401302
        }
    })]
}).addTo(mymap);

var results = L.layerGroup().addTo(mymap);

searchControl.on('results', function(data) {
    results.clearLayers();
    for (var i = data.results.length - 1; i >= 0; i--) {
        results.addLayer(L.marker(data.results[i].latlng));
    }
});
</script>