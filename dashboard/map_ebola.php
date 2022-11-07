<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script>L_PREFER_CANVAS=false; L_NO_TOUCH=false; L_DISABLE_3D=false;</script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.4.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://rawcdn.githack.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    
    <meta name="viewport" content="width=device-width,
        initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>#map_af95bbf043945b504e3617ea64d61bbc {
        position: relative;
        width: 100.0%;
        height: 100.0%;
        left: 0.0%;
        top: 0.0%;
        }
    </style>
</head>
<body>    
    
    <div class="folium-map" id="map_af95bbf043945b504e3617ea64d61bbc" ></div>
</body>
<script>    
    
    
        var bounds = null;
    

    var map_af95bbf043945b504e3617ea64d61bbc = L.map(
        'map_af95bbf043945b504e3617ea64d61bbc', {
        center: [20, 70],
        zoom: 4,
        maxBounds: bounds,
        layers: [],
        worldCopyJump: false,
        crs: L.CRS.EPSG3857,
        zoomControl: true,
        });


    
    var tile_layer_65095f33e0a655c00677d8e1ba35326e = L.tileLayer(
        'https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}.jpg',
        {
        "attribution": null,
        "detectRetina": false,
        "maxNativeZoom": 18,
        "maxZoom": 18,
        "minZoom": 0,
        "noWrap": false,
        "opacity": 1,
        "subdomains": "abc",
        "tms": false
}).addTo(map_af95bbf043945b504e3617ea64d61bbc);
    
            var circle_marker_ca55787ad27e3eb723af4d82b4c2fda6 = L.circleMarker(
                [40.463667, -3.74922],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_4872f07ff66b52c23e117b1815d5c768 = L.popup({maxWidth: '100%'
            
            });

            
                var html_0669b7cf524fec143837878b9c372cc3 = $(`<div id="html_0669b7cf524fec143837878b9c372cc3" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Spain <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_4872f07ff66b52c23e117b1815d5c768.setContent(html_0669b7cf524fec143837878b9c372cc3);
            

            circle_marker_ca55787ad27e3eb723af4d82b4c2fda6.bindPopup(popup_4872f07ff66b52c23e117b1815d5c768)
            ;

            
        
    
            var circle_marker_881b9214dd357fd5e0eb4726aa7e5877 = L.circleMarker(
                [40.463667, -3.74922],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_b17d6e10a015827751d2a9e96f0f6ff6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e9658bd4074099b1ba4c66044443bc07 = $(`<div id="html_e9658bd4074099b1ba4c66044443bc07" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Spain <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_b17d6e10a015827751d2a9e96f0f6ff6.setContent(html_e9658bd4074099b1ba4c66044443bc07);
            

            circle_marker_881b9214dd357fd5e0eb4726aa7e5877.bindPopup(popup_b17d6e10a015827751d2a9e96f0f6ff6)
            ;

            
        
    
            var circle_marker_d027859adedf075a75654a9748c5a8c1 = L.circleMarker(
                [40.463667, -3.74922],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_d57d33bf9042d6ef0c41b79f95ccc3af = L.popup({maxWidth: '100%'
            
            });

            
                var html_3564bc7442c3c36f6b9e4cbb94a38433 = $(`<div id="html_3564bc7442c3c36f6b9e4cbb94a38433" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Spain <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_d57d33bf9042d6ef0c41b79f95ccc3af.setContent(html_3564bc7442c3c36f6b9e4cbb94a38433);
            

            circle_marker_d027859adedf075a75654a9748c5a8c1.bindPopup(popup_d57d33bf9042d6ef0c41b79f95ccc3af)
            ;

            
        
    
            var circle_marker_b2db49617fdc175eefa38e0ec51c300c = L.circleMarker(
                [40.463667, -3.74922],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_4554423968ccf847612d9962846ccf26 = L.popup({maxWidth: '100%'
            
            });

            
                var html_50db73de8dba3876863312bafc803d05 = $(`<div id="html_50db73de8dba3876863312bafc803d05" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Spain <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_4554423968ccf847612d9962846ccf26.setContent(html_50db73de8dba3876863312bafc803d05);
            

            circle_marker_b2db49617fdc175eefa38e0ec51c300c.bindPopup(popup_4554423968ccf847612d9962846ccf26)
            ;

            
        
    
            var circle_marker_5786ac0d2b587df7c878c4a592231d08 = L.circleMarker(
                [9.945587, -9.696645],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_2edbfb93855018abf2af643cefc986dd = L.popup({maxWidth: '100%'
            
            });

            
                var html_ea701d0a509b8848d97062eb25b527cf = $(`<div id="html_ea701d0a509b8848d97062eb25b527cf" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Guinea <strong>Total Cases</strong>: 3351.0</div>`)[0];
                popup_2edbfb93855018abf2af643cefc986dd.setContent(html_ea701d0a509b8848d97062eb25b527cf);
            

            circle_marker_5786ac0d2b587df7c878c4a592231d08.bindPopup(popup_2edbfb93855018abf2af643cefc986dd)
            ;

            
        
    
            var circle_marker_cda4ea80ec9c84a5d1de74088634521c = L.circleMarker(
                [9.945587, -9.696645],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_68a5bdf04ce08f6d9e766c457714f115 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b981955a9de59e28fe97a996dc00d3fb = $(`<div id="html_b981955a9de59e28fe97a996dc00d3fb" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Guinea <strong>Total Cases</strong>: 453.0</div>`)[0];
                popup_68a5bdf04ce08f6d9e766c457714f115.setContent(html_b981955a9de59e28fe97a996dc00d3fb);
            

            circle_marker_cda4ea80ec9c84a5d1de74088634521c.bindPopup(popup_68a5bdf04ce08f6d9e766c457714f115)
            ;

            
        
    
            var circle_marker_5e2f592393916425ea0f86a5f7d79953 = L.circleMarker(
                [9.945587, -9.696645],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_a2c9083fea60d9fb29850b3c15ef386a = L.popup({maxWidth: '100%'
            
            });

            
                var html_f9c7176d6796edc1abb0188dc60be4b2 = $(`<div id="html_f9c7176d6796edc1abb0188dc60be4b2" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Guinea <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_a2c9083fea60d9fb29850b3c15ef386a.setContent(html_f9c7176d6796edc1abb0188dc60be4b2);
            

            circle_marker_5e2f592393916425ea0f86a5f7d79953.bindPopup(popup_a2c9083fea60d9fb29850b3c15ef386a)
            ;

            
        
    
            var circle_marker_5ebdd6ec1097c5278c4635d36d496848 = L.circleMarker(
                [9.945587, -9.696645],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_04c39fb32710a06ece88b95000c4f6ff = L.popup({maxWidth: '100%'
            
            });

            
                var html_7dc090212d5e24c10e4e64e9c74fe1f8 = $(`<div id="html_7dc090212d5e24c10e4e64e9c74fe1f8" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Guinea <strong>Total Cases</strong>: 3804.0</div>`)[0];
                popup_04c39fb32710a06ece88b95000c4f6ff.setContent(html_7dc090212d5e24c10e4e64e9c74fe1f8);
            

            circle_marker_5ebdd6ec1097c5278c4635d36d496848.bindPopup(popup_04c39fb32710a06ece88b95000c4f6ff)
            ;

            
        
    
            var circle_marker_0ede4d39861a87c2608b5c6df94956fe = L.circleMarker(
                [41.87194, 12.56738],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_409e75731351f13d6fe6baba62b230cd = L.popup({maxWidth: '100%'
            
            });

            
                var html_a2fde8dbc3edbd5cea116e6d3426e5b5 = $(`<div id="html_a2fde8dbc3edbd5cea116e6d3426e5b5" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Italy <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_409e75731351f13d6fe6baba62b230cd.setContent(html_a2fde8dbc3edbd5cea116e6d3426e5b5);
            

            circle_marker_0ede4d39861a87c2608b5c6df94956fe.bindPopup(popup_409e75731351f13d6fe6baba62b230cd)
            ;

            
        
    
            var circle_marker_02277bae2873f4aaad03c262bea56e07 = L.circleMarker(
                [41.87194, 12.56738],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_ddda7d75a8d9d1de1bd1328d234e3c59 = L.popup({maxWidth: '100%'
            
            });

            
                var html_f6b7bc76cdf967547d46559b6828eb6e = $(`<div id="html_f6b7bc76cdf967547d46559b6828eb6e" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Italy <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_ddda7d75a8d9d1de1bd1328d234e3c59.setContent(html_f6b7bc76cdf967547d46559b6828eb6e);
            

            circle_marker_02277bae2873f4aaad03c262bea56e07.bindPopup(popup_ddda7d75a8d9d1de1bd1328d234e3c59)
            ;

            
        
    
            var circle_marker_c38891272ee09819f561f5a50130f398 = L.circleMarker(
                [41.87194, 12.56738],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_28d83385d6d013e690dc262b79d2957b = L.popup({maxWidth: '100%'
            
            });

            
                var html_cda7cc3b3066588e39fa6b9f65e3f2ef = $(`<div id="html_cda7cc3b3066588e39fa6b9f65e3f2ef" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Italy <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_28d83385d6d013e690dc262b79d2957b.setContent(html_cda7cc3b3066588e39fa6b9f65e3f2ef);
            

            circle_marker_c38891272ee09819f561f5a50130f398.bindPopup(popup_28d83385d6d013e690dc262b79d2957b)
            ;

            
        
    
            var circle_marker_cef4cb098c83c42cd4c8e4be5c6b86af = L.circleMarker(
                [41.87194, 12.56738],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_c8a0fe58a0b9d1cd008fbf7ae01789fa = L.popup({maxWidth: '100%'
            
            });

            
                var html_861f1b7a123cd662d9e7d313b43c2555 = $(`<div id="html_861f1b7a123cd662d9e7d313b43c2555" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Italy <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_c8a0fe58a0b9d1cd008fbf7ae01789fa.setContent(html_861f1b7a123cd662d9e7d313b43c2555);
            

            circle_marker_cef4cb098c83c42cd4c8e4be5c6b86af.bindPopup(popup_c8a0fe58a0b9d1cd008fbf7ae01789fa)
            ;

            
        
    
            var circle_marker_0646c40468e824515c9cc2960c60782a = L.circleMarker(
                [6.428055, -9.429499],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_3d357d10e2c6d4f0f75ed9df0e500108 = L.popup({maxWidth: '100%'
            
            });

            
                var html_199c18ceb4d7ba13628d308c81f2370f = $(`<div id="html_199c18ceb4d7ba13628d308c81f2370f" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Liberia <strong>Total Cases</strong>: 3151.0</div>`)[0];
                popup_3d357d10e2c6d4f0f75ed9df0e500108.setContent(html_199c18ceb4d7ba13628d308c81f2370f);
            

            circle_marker_0646c40468e824515c9cc2960c60782a.bindPopup(popup_3d357d10e2c6d4f0f75ed9df0e500108)
            ;

            
        
    
            var circle_marker_7b0ae45b5049cd4637a42e8b05aad39e = L.circleMarker(
                [6.428055, -9.429499],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_ff1692b0fa23bdc97c1f1610a6bef871 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2aa24916076d223f4426c3c96a62301b = $(`<div id="html_2aa24916076d223f4426c3c96a62301b" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Liberia <strong>Total Cases</strong>: 1879.0</div>`)[0];
                popup_ff1692b0fa23bdc97c1f1610a6bef871.setContent(html_2aa24916076d223f4426c3c96a62301b);
            

            circle_marker_7b0ae45b5049cd4637a42e8b05aad39e.bindPopup(popup_ff1692b0fa23bdc97c1f1610a6bef871)
            ;

            
        
    
            var circle_marker_d59012369f8fce78bd344f66a69b7fe0 = L.circleMarker(
                [6.428055, -9.429499],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_0f889519da5c7cebbc63e0dd269dfd9b = L.popup({maxWidth: '100%'
            
            });

            
                var html_ad5c973196dd06a902314703a4b0c759 = $(`<div id="html_ad5c973196dd06a902314703a4b0c759" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Liberia <strong>Total Cases</strong>: 5636.0</div>`)[0];
                popup_0f889519da5c7cebbc63e0dd269dfd9b.setContent(html_ad5c973196dd06a902314703a4b0c759);
            

            circle_marker_d59012369f8fce78bd344f66a69b7fe0.bindPopup(popup_0f889519da5c7cebbc63e0dd269dfd9b)
            ;

            
        
    
            var circle_marker_8a42a2465a9859c705780d242336cf31 = L.circleMarker(
                [6.428055, -9.429499],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_2461b69f3a10070594503dae26721c9f = L.popup({maxWidth: '100%'
            
            });

            
                var html_2ccb0af99efb76b530c697e92b48edf2 = $(`<div id="html_2ccb0af99efb76b530c697e92b48edf2" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Liberia <strong>Total Cases</strong>: 10666.0</div>`)[0];
                popup_2461b69f3a10070594503dae26721c9f.setContent(html_2ccb0af99efb76b530c697e92b48edf2);
            

            circle_marker_8a42a2465a9859c705780d242336cf31.bindPopup(popup_2461b69f3a10070594503dae26721c9f)
            ;

            
        
    
            var circle_marker_6afee8b278a4d0c30d3993dcaf06fe01 = L.circleMarker(
                [17.570692, -3.996166],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_dfc89ff86726d648f4acc7cee4e80297 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c73e6fe518685bffb0fda6cc7819b6cf = $(`<div id="html_c73e6fe518685bffb0fda6cc7819b6cf" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Mali <strong>Total Cases</strong>: 7.0</div>`)[0];
                popup_dfc89ff86726d648f4acc7cee4e80297.setContent(html_c73e6fe518685bffb0fda6cc7819b6cf);
            

            circle_marker_6afee8b278a4d0c30d3993dcaf06fe01.bindPopup(popup_dfc89ff86726d648f4acc7cee4e80297)
            ;

            
        
    
            var circle_marker_d671abce0c1b47b0c23663ada4f05759 = L.circleMarker(
                [17.570692, -3.996166],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_27990e51f683be728b22ff6d6b47b150 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8751056aca93b15ba622359a24a47fb3 = $(`<div id="html_8751056aca93b15ba622359a24a47fb3" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Mali <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_27990e51f683be728b22ff6d6b47b150.setContent(html_8751056aca93b15ba622359a24a47fb3);
            

            circle_marker_d671abce0c1b47b0c23663ada4f05759.bindPopup(popup_27990e51f683be728b22ff6d6b47b150)
            ;

            
        
    
            var circle_marker_84439aaa1c21eab4f07e7c6617b10bdc = L.circleMarker(
                [17.570692, -3.996166],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_390d57d0e3dc5b88d2e18804ad2fca61 = L.popup({maxWidth: '100%'
            
            });

            
                var html_95b4d0819c241c7e6fd56c93a0434860 = $(`<div id="html_95b4d0819c241c7e6fd56c93a0434860" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Mali <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_390d57d0e3dc5b88d2e18804ad2fca61.setContent(html_95b4d0819c241c7e6fd56c93a0434860);
            

            circle_marker_84439aaa1c21eab4f07e7c6617b10bdc.bindPopup(popup_390d57d0e3dc5b88d2e18804ad2fca61)
            ;

            
        
    
            var circle_marker_07373ed4043597c448cff03ef6c959db = L.circleMarker(
                [17.570692, -3.996166],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_142cc8caefcf68a6f56c0006ecf4b006 = L.popup({maxWidth: '100%'
            
            });

            
                var html_95d71cf0b021b8910fa7e06226026955 = $(`<div id="html_95d71cf0b021b8910fa7e06226026955" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Mali <strong>Total Cases</strong>: 8.0</div>`)[0];
                popup_142cc8caefcf68a6f56c0006ecf4b006.setContent(html_95d71cf0b021b8910fa7e06226026955);
            

            circle_marker_07373ed4043597c448cff03ef6c959db.bindPopup(popup_142cc8caefcf68a6f56c0006ecf4b006)
            ;

            
        
    
            var circle_marker_ab519b2c6989eea5f9d9b3ebc7745719 = L.circleMarker(
                [9.081999, 8.675277],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_edacb3235514ddc76f3675bf6bb8aa1c = L.popup({maxWidth: '100%'
            
            });

            
                var html_13fd929dc96a7ab6591398c02a2cc8f7 = $(`<div id="html_13fd929dc96a7ab6591398c02a2cc8f7" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Nigeria <strong>Total Cases</strong>: 19.0</div>`)[0];
                popup_edacb3235514ddc76f3675bf6bb8aa1c.setContent(html_13fd929dc96a7ab6591398c02a2cc8f7);
            

            circle_marker_ab519b2c6989eea5f9d9b3ebc7745719.bindPopup(popup_edacb3235514ddc76f3675bf6bb8aa1c)
            ;

            
        
    
            var circle_marker_96b7428a4824ac5bcf8cd4eee0926056 = L.circleMarker(
                [9.081999, 8.675277],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_ae5bd46955f0a22bc4e99f50d865c465 = L.popup({maxWidth: '100%'
            
            });

            
                var html_73791486d7e52b227194984754572cf8 = $(`<div id="html_73791486d7e52b227194984754572cf8" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Nigeria <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_ae5bd46955f0a22bc4e99f50d865c465.setContent(html_73791486d7e52b227194984754572cf8);
            

            circle_marker_96b7428a4824ac5bcf8cd4eee0926056.bindPopup(popup_ae5bd46955f0a22bc4e99f50d865c465)
            ;

            
        
    
            var circle_marker_bc2008c429508fa64152cb42cff1d933 = L.circleMarker(
                [9.081999, 8.675277],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_2718aa39ce2915df677eab60c7e9cfc8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_fe60643ef94107d89653cea798e8f456 = $(`<div id="html_fe60643ef94107d89653cea798e8f456" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Nigeria <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_2718aa39ce2915df677eab60c7e9cfc8.setContent(html_fe60643ef94107d89653cea798e8f456);
            

            circle_marker_bc2008c429508fa64152cb42cff1d933.bindPopup(popup_2718aa39ce2915df677eab60c7e9cfc8)
            ;

            
        
    
            var circle_marker_a384d9064782436999c3076a20108bf3 = L.circleMarker(
                [9.081999, 8.675277],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_f67a07e5152b3508d63dcd3083ff43ce = L.popup({maxWidth: '100%'
            
            });

            
                var html_dff861e17625fcd2d588315d6d2874bd = $(`<div id="html_dff861e17625fcd2d588315d6d2874bd" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Nigeria <strong>Total Cases</strong>: 20.0</div>`)[0];
                popup_f67a07e5152b3508d63dcd3083ff43ce.setContent(html_dff861e17625fcd2d588315d6d2874bd);
            

            circle_marker_a384d9064782436999c3076a20108bf3.bindPopup(popup_f67a07e5152b3508d63dcd3083ff43ce)
            ;

            
        
    
            var circle_marker_0bd86e66ddbcb3ffa032ee240babe3b8 = L.circleMarker(
                [8.460555, -11.779889],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_7f2971715f78c95cf54092dad883c00d = L.popup({maxWidth: '100%'
            
            });

            
                var html_053232d696b049fc9ce321b1a4c68a48 = $(`<div id="html_053232d696b049fc9ce321b1a4c68a48" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Sierra leone <strong>Total Cases</strong>: 8704.0</div>`)[0];
                popup_7f2971715f78c95cf54092dad883c00d.setContent(html_053232d696b049fc9ce321b1a4c68a48);
            

            circle_marker_0bd86e66ddbcb3ffa032ee240babe3b8.bindPopup(popup_7f2971715f78c95cf54092dad883c00d)
            ;

            
        
    
            var circle_marker_a282ca9bffce66062af06a92e8066cc2 = L.circleMarker(
                [8.460555, -11.779889],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_c59324e1adf89bc02095c1d469a56ae5 = L.popup({maxWidth: '100%'
            
            });

            
                var html_a86b2121b1090f87c15cbb95fb4103c5 = $(`<div id="html_a86b2121b1090f87c15cbb95fb4103c5" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Sierra leone <strong>Total Cases</strong>: 287.0</div>`)[0];
                popup_c59324e1adf89bc02095c1d469a56ae5.setContent(html_a86b2121b1090f87c15cbb95fb4103c5);
            

            circle_marker_a282ca9bffce66062af06a92e8066cc2.bindPopup(popup_c59324e1adf89bc02095c1d469a56ae5)
            ;

            
        
    
            var circle_marker_334d16359b77262e9d0cc003b48077f2 = L.circleMarker(
                [8.460555, -11.779889],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_7258aaf11efdd87c3affa5f10e9e9a3e = L.popup({maxWidth: '100%'
            
            });

            
                var html_617d7afe44bcf8a0acfc45a3315f02c0 = $(`<div id="html_617d7afe44bcf8a0acfc45a3315f02c0" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Sierra leone <strong>Total Cases</strong>: 5131.0</div>`)[0];
                popup_7258aaf11efdd87c3affa5f10e9e9a3e.setContent(html_617d7afe44bcf8a0acfc45a3315f02c0);
            

            circle_marker_334d16359b77262e9d0cc003b48077f2.bindPopup(popup_7258aaf11efdd87c3affa5f10e9e9a3e)
            ;

            
        
    
            var circle_marker_ac6dcdf6470c4889911aa7e1441ff319 = L.circleMarker(
                [8.460555, -11.779889],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_5c473a7f385088d978ea761c19845d62 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2e6cd21c355c76644f69ebaa6075efa8 = $(`<div id="html_2e6cd21c355c76644f69ebaa6075efa8" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Sierra leone <strong>Total Cases</strong>: 14122.0</div>`)[0];
                popup_5c473a7f385088d978ea761c19845d62.setContent(html_2e6cd21c355c76644f69ebaa6075efa8);
            

            circle_marker_ac6dcdf6470c4889911aa7e1441ff319.bindPopup(popup_5c473a7f385088d978ea761c19845d62)
            ;

            
        
    
            var circle_marker_d1f3d2e46d12849332b2072a60955e94 = L.circleMarker(
                [14.497401, -14.452362],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_b5a22581c58df00d9f9cb00ac32e6f27 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b75cbabe769d03c57d0c99ea85fa1cc4 = $(`<div id="html_b75cbabe769d03c57d0c99ea85fa1cc4" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Senegal <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_b5a22581c58df00d9f9cb00ac32e6f27.setContent(html_b75cbabe769d03c57d0c99ea85fa1cc4);
            

            circle_marker_d1f3d2e46d12849332b2072a60955e94.bindPopup(popup_b5a22581c58df00d9f9cb00ac32e6f27)
            ;

            
        
    
            var circle_marker_d0fc3992bf786d31e4f474a62c8c2f14 = L.circleMarker(
                [14.497401, -14.452362],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_b661e6dbc6f9b69688272cdcf912e8b5 = L.popup({maxWidth: '100%'
            
            });

            
                var html_47576d9847dfb34828839e55369ed7f5 = $(`<div id="html_47576d9847dfb34828839e55369ed7f5" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Senegal <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_b661e6dbc6f9b69688272cdcf912e8b5.setContent(html_47576d9847dfb34828839e55369ed7f5);
            

            circle_marker_d0fc3992bf786d31e4f474a62c8c2f14.bindPopup(popup_b661e6dbc6f9b69688272cdcf912e8b5)
            ;

            
        
    
            var circle_marker_7ce44c895730e0ada5296208de8dfec3 = L.circleMarker(
                [14.497401, -14.452362],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_9230e1856fe478394adc18e128660e6b = L.popup({maxWidth: '100%'
            
            });

            
                var html_666eb0bc4073f9af05c8d2e4317c5e8a = $(`<div id="html_666eb0bc4073f9af05c8d2e4317c5e8a" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Senegal <strong>Total Cases</strong>: 0.0</div>`)[0];
                popup_9230e1856fe478394adc18e128660e6b.setContent(html_666eb0bc4073f9af05c8d2e4317c5e8a);
            

            circle_marker_7ce44c895730e0ada5296208de8dfec3.bindPopup(popup_9230e1856fe478394adc18e128660e6b)
            ;

            
        
    
            var circle_marker_db6b1251d9f8fcab62a3e35db3f75270 = L.circleMarker(
                [14.497401, -14.452362],
                {
  "bubblingMouseEvents": true,
  "color": "red",
  "dashArray": null,
  "dashOffset": null,
  "fill": true,
  "fillColor": "red",
  "fillOpacity": 0.3,
  "fillRule": "evenodd",
  "lineCap": "round",
  "lineJoin": "round",
  "opacity": 1.0,
  "stroke": true,
  "weight": 3
}
                )
                .addTo(map_af95bbf043945b504e3617ea64d61bbc);
            
    
            var popup_a856586d56fbe42462c13a972a799f81 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8196e4a99eff09171d57428b260dc323 = $(`<div id="html_8196e4a99eff09171d57428b260dc323" style="width: 100.0%; height: 100.0%;"><strong>State</strong>: Senegal <strong>Total Cases</strong>: 1.0</div>`)[0];
                popup_a856586d56fbe42462c13a972a799f81.setContent(html_8196e4a99eff09171d57428b260dc323);
            

            circle_marker_db6b1251d9f8fcab62a3e35db3f75270.bindPopup(popup_a856586d56fbe42462c13a972a799f81)
            ;

            
        
</script>