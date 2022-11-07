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
    <style>#map_2cbb88844eeedbdf8ad5eca4e827e6d7 {
        position: relative;
        width: 100.0%;
        height: 100.0%;
        left: 0.0%;
        top: 0.0%;
        }
    </style>
</head>
<body>    
    
    <div class="folium-map" id="map_2cbb88844eeedbdf8ad5eca4e827e6d7" ></div>
</body>
<script>    
    
    
        var bounds = null;
    

    var map_2cbb88844eeedbdf8ad5eca4e827e6d7 = L.map(
        'map_2cbb88844eeedbdf8ad5eca4e827e6d7', {
        center: [20, 70],
        zoom: 4,
        maxBounds: bounds,
        layers: [],
        worldCopyJump: false,
        crs: L.CRS.EPSG3857,
        zoomControl: true,
        });


    
    var tile_layer_b4bd7b53bda193144aa4a57fb43496d6 = L.tileLayer(
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
}).addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
    
            var circle_marker_4139f1ca5500e70793ef5043bb931086 = L.circleMarker(
                [42.546245, 1.601554],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a35a36c26ef6c3d7ccaab3d06b95c5f8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_3d05344db30f4d8fa1c129f9f6d43235 = $(`<div id="html_3d05344db30f4d8fa1c129f9f6d43235" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Andorra <strong>       Total Cases </strong>: 40175</div>`)[0];
                popup_a35a36c26ef6c3d7ccaab3d06b95c5f8.setContent(html_3d05344db30f4d8fa1c129f9f6d43235);
            

            circle_marker_4139f1ca5500e70793ef5043bb931086.bindPopup(popup_a35a36c26ef6c3d7ccaab3d06b95c5f8)
            ;

            
        
    
            var circle_marker_7ec3f591615177eba703c4db193dbd80 = L.circleMarker(
                [23.424076, 53.847818],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5c70734985ab570a2d9319aebafca7a6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_d6f107b277399892d1ad2e122750b807 = $(`<div id="html_d6f107b277399892d1ad2e122750b807" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: United arab emirates <strong>       Total Cases </strong>: 890627</div>`)[0];
                popup_5c70734985ab570a2d9319aebafca7a6.setContent(html_d6f107b277399892d1ad2e122750b807);
            

            circle_marker_7ec3f591615177eba703c4db193dbd80.bindPopup(popup_5c70734985ab570a2d9319aebafca7a6)
            ;

            
        
    
            var circle_marker_98b1883311098f507799360a17039d16 = L.circleMarker(
                [33.93911, 67.709953],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c610350e57b028736dfc014d6a647fd1 = L.popup({maxWidth: '100%'
            
            });

            
                var html_3e3178f36150b63e1ca749dccded5525 = $(`<div id="html_3e3178f36150b63e1ca749dccded5525" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Afghanistan <strong>       Total Cases </strong>: 170303</div>`)[0];
                popup_c610350e57b028736dfc014d6a647fd1.setContent(html_3e3178f36150b63e1ca749dccded5525);
            

            circle_marker_98b1883311098f507799360a17039d16.bindPopup(popup_c610350e57b028736dfc014d6a647fd1)
            ;

            
        
    
            var circle_marker_6e232eaa9b9d3ed7eaf4cf76fb393032 = L.circleMarker(
                [17.060816, -61.796428],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0bdcd67aeececb9ee58b82a20ad46a9d = L.popup({maxWidth: '100%'
            
            });

            
                var html_89fc9da09e41108af594099d11361c9e = $(`<div id="html_89fc9da09e41108af594099d11361c9e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Antigua and barbuda <strong>       Total Cases </strong>: 7358</div>`)[0];
                popup_0bdcd67aeececb9ee58b82a20ad46a9d.setContent(html_89fc9da09e41108af594099d11361c9e);
            

            circle_marker_6e232eaa9b9d3ed7eaf4cf76fb393032.bindPopup(popup_0bdcd67aeececb9ee58b82a20ad46a9d)
            ;

            
        
    
            var circle_marker_e1f2a19046546af94a358c996fb1b6d5 = L.circleMarker(
                [18.220554, -63.068615],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f8f97356c96ca59b1af9ea27f58b1d8e = L.popup({maxWidth: '100%'
            
            });

            
                var html_873c607bbde05987d2bd833e4471d639 = $(`<div id="html_873c607bbde05987d2bd833e4471d639" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Anguilla <strong>       Total Cases </strong>: 2708</div>`)[0];
                popup_f8f97356c96ca59b1af9ea27f58b1d8e.setContent(html_873c607bbde05987d2bd833e4471d639);
            

            circle_marker_e1f2a19046546af94a358c996fb1b6d5.bindPopup(popup_f8f97356c96ca59b1af9ea27f58b1d8e)
            ;

            
        
    
            var circle_marker_a143059b3b409694b10aadff52a7b7da = L.circleMarker(
                [41.153332, 20.168331],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e95f7b913cbff438106bb16dfd46f3ab = L.popup({maxWidth: '100%'
            
            });

            
                var html_4f5396587a43f12afc3608711e3c37d6 = $(`<div id="html_4f5396587a43f12afc3608711e3c37d6" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Albania <strong>       Total Cases </strong>: 270616</div>`)[0];
                popup_e95f7b913cbff438106bb16dfd46f3ab.setContent(html_4f5396587a43f12afc3608711e3c37d6);
            

            circle_marker_a143059b3b409694b10aadff52a7b7da.bindPopup(popup_e95f7b913cbff438106bb16dfd46f3ab)
            ;

            
        
    
            var circle_marker_5acc9f29b544ace22dab992e9aadb118 = L.circleMarker(
                [40.069099, 45.038189],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_244a1394ed3462f439df766b109f092b = L.popup({maxWidth: '100%'
            
            });

            
                var html_4105f6da3bdc17020c67c99acfc0b84b = $(`<div id="html_4105f6da3bdc17020c67c99acfc0b84b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Armenia <strong>       Total Cases </strong>: 414024</div>`)[0];
                popup_244a1394ed3462f439df766b109f092b.setContent(html_4105f6da3bdc17020c67c99acfc0b84b);
            

            circle_marker_5acc9f29b544ace22dab992e9aadb118.bindPopup(popup_244a1394ed3462f439df766b109f092b)
            ;

            
        
    
            var circle_marker_e8c587c8313870f34b1802472ee21b31 = L.circleMarker(
                [-11.202692, 17.873887],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_94158058304a505f09ccec9e6a83a14f = L.popup({maxWidth: '100%'
            
            });

            
                var html_dbc8117140f941d1ad4ae97eb4020a86 = $(`<div id="html_dbc8117140f941d1ad4ae97eb4020a86" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Angola <strong>       Total Cases </strong>: 97294</div>`)[0];
                popup_94158058304a505f09ccec9e6a83a14f.setContent(html_dbc8117140f941d1ad4ae97eb4020a86);
            

            circle_marker_e8c587c8313870f34b1802472ee21b31.bindPopup(popup_94158058304a505f09ccec9e6a83a14f)
            ;

            
        
    
            var circle_marker_f98e4c4dde3a1f97c374b2190d31b69e = L.circleMarker(
                [-38.416097, -63.616672],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d094b20c5798efdec8ec7fdb8722b762 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2e40b72716e3a862a40dbd055f35a062 = $(`<div id="html_2e40b72716e3a862a40dbd055f35a062" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Argentina <strong>       Total Cases </strong>: 8919264</div>`)[0];
                popup_d094b20c5798efdec8ec7fdb8722b762.setContent(html_2e40b72716e3a862a40dbd055f35a062);
            

            circle_marker_f98e4c4dde3a1f97c374b2190d31b69e.bindPopup(popup_d094b20c5798efdec8ec7fdb8722b762)
            ;

            
        
    
            var circle_marker_73e5f08fb469db1924cbbfcd9b608699 = L.circleMarker(
                [-14.270972, -170.132217],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_9ca6d2fcbd9ea630977d29f597e92873 = L.popup({maxWidth: '100%'
            
            });

            
                var html_515e57a6abf1f4c834837f2e9f34e51d = $(`<div id="html_515e57a6abf1f4c834837f2e9f34e51d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: American samoa <strong>       Total Cases </strong>: 5010</div>`)[0];
                popup_9ca6d2fcbd9ea630977d29f597e92873.setContent(html_515e57a6abf1f4c834837f2e9f34e51d);
            

            circle_marker_73e5f08fb469db1924cbbfcd9b608699.bindPopup(popup_9ca6d2fcbd9ea630977d29f597e92873)
            ;

            
        
    
            var circle_marker_b45913352be8584b479ba947733ae6a2 = L.circleMarker(
                [47.516231, 14.550072],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4d465424dfd53df4506f6ee9fb311017 = L.popup({maxWidth: '100%'
            
            });

            
                var html_03e11f7c52611ef152493e44abc31a26 = $(`<div id="html_03e11f7c52611ef152493e44abc31a26" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Austria <strong>       Total Cases </strong>: 3982148</div>`)[0];
                popup_4d465424dfd53df4506f6ee9fb311017.setContent(html_03e11f7c52611ef152493e44abc31a26);
            

            circle_marker_b45913352be8584b479ba947733ae6a2.bindPopup(popup_4d465424dfd53df4506f6ee9fb311017)
            ;

            
        
    
            var circle_marker_18a217a16db7d1b4567af239a881c13e = L.circleMarker(
                [-25.274398, 133.775136],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_14ea8f54e78623bd22c20c1d6c70bab4 = L.popup({maxWidth: '100%'
            
            });

            
                var html_a656b04f5c84f93183c94dcb9a6ee4f0 = $(`<div id="html_a656b04f5c84f93183c94dcb9a6ee4f0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Australia <strong>       Total Cases </strong>: 4714143</div>`)[0];
                popup_14ea8f54e78623bd22c20c1d6c70bab4.setContent(html_a656b04f5c84f93183c94dcb9a6ee4f0);
            

            circle_marker_18a217a16db7d1b4567af239a881c13e.bindPopup(popup_14ea8f54e78623bd22c20c1d6c70bab4)
            ;

            
        
    
            var circle_marker_a4e38dc1ce9c16b89d43af89b4718d59 = L.circleMarker(
                [12.52111, -69.968338],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_acc7159de0d9a38f6d6ff1def887dcab = L.popup({maxWidth: '100%'
            
            });

            
                var html_0f2b0333c76d5d269100c3e777cc2ff8 = $(`<div id="html_0f2b0333c76d5d269100c3e777cc2ff8" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Aruba <strong>       Total Cases </strong>: 33877</div>`)[0];
                popup_acc7159de0d9a38f6d6ff1def887dcab.setContent(html_0f2b0333c76d5d269100c3e777cc2ff8);
            

            circle_marker_a4e38dc1ce9c16b89d43af89b4718d59.bindPopup(popup_acc7159de0d9a38f6d6ff1def887dcab)
            ;

            
        
    
            var circle_marker_f44a99d66d1ecb9e303cd350c3e68bda = L.circleMarker(
                [40.143105, 47.576927],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f5fb1767edff174fa567b2a1c196e814 = L.popup({maxWidth: '100%'
            
            });

            
                var html_a5c58746d3c5eda9ca354a3e69d8863c = $(`<div id="html_a5c58746d3c5eda9ca354a3e69d8863c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Azerbaijan <strong>       Total Cases </strong>: 782463</div>`)[0];
                popup_f5fb1767edff174fa567b2a1c196e814.setContent(html_a5c58746d3c5eda9ca354a3e69d8863c);
            

            circle_marker_f44a99d66d1ecb9e303cd350c3e68bda.bindPopup(popup_f5fb1767edff174fa567b2a1c196e814)
            ;

            
        
    
            var circle_marker_fb216c712337652e7f71b0b99df2240c = L.circleMarker(
                [43.915886, 17.679076],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_dd8a03e887169eae12f8f8c1efd2a44b = L.popup({maxWidth: '100%'
            
            });

            
                var html_6048a30067ec6925e2ce83f69d18800b = $(`<div id="html_6048a30067ec6925e2ce83f69d18800b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bosnia and herzegovina <strong>       Total Cases </strong>: 360300</div>`)[0];
                popup_dd8a03e887169eae12f8f8c1efd2a44b.setContent(html_6048a30067ec6925e2ce83f69d18800b);
            

            circle_marker_fb216c712337652e7f71b0b99df2240c.bindPopup(popup_dd8a03e887169eae12f8f8c1efd2a44b)
            ;

            
        
    
            var circle_marker_bffe8fce80f526327f279cf14535300c = L.circleMarker(
                [13.193887, -59.543198],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_03e5e60da72032d5a323587e0e354be4 = L.popup({maxWidth: '100%'
            
            });

            
                var html_591af37dcfa94085db60222b96e3d573 = $(`<div id="html_591af37dcfa94085db60222b96e3d573" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Barbados <strong>       Total Cases </strong>: 60890</div>`)[0];
                popup_03e5e60da72032d5a323587e0e354be4.setContent(html_591af37dcfa94085db60222b96e3d573);
            

            circle_marker_bffe8fce80f526327f279cf14535300c.bindPopup(popup_03e5e60da72032d5a323587e0e354be4)
            ;

            
        
    
            var circle_marker_592047df70f182f3d344c10aaef1c55e = L.circleMarker(
                [23.684994, 90.356331],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_bcb70989e97ff0da3783b963fce80341 = L.popup({maxWidth: '100%'
            
            });

            
                var html_cd9a75975bd4b8fc5dbc21653d95414d = $(`<div id="html_cd9a75975bd4b8fc5dbc21653d95414d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bangladesh <strong>       Total Cases </strong>: 1922788</div>`)[0];
                popup_bcb70989e97ff0da3783b963fce80341.setContent(html_cd9a75975bd4b8fc5dbc21653d95414d);
            

            circle_marker_592047df70f182f3d344c10aaef1c55e.bindPopup(popup_bcb70989e97ff0da3783b963fce80341)
            ;

            
        
    
            var circle_marker_6dc0a27e2a2c23f82ddde6382f37511c = L.circleMarker(
                [50.503887, 4.469936],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_da16764ffff9be8876304b0f0a8bd887 = L.popup({maxWidth: '100%'
            
            });

            
                var html_f78840592a75c45ea76a4286f8db0f9a = $(`<div id="html_f78840592a75c45ea76a4286f8db0f9a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Belgium <strong>       Total Cases </strong>: 3884735</div>`)[0];
                popup_da16764ffff9be8876304b0f0a8bd887.setContent(html_f78840592a75c45ea76a4286f8db0f9a);
            

            circle_marker_6dc0a27e2a2c23f82ddde6382f37511c.bindPopup(popup_da16764ffff9be8876304b0f0a8bd887)
            ;

            
        
    
            var circle_marker_3610c0052091a56e92915ded11019e76 = L.circleMarker(
                [12.238333, -1.561593],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_bdeebac5c8a3b4f68dd6ef143cda90d6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_aeea3931525d8f399b273a329eb9b582 = $(`<div id="html_aeea3931525d8f399b273a329eb9b582" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Burkina faso <strong>       Total Cases </strong>: 20476</div>`)[0];
                popup_bdeebac5c8a3b4f68dd6ef143cda90d6.setContent(html_aeea3931525d8f399b273a329eb9b582);
            

            circle_marker_3610c0052091a56e92915ded11019e76.bindPopup(popup_bdeebac5c8a3b4f68dd6ef143cda90d6)
            ;

            
        
    
            var circle_marker_f7ec3ad00dd60ea1b255645b626b6def = L.circleMarker(
                [42.733883, 25.48583],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0d4283fbed4c3fef65be420d14fdbd8d = L.popup({maxWidth: '100%'
            
            });

            
                var html_6821b3fb55ece8be38b259eba0941b01 = $(`<div id="html_6821b3fb55ece8be38b259eba0941b01" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bulgaria <strong>       Total Cases </strong>: 1107435</div>`)[0];
                popup_0d4283fbed4c3fef65be420d14fdbd8d.setContent(html_6821b3fb55ece8be38b259eba0941b01);
            

            circle_marker_f7ec3ad00dd60ea1b255645b626b6def.bindPopup(popup_0d4283fbed4c3fef65be420d14fdbd8d)
            ;

            
        
    
            var circle_marker_13fa24c51b16ff438d16447c927a9834 = L.circleMarker(
                [25.930414, 50.637772],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1ed5dca2990c5b88b2a5f2f319897a4b = L.popup({maxWidth: '100%'
            
            });

            
                var html_e50443dbc11eb2e532e3d934c2f22283 = $(`<div id="html_e50443dbc11eb2e532e3d934c2f22283" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bahrain <strong>       Total Cases </strong>: 556535</div>`)[0];
                popup_1ed5dca2990c5b88b2a5f2f319897a4b.setContent(html_e50443dbc11eb2e532e3d934c2f22283);
            

            circle_marker_13fa24c51b16ff438d16447c927a9834.bindPopup(popup_1ed5dca2990c5b88b2a5f2f319897a4b)
            ;

            
        
    
            var circle_marker_b3977d599ab53c04009d37cfadbd3ef8 = L.circleMarker(
                [-3.373056, 29.918886],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1e58fb5f4d8dedbbc9091e42cf7df587 = L.popup({maxWidth: '100%'
            
            });

            
                var html_0ea5b3c449aa2b007354c65a3c9cd065 = $(`<div id="html_0ea5b3c449aa2b007354c65a3c9cd065" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Burundi <strong>       Total Cases </strong>: 38648</div>`)[0];
                popup_1e58fb5f4d8dedbbc9091e42cf7df587.setContent(html_0ea5b3c449aa2b007354c65a3c9cd065);
            

            circle_marker_b3977d599ab53c04009d37cfadbd3ef8.bindPopup(popup_1e58fb5f4d8dedbbc9091e42cf7df587)
            ;

            
        
    
            var circle_marker_02d1ad3c2fd57031045688deafa052f6 = L.circleMarker(
                [9.30769, 2.315834],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_31a6f8f69912508418c4b6487638e106 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b96120fd364c516f62858489da80739d = $(`<div id="html_b96120fd364c516f62858489da80739d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Benin <strong>       Total Cases </strong>: 26432</div>`)[0];
                popup_31a6f8f69912508418c4b6487638e106.setContent(html_b96120fd364c516f62858489da80739d);
            

            circle_marker_02d1ad3c2fd57031045688deafa052f6.bindPopup(popup_31a6f8f69912508418c4b6487638e106)
            ;

            
        
    
            var circle_marker_aa7900451f503114d3f86b6a6e27a753 = L.circleMarker(
                [32.321384, -64.75737],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_48be67cbc6f0762a0b8d85c405e8c03e = L.popup({maxWidth: '100%'
            
            });

            
                var html_2c92ab185f26af0be7868cd37e515699 = $(`<div id="html_2c92ab185f26af0be7868cd37e515699" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bermuda <strong>       Total Cases </strong>: 12582</div>`)[0];
                popup_48be67cbc6f0762a0b8d85c405e8c03e.setContent(html_2c92ab185f26af0be7868cd37e515699);
            

            circle_marker_aa7900451f503114d3f86b6a6e27a753.bindPopup(popup_48be67cbc6f0762a0b8d85c405e8c03e)
            ;

            
        
    
            var circle_marker_4f97c115dd7ec10a93593810196df8d0 = L.circleMarker(
                [-14.235004, -51.92528],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_85dd813f187f429d746a950967bcdff0 = L.popup({maxWidth: '100%'
            
            });

            
                var html_5059c672fb375a2351ffeb2464c54125 = $(`<div id="html_5059c672fb375a2351ffeb2464c54125" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Brazil <strong>       Total Cases </strong>: 29406526</div>`)[0];
                popup_85dd813f187f429d746a950967bcdff0.setContent(html_5059c672fb375a2351ffeb2464c54125);
            

            circle_marker_4f97c115dd7ec10a93593810196df8d0.bindPopup(popup_85dd813f187f429d746a950967bcdff0)
            ;

            
        
    
            var circle_marker_fcadf189d81f96d5bc3af50a7193fa83 = L.circleMarker(
                [25.03428, -77.39628],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_167c8322fa6fbde4eff962d7708b11c7 = L.popup({maxWidth: '100%'
            
            });

            
                var html_f0e66c5dcca0108db4e11ead10879295 = $(`<div id="html_f0e66c5dcca0108db4e11ead10879295" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bahamas <strong>       Total Cases </strong>: 32527</div>`)[0];
                popup_167c8322fa6fbde4eff962d7708b11c7.setContent(html_f0e66c5dcca0108db4e11ead10879295);
            

            circle_marker_fcadf189d81f96d5bc3af50a7193fa83.bindPopup(popup_167c8322fa6fbde4eff962d7708b11c7)
            ;

            
        
    
            var circle_marker_f1380557494f98595cda7d1eb178b49e = L.circleMarker(
                [27.514162, 90.433601],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_6bee5396b2ae203fa07ba36878409077 = L.popup({maxWidth: '100%'
            
            });

            
                var html_998d29a2a932f157833647c1d60c7574 = $(`<div id="html_998d29a2a932f157833647c1d60c7574" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Bhutan <strong>       Total Cases </strong>: 37037</div>`)[0];
                popup_6bee5396b2ae203fa07ba36878409077.setContent(html_998d29a2a932f157833647c1d60c7574);
            

            circle_marker_f1380557494f98595cda7d1eb178b49e.bindPopup(popup_6bee5396b2ae203fa07ba36878409077)
            ;

            
        
    
            var circle_marker_1b81e2b0828196edd0bade635db0f876 = L.circleMarker(
                [-22.328474, 24.684866],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5565368820c707a5e34ad6ac83cf6d11 = L.popup({maxWidth: '100%'
            
            });

            
                var html_028ef43570e950f3795b44056f824ea2 = $(`<div id="html_028ef43570e950f3795b44056f824ea2" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Botswana <strong>       Total Cases </strong>: 261331</div>`)[0];
                popup_5565368820c707a5e34ad6ac83cf6d11.setContent(html_028ef43570e950f3795b44056f824ea2);
            

            circle_marker_1b81e2b0828196edd0bade635db0f876.bindPopup(popup_5565368820c707a5e34ad6ac83cf6d11)
            ;

            
        
    
            var circle_marker_4af9ae757bb0e2d7554b4c013f69700d = L.circleMarker(
                [53.709807, 27.953389],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1cccaf4d5f30b6ba19f278abb9236e2b = L.popup({maxWidth: '100%'
            
            });

            
                var html_91e19d3fafe53d76b1b85e52d4bbc3a8 = $(`<div id="html_91e19d3fafe53d76b1b85e52d4bbc3a8" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Belarus <strong>       Total Cases </strong>: 960865</div>`)[0];
                popup_1cccaf4d5f30b6ba19f278abb9236e2b.setContent(html_91e19d3fafe53d76b1b85e52d4bbc3a8);
            

            circle_marker_4af9ae757bb0e2d7554b4c013f69700d.bindPopup(popup_1cccaf4d5f30b6ba19f278abb9236e2b)
            ;

            
        
    
            var circle_marker_848f5bfcde996c2f1dbcd8f71a7725d0 = L.circleMarker(
                [17.189877, -88.49765],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_dd96af0519b34b3e17edc33c0af20843 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c8c2a538b07ed5732fd07b4331c41d90 = $(`<div id="html_c8c2a538b07ed5732fd07b4331c41d90" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Belize <strong>       Total Cases </strong>: 56610</div>`)[0];
                popup_dd96af0519b34b3e17edc33c0af20843.setContent(html_c8c2a538b07ed5732fd07b4331c41d90);
            

            circle_marker_848f5bfcde996c2f1dbcd8f71a7725d0.bindPopup(popup_dd96af0519b34b3e17edc33c0af20843)
            ;

            
        
    
            var circle_marker_ed078704797e19ada11107ae11bab60e = L.circleMarker(
                [56.130366, -106.346771],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_fe4f50ad12e937e44d9cc67f336fbe30 = L.popup({maxWidth: '100%'
            
            });

            
                var html_26860cb4e04b346a6c3f8d45e48b9d6c = $(`<div id="html_26860cb4e04b346a6c3f8d45e48b9d6c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Canada <strong>       Total Cases </strong>: 3497245</div>`)[0];
                popup_fe4f50ad12e937e44d9cc67f336fbe30.setContent(html_26860cb4e04b346a6c3f8d45e48b9d6c);
            

            circle_marker_ed078704797e19ada11107ae11bab60e.bindPopup(popup_fe4f50ad12e937e44d9cc67f336fbe30)
            ;

            
        
    
            var circle_marker_6ae44302996b72d13b0ca68419291571 = L.circleMarker(
                [6.611111, 20.939444],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_706ec57048caa7272023954b5dc447f6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c7012fdb67019bfa139f193e01b69c33 = $(`<div id="html_c7012fdb67019bfa139f193e01b69c33" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Central african republic <strong>       Total Cases </strong>: 14226</div>`)[0];
                popup_706ec57048caa7272023954b5dc447f6.setContent(html_c7012fdb67019bfa139f193e01b69c33);
            

            circle_marker_6ae44302996b72d13b0ca68419291571.bindPopup(popup_706ec57048caa7272023954b5dc447f6)
            ;

            
        
    
            var circle_marker_b8b4f41d76cb6aa4cb3b33cb94ec8b4e = L.circleMarker(
                [46.818188, 8.227512],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2804da5179363945f3669e106d45daa2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_02f77fcbe71c59a9a2b41e5b038bc1b5 = $(`<div id="html_02f77fcbe71c59a9a2b41e5b038bc1b5" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Switzerland <strong>       Total Cases </strong>: 3499075</div>`)[0];
                popup_2804da5179363945f3669e106d45daa2.setContent(html_02f77fcbe71c59a9a2b41e5b038bc1b5);
            

            circle_marker_b8b4f41d76cb6aa4cb3b33cb94ec8b4e.bindPopup(popup_2804da5179363945f3669e106d45daa2)
            ;

            
        
    
            var circle_marker_a81e967048a1d16b598406796e3aaccd = L.circleMarker(
                [-21.236736, -159.777671],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d0831c3fc5427002b0ae5f1c2b8638ee = L.popup({maxWidth: '100%'
            
            });

            
                var html_441508759c812a6cc654ba9c96525627 = $(`<div id="html_441508759c812a6cc654ba9c96525627" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cook islands <strong>       Total Cases </strong>: 3035</div>`)[0];
                popup_d0831c3fc5427002b0ae5f1c2b8638ee.setContent(html_441508759c812a6cc654ba9c96525627);
            

            circle_marker_a81e967048a1d16b598406796e3aaccd.bindPopup(popup_d0831c3fc5427002b0ae5f1c2b8638ee)
            ;

            
        
    
            var circle_marker_84dd8a72f3bc2bd52c2b6c6e784ccb14 = L.circleMarker(
                [-35.675147, -71.542969],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_38e2e0fce811932f0ecb4b6366960526 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b3e24fa09316008d8652b55658f458e2 = $(`<div id="html_b3e24fa09316008d8652b55658f458e2" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Chile <strong>       Total Cases </strong>: 3443758</div>`)[0];
                popup_38e2e0fce811932f0ecb4b6366960526.setContent(html_b3e24fa09316008d8652b55658f458e2);
            

            circle_marker_84dd8a72f3bc2bd52c2b6c6e784ccb14.bindPopup(popup_38e2e0fce811932f0ecb4b6366960526)
            ;

            
        
    
            var circle_marker_e38ce619e1b69ebe422c1c9ecf2f0ff4 = L.circleMarker(
                [7.369722, 12.354722],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0eb1536387add996c465d4ce9e164faa = L.popup({maxWidth: '100%'
            
            });

            
                var html_22a375fa9894b7145600e72160eb990e = $(`<div id="html_22a375fa9894b7145600e72160eb990e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cameroon <strong>       Total Cases </strong>: 117617</div>`)[0];
                popup_0eb1536387add996c465d4ce9e164faa.setContent(html_22a375fa9894b7145600e72160eb990e);
            

            circle_marker_e38ce619e1b69ebe422c1c9ecf2f0ff4.bindPopup(popup_0eb1536387add996c465d4ce9e164faa)
            ;

            
        
    
            var circle_marker_9e5e520e19e0ae725fa18f33287c612e = L.circleMarker(
                [35.86166, 104.195397],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_52eabdc1fddacf6657f858c5974dfc8c = L.popup({maxWidth: '100%'
            
            });

            
                var html_1d669794326e11b595b5d6b9cd0393f9 = $(`<div id="html_1d669794326e11b595b5d6b9cd0393f9" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: China <strong>       Total Cases </strong>: 921592</div>`)[0];
                popup_52eabdc1fddacf6657f858c5974dfc8c.setContent(html_1d669794326e11b595b5d6b9cd0393f9);
            

            circle_marker_9e5e520e19e0ae725fa18f33287c612e.bindPopup(popup_52eabdc1fddacf6657f858c5974dfc8c)
            ;

            
        
    
            var circle_marker_44488665d96b0b135bd4cd91e795e296 = L.circleMarker(
                [4.570868, -74.297333],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_9bc876f3f8c8e800f3caaa840e22d737 = L.popup({maxWidth: '100%'
            
            });

            
                var html_51dc80d1379d58b3b2131ed2ea31b547 = $(`<div id="html_51dc80d1379d58b3b2131ed2ea31b547" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Colombia <strong>       Total Cases </strong>: 5947124</div>`)[0];
                popup_9bc876f3f8c8e800f3caaa840e22d737.setContent(html_51dc80d1379d58b3b2131ed2ea31b547);
            

            circle_marker_44488665d96b0b135bd4cd91e795e296.bindPopup(popup_9bc876f3f8c8e800f3caaa840e22d737)
            ;

            
        
    
            var circle_marker_5d37d2f1ab65d7bd65fbffac908151da = L.circleMarker(
                [9.748917, -83.753428],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_29b76b603664e427694595d0a5acd364 = L.popup({maxWidth: '100%'
            
            });

            
                var html_3a9e6dbee3bc00b9673840c4362a0527 = $(`<div id="html_3a9e6dbee3bc00b9673840c4362a0527" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Costa rica <strong>       Total Cases </strong>: 833016</div>`)[0];
                popup_29b76b603664e427694595d0a5acd364.setContent(html_3a9e6dbee3bc00b9673840c4362a0527);
            

            circle_marker_5d37d2f1ab65d7bd65fbffac908151da.bindPopup(popup_29b76b603664e427694595d0a5acd364)
            ;

            
        
    
            var circle_marker_40f7ed1015255fb1ca8f2800df6bc860 = L.circleMarker(
                [21.521757, -77.781167],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c0388627960ba9eafb7522ac9bbb3ede = L.popup({maxWidth: '100%'
            
            });

            
                var html_b634e062fd3b78feeb42727eb46a90cc = $(`<div id="html_b634e062fd3b78feeb42727eb46a90cc" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cuba <strong>       Total Cases </strong>: 1086489</div>`)[0];
                popup_c0388627960ba9eafb7522ac9bbb3ede.setContent(html_b634e062fd3b78feeb42727eb46a90cc);
            

            circle_marker_40f7ed1015255fb1ca8f2800df6bc860.bindPopup(popup_c0388627960ba9eafb7522ac9bbb3ede)
            ;

            
        
    
            var circle_marker_7fee2d18d57174a00b8415a902fe074c = L.circleMarker(
                [35.126413, 33.429859],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5bb3c1cf7256b981bedc0de480784d54 = L.popup({maxWidth: '100%'
            
            });

            
                var html_769c1959e9b73d977a875d41ce22a7a7 = $(`<div id="html_769c1959e9b73d977a875d41ce22a7a7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cyprus <strong>       Total Cases </strong>: 451220</div>`)[0];
                popup_5bb3c1cf7256b981bedc0de480784d54.setContent(html_769c1959e9b73d977a875d41ce22a7a7);
            

            circle_marker_7fee2d18d57174a00b8415a902fe074c.bindPopup(popup_5bb3c1cf7256b981bedc0de480784d54)
            ;

            
        
    
            var circle_marker_ba55f79a40b6f658dc84c6278e69c8ba = L.circleMarker(
                [51.165691, 10.451526],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5a5ba98699c836b082694a0b75261e13 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2264ab57d26cdf750824d814ade42733 = $(`<div id="html_2264ab57d26cdf750824d814ade42733" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Germany <strong>       Total Cases </strong>: 22309681</div>`)[0];
                popup_5a5ba98699c836b082694a0b75261e13.setContent(html_2264ab57d26cdf750824d814ade42733);
            

            circle_marker_ba55f79a40b6f658dc84c6278e69c8ba.bindPopup(popup_5a5ba98699c836b082694a0b75261e13)
            ;

            
        
    
            var circle_marker_5cd40956e9a1b4d7120327a11bedf4b1 = L.circleMarker(
                [11.825138, 42.590275],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_3920ffd634ff065b4625df3734a5c026 = L.popup({maxWidth: '100%'
            
            });

            
                var html_afb4470daf05a53626a93bde63d4dba4 = $(`<div id="html_afb4470daf05a53626a93bde63d4dba4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Djibouti <strong>       Total Cases </strong>: 15402</div>`)[0];
                popup_3920ffd634ff065b4625df3734a5c026.setContent(html_afb4470daf05a53626a93bde63d4dba4);
            

            circle_marker_5cd40956e9a1b4d7120327a11bedf4b1.bindPopup(popup_3920ffd634ff065b4625df3734a5c026)
            ;

            
        
    
            var circle_marker_372af186ab9d916a29c7cc34e3f99c8b = L.circleMarker(
                [56.26392, 9.501785],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_453a468fbdd2a17176affcb45d8d2cd8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_5e69a0067831b426c3166c31f2049ecd = $(`<div id="html_5e69a0067831b426c3166c31f2049ecd" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Denmark <strong>       Total Cases </strong>: 3072458</div>`)[0];
                popup_453a468fbdd2a17176affcb45d8d2cd8.setContent(html_5e69a0067831b426c3166c31f2049ecd);
            

            circle_marker_372af186ab9d916a29c7cc34e3f99c8b.bindPopup(popup_453a468fbdd2a17176affcb45d8d2cd8)
            ;

            
        
    
            var circle_marker_3e61882003f600f4b6f46540592adf05 = L.circleMarker(
                [15.414999, -61.370976],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_971daa61a961a2e6eec59087443a9c9a = L.popup({maxWidth: '100%'
            
            });

            
                var html_d2dcbd8ade7a32c19f804f16e59ecf9a = $(`<div id="html_d2dcbd8ade7a32c19f804f16e59ecf9a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Dominica <strong>       Total Cases </strong>: 11834</div>`)[0];
                popup_971daa61a961a2e6eec59087443a9c9a.setContent(html_d2dcbd8ade7a32c19f804f16e59ecf9a);
            

            circle_marker_3e61882003f600f4b6f46540592adf05.bindPopup(popup_971daa61a961a2e6eec59087443a9c9a)
            ;

            
        
    
            var circle_marker_5b235678a94b471627502a87d2501157 = L.circleMarker(
                [18.735693, -70.162651],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_322ac320fc456614cf180b2d100ca7ba = L.popup({maxWidth: '100%'
            
            });

            
                var html_ff1febd52567be2863268d50ae77b3a3 = $(`<div id="html_ff1febd52567be2863268d50ae77b3a3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Dominican republic <strong>       Total Cases </strong>: 574002</div>`)[0];
                popup_322ac320fc456614cf180b2d100ca7ba.setContent(html_ff1febd52567be2863268d50ae77b3a3);
            

            circle_marker_5b235678a94b471627502a87d2501157.bindPopup(popup_322ac320fc456614cf180b2d100ca7ba)
            ;

            
        
    
            var circle_marker_1ef0129643741d7d03613952da27e85e = L.circleMarker(
                [28.033886, 1.659626],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0b47395433e76ca9815ad71bd77ee63d = L.popup({maxWidth: '100%'
            
            });

            
                var html_7528da6252de08d44215687b11b7db05 = $(`<div id="html_7528da6252de08d44215687b11b7db05" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Algeria <strong>       Total Cases </strong>: 258833</div>`)[0];
                popup_0b47395433e76ca9815ad71bd77ee63d.setContent(html_7528da6252de08d44215687b11b7db05);
            

            circle_marker_1ef0129643741d7d03613952da27e85e.bindPopup(popup_0b47395433e76ca9815ad71bd77ee63d)
            ;

            
        
    
            var circle_marker_852b00310cda2a3d90da3ae718705b1f = L.circleMarker(
                [-1.831239, -78.183406],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f02ef773d2bee6ecf327cc0af40dd899 = L.popup({maxWidth: '100%'
            
            });

            
                var html_7a21dda88053170dfb9fc6d3b53e492d = $(`<div id="html_7a21dda88053170dfb9fc6d3b53e492d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Ecuador <strong>       Total Cases </strong>: 827937</div>`)[0];
                popup_f02ef773d2bee6ecf327cc0af40dd899.setContent(html_7a21dda88053170dfb9fc6d3b53e492d);
            

            circle_marker_852b00310cda2a3d90da3ae718705b1f.bindPopup(popup_f02ef773d2bee6ecf327cc0af40dd899)
            ;

            
        
    
            var circle_marker_e68551dfdf7d4c7563eb5c6b0a42f7bc = L.circleMarker(
                [58.595272, 25.013607],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5fb441f48667285468cc5bc6d7bc8125 = L.popup({maxWidth: '100%'
            
            });

            
                var html_78f9d19b58bde4882ec9069b70031241 = $(`<div id="html_78f9d19b58bde4882ec9069b70031241" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Estonia <strong>       Total Cases </strong>: 560453</div>`)[0];
                popup_5fb441f48667285468cc5bc6d7bc8125.setContent(html_78f9d19b58bde4882ec9069b70031241);
            

            circle_marker_e68551dfdf7d4c7563eb5c6b0a42f7bc.bindPopup(popup_5fb441f48667285468cc5bc6d7bc8125)
            ;

            
        
    
            var circle_marker_430bf931641eb994088faabe86bdbbb8 = L.circleMarker(
                [26.820553, 30.802498],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c4a738f305988336648fe61f963e4537 = L.popup({maxWidth: '100%'
            
            });

            
                var html_4e5619b9f91860a1d1541a28696bd295 = $(`<div id="html_4e5619b9f91860a1d1541a28696bd295" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Egypt <strong>       Total Cases </strong>: 484704</div>`)[0];
                popup_c4a738f305988336648fe61f963e4537.setContent(html_4e5619b9f91860a1d1541a28696bd295);
            

            circle_marker_430bf931641eb994088faabe86bdbbb8.bindPopup(popup_c4a738f305988336648fe61f963e4537)
            ;

            
        
    
            var circle_marker_4592d894e614b63fe506af56071a4322 = L.circleMarker(
                [15.179384, 39.782334],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1d756f8ddbbdce7814bc8f11d4b11581 = L.popup({maxWidth: '100%'
            
            });

            
                var html_3657c59ebe978236c28c782c081a4278 = $(`<div id="html_3657c59ebe978236c28c782c081a4278" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Eritrea <strong>       Total Cases </strong>: 9626</div>`)[0];
                popup_1d756f8ddbbdce7814bc8f11d4b11581.setContent(html_3657c59ebe978236c28c782c081a4278);
            

            circle_marker_4592d894e614b63fe506af56071a4322.bindPopup(popup_1d756f8ddbbdce7814bc8f11d4b11581)
            ;

            
        
    
            var circle_marker_6a465bc01246070b6ce58a7ce9ab9dbe = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f16de35f4881578f0c2c6ba1948d1886 = L.popup({maxWidth: '100%'
            
            });

            
                var html_4be36beececf2cf128401cc5398b8f5b = $(`<div id="html_4be36beececf2cf128401cc5398b8f5b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Spain <strong>       Total Cases </strong>: 11475906</div>`)[0];
                popup_f16de35f4881578f0c2c6ba1948d1886.setContent(html_4be36beececf2cf128401cc5398b8f5b);
            

            circle_marker_6a465bc01246070b6ce58a7ce9ab9dbe.bindPopup(popup_f16de35f4881578f0c2c6ba1948d1886)
            ;

            
        
    
            var circle_marker_1c774eba1aca20de1e70ab1bb59941d9 = L.circleMarker(
                [9.145, 40.489673],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_acbc1238a1fef37be6da77ae5ac2d794 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e331e075e593935c315502c927bfb636 = $(`<div id="html_e331e075e593935c315502c927bfb636" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Ethiopia <strong>       Total Cases </strong>: 462471</div>`)[0];
                popup_acbc1238a1fef37be6da77ae5ac2d794.setContent(html_e331e075e593935c315502c927bfb636);
            

            circle_marker_1c774eba1aca20de1e70ab1bb59941d9.bindPopup(popup_acbc1238a1fef37be6da77ae5ac2d794)
            ;

            
        
    
            var circle_marker_b8d16526f22636abc9a414c0edd04993 = L.circleMarker(
                [61.92411, 25.748151],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2b1c4fe0a37c5e55888908f54d5bed95 = L.popup({maxWidth: '100%'
            
            });

            
                var html_d6ee5b88b3b5fd4d9d3721b49be3505f = $(`<div id="html_d6ee5b88b3b5fd4d9d3721b49be3505f" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Finland <strong>       Total Cases </strong>: 917358</div>`)[0];
                popup_2b1c4fe0a37c5e55888908f54d5bed95.setContent(html_d6ee5b88b3b5fd4d9d3721b49be3505f);
            

            circle_marker_b8d16526f22636abc9a414c0edd04993.bindPopup(popup_2b1c4fe0a37c5e55888908f54d5bed95)
            ;

            
        
    
            var circle_marker_81356cb26817fb52dd33da27baa25e87 = L.circleMarker(
                [-16.578193, 179.414413],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c1f508b6ef97f63b3c1dff98dcf5df71 = L.popup({maxWidth: '100%'
            
            });

            
                var html_7cd06ebc8538ec1216d364801b3ecdfc = $(`<div id="html_7cd06ebc8538ec1216d364801b3ecdfc" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Fiji <strong>       Total Cases </strong>: 63637</div>`)[0];
                popup_c1f508b6ef97f63b3c1dff98dcf5df71.setContent(html_7cd06ebc8538ec1216d364801b3ecdfc);
            

            circle_marker_81356cb26817fb52dd33da27baa25e87.bindPopup(popup_c1f508b6ef97f63b3c1dff98dcf5df71)
            ;

            
        
    
            var circle_marker_6b94fcf9d57716797d912042c6f16195 = L.circleMarker(
                [61.892635, -6.911806],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_90a4eac273194d55633aa155a64d710d = L.popup({maxWidth: '100%'
            
            });

            
                var html_0e7f70856c4045ba0a19fcf26be048de = $(`<div id="html_0e7f70856c4045ba0a19fcf26be048de" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Faroe islands <strong>       Total Cases </strong>: 34630</div>`)[0];
                popup_90a4eac273194d55633aa155a64d710d.setContent(html_0e7f70856c4045ba0a19fcf26be048de);
            

            circle_marker_6b94fcf9d57716797d912042c6f16195.bindPopup(popup_90a4eac273194d55633aa155a64d710d)
            ;

            
        
    
            var circle_marker_e6343c39ee3b48bcdb952e92c894b70e = L.circleMarker(
                [46.227638, 2.213749],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4c398d7b738554594b5c9371c26b8c20 = L.popup({maxWidth: '100%'
            
            });

            
                var html_432ab13ed39e3279a592697757a4637d = $(`<div id="html_432ab13ed39e3279a592697757a4637d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: France <strong>       Total Cases </strong>: 25641589</div>`)[0];
                popup_4c398d7b738554594b5c9371c26b8c20.setContent(html_432ab13ed39e3279a592697757a4637d);
            

            circle_marker_e6343c39ee3b48bcdb952e92c894b70e.bindPopup(popup_4c398d7b738554594b5c9371c26b8c20)
            ;

            
        
    
            var circle_marker_6c23720e9eb323015ba806e9bf4f6a83 = L.circleMarker(
                [-0.803689, 11.609444],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_bd93e6ace637ae0ed865b20e33c8127a = L.popup({maxWidth: '100%'
            
            });

            
                var html_24172ddbaba31a9e65549970272f4db0 = $(`<div id="html_24172ddbaba31a9e65549970272f4db0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Gabon <strong>       Total Cases </strong>: 47285</div>`)[0];
                popup_bd93e6ace637ae0ed865b20e33c8127a.setContent(html_24172ddbaba31a9e65549970272f4db0);
            

            circle_marker_6c23720e9eb323015ba806e9bf4f6a83.bindPopup(popup_bd93e6ace637ae0ed865b20e33c8127a)
            ;

            
        
    
            var circle_marker_5f43b4b20943648ebc0371373ff1d383 = L.circleMarker(
                [12.262776, -61.604171],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_09a5d31c875e33bdbbc9b701b3fb54b0 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e7212444abd940b100b8c441caa08636 = $(`<div id="html_e7212444abd940b100b8c441caa08636" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Grenada <strong>       Total Cases </strong>: 13806</div>`)[0];
                popup_09a5d31c875e33bdbbc9b701b3fb54b0.setContent(html_e7212444abd940b100b8c441caa08636);
            

            circle_marker_5f43b4b20943648ebc0371373ff1d383.bindPopup(popup_09a5d31c875e33bdbbc9b701b3fb54b0)
            ;

            
        
    
            var circle_marker_37ce175b26762c521a95b65dc0fb56ee = L.circleMarker(
                [42.315407, 43.356892],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_15131defef9c23c223b23ba6249383c7 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c91922e252d4286637f108f2434c4bd3 = $(`<div id="html_c91922e252d4286637f108f2434c4bd3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Georgia <strong>       Total Cases </strong>: 1634215</div>`)[0];
                popup_15131defef9c23c223b23ba6249383c7.setContent(html_c91922e252d4286637f108f2434c4bd3);
            

            circle_marker_37ce175b26762c521a95b65dc0fb56ee.bindPopup(popup_15131defef9c23c223b23ba6249383c7)
            ;

            
        
    
            var circle_marker_b0ae773f722c6033a1e8044922fbb251 = L.circleMarker(
                [3.933889, -53.125782],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_15dc1e831abbd96f736538733a58a17e = L.popup({maxWidth: '100%'
            
            });

            
                var html_62d07f2e92ab591e095099c59429eef2 = $(`<div id="html_62d07f2e92ab591e095099c59429eef2" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: French guiana <strong>       Total Cases </strong>: 79135</div>`)[0];
                popup_15dc1e831abbd96f736538733a58a17e.setContent(html_62d07f2e92ab591e095099c59429eef2);
            

            circle_marker_b0ae773f722c6033a1e8044922fbb251.bindPopup(popup_15dc1e831abbd96f736538733a58a17e)
            ;

            
        
    
            var circle_marker_6f716768435c34ac8025d00ec3461877 = L.circleMarker(
                [49.465691, -2.585278],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_06021ff7f1672c12656ee3bcf4a3111a = L.popup({maxWidth: '100%'
            
            });

            
                var html_8cf23b5ac94be29ce16deee84e1556b3 = $(`<div id="html_8cf23b5ac94be29ce16deee84e1556b3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guernsey <strong>       Total Cases </strong>: 22221</div>`)[0];
                popup_06021ff7f1672c12656ee3bcf4a3111a.setContent(html_8cf23b5ac94be29ce16deee84e1556b3);
            

            circle_marker_6f716768435c34ac8025d00ec3461877.bindPopup(popup_06021ff7f1672c12656ee3bcf4a3111a)
            ;

            
        
    
            var circle_marker_83c2aa92a8ef6c5e145fd1e4746af7ce = L.circleMarker(
                [7.946527, -1.023194],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_601ed273289168e847b1f2293be599b9 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b8f98e3bc7200cffcdf6e98bc63f27f7 = $(`<div id="html_b8f98e3bc7200cffcdf6e98bc63f27f7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Ghana <strong>       Total Cases </strong>: 159589</div>`)[0];
                popup_601ed273289168e847b1f2293be599b9.setContent(html_b8f98e3bc7200cffcdf6e98bc63f27f7);
            

            circle_marker_83c2aa92a8ef6c5e145fd1e4746af7ce.bindPopup(popup_601ed273289168e847b1f2293be599b9)
            ;

            
        
    
            var circle_marker_84aa85dc1a99953d8260ae57a36b92bb = L.circleMarker(
                [36.137741, -5.345374],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_9c1395644eca24a6f6b76693e02e19f0 = L.popup({maxWidth: '100%'
            
            });

            
                var html_84501aae4e7110ecc1f5f8f63e2579e4 = $(`<div id="html_84501aae4e7110ecc1f5f8f63e2579e4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Gibraltar <strong>       Total Cases </strong>: 17135</div>`)[0];
                popup_9c1395644eca24a6f6b76693e02e19f0.setContent(html_84501aae4e7110ecc1f5f8f63e2579e4);
            

            circle_marker_84aa85dc1a99953d8260ae57a36b92bb.bindPopup(popup_9c1395644eca24a6f6b76693e02e19f0)
            ;

            
        
    
            var circle_marker_41cadf8f6fceb2bb9b784a8f01355785 = L.circleMarker(
                [71.706936, -42.604303],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ab4983e3b7f1390fe369e17876eed15f = L.popup({maxWidth: '100%'
            
            });

            
                var html_47aa7125abe119eb0e29527ae3eff45c = $(`<div id="html_47aa7125abe119eb0e29527ae3eff45c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Greenland <strong>       Total Cases </strong>: 11950</div>`)[0];
                popup_ab4983e3b7f1390fe369e17876eed15f.setContent(html_47aa7125abe119eb0e29527ae3eff45c);
            

            circle_marker_41cadf8f6fceb2bb9b784a8f01355785.bindPopup(popup_ab4983e3b7f1390fe369e17876eed15f)
            ;

            
        
    
            var circle_marker_f4bb83dfa3ef4d6ebdddb8d2bab1491f = L.circleMarker(
                [13.443182, -15.310139],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_52f9d936fd272b78733457a2ac7a4c62 = L.popup({maxWidth: '100%'
            
            });

            
                var html_128965341ae2b66fbfd8cd99fe474f23 = $(`<div id="html_128965341ae2b66fbfd8cd99fe474f23" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Gambia <strong>       Total Cases </strong>: 11625</div>`)[0];
                popup_52f9d936fd272b78733457a2ac7a4c62.setContent(html_128965341ae2b66fbfd8cd99fe474f23);
            

            circle_marker_f4bb83dfa3ef4d6ebdddb8d2bab1491f.bindPopup(popup_52f9d936fd272b78733457a2ac7a4c62)
            ;

            
        
    
            var circle_marker_7dd78920da254161f0c68ad7a8e05694 = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_13ed7b61e8441f7afae8664f9e9305ea = L.popup({maxWidth: '100%'
            
            });

            
                var html_dd3aee4f244e0429fcd5a793b91b77ab = $(`<div id="html_dd3aee4f244e0429fcd5a793b91b77ab" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guinea <strong>       Total Cases </strong>: 36019</div>`)[0];
                popup_13ed7b61e8441f7afae8664f9e9305ea.setContent(html_dd3aee4f244e0429fcd5a793b91b77ab);
            

            circle_marker_7dd78920da254161f0c68ad7a8e05694.bindPopup(popup_13ed7b61e8441f7afae8664f9e9305ea)
            ;

            
        
    
            var circle_marker_757cde37a36abe9320448cf3f7f94ae5 = L.circleMarker(
                [16.995971, -62.067641],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2013852aa85bab99745fbe746023f75f = L.popup({maxWidth: '100%'
            
            });

            
                var html_6bff65336d4f78fcb0638123dedc19b9 = $(`<div id="html_6bff65336d4f78fcb0638123dedc19b9" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guadeloupe <strong>       Total Cases </strong>: 138578</div>`)[0];
                popup_2013852aa85bab99745fbe746023f75f.setContent(html_6bff65336d4f78fcb0638123dedc19b9);
            

            circle_marker_757cde37a36abe9320448cf3f7f94ae5.bindPopup(popup_2013852aa85bab99745fbe746023f75f)
            ;

            
        
    
            var circle_marker_7e8d987d607cf4e55c87755b6a8be872 = L.circleMarker(
                [1.650801, 10.267895],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d380b1dc9fe805d8ffa8367ff30675ab = L.popup({maxWidth: '100%'
            
            });

            
                var html_0b2daab5e107ed683b87369850d83d75 = $(`<div id="html_0b2daab5e107ed683b87369850d83d75" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Equatorial guinea <strong>       Total Cases </strong>: 15818</div>`)[0];
                popup_d380b1dc9fe805d8ffa8367ff30675ab.setContent(html_0b2daab5e107ed683b87369850d83d75);
            

            circle_marker_7e8d987d607cf4e55c87755b6a8be872.bindPopup(popup_d380b1dc9fe805d8ffa8367ff30675ab)
            ;

            
        
    
            var circle_marker_0244b0b46d48450ed68ebd8953de5fa7 = L.circleMarker(
                [39.074208, 21.824312],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e55f205a71efdd1c191e00169f2a363f = L.popup({maxWidth: '100%'
            
            });

            
                var html_3f0a67edb653e9e8412aba7eb15d906a = $(`<div id="html_3f0a67edb653e9e8412aba7eb15d906a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Greece <strong>       Total Cases </strong>: 3109746</div>`)[0];
                popup_e55f205a71efdd1c191e00169f2a363f.setContent(html_3f0a67edb653e9e8412aba7eb15d906a);
            

            circle_marker_0244b0b46d48450ed68ebd8953de5fa7.bindPopup(popup_e55f205a71efdd1c191e00169f2a363f)
            ;

            
        
    
            var circle_marker_4c0e9f82f638e1f2aad95d77a1427000 = L.circleMarker(
                [15.783471, -90.230759],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_52438e5fb67b13c4bcc492e2dbddee20 = L.popup({maxWidth: '100%'
            
            });

            
                var html_4c674ac60ba4112e285cbc17c03ae032 = $(`<div id="html_4c674ac60ba4112e285cbc17c03ae032" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guatemala <strong>       Total Cases </strong>: 815606</div>`)[0];
                popup_52438e5fb67b13c4bcc492e2dbddee20.setContent(html_4c674ac60ba4112e285cbc17c03ae032);
            

            circle_marker_4c0e9f82f638e1f2aad95d77a1427000.bindPopup(popup_52438e5fb67b13c4bcc492e2dbddee20)
            ;

            
        
    
            var circle_marker_fda19dc5fa6eba2d1c22db9d5535da2b = L.circleMarker(
                [13.444304, 144.793731],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_db95416aee12022d5a27374f4525244d = L.popup({maxWidth: '100%'
            
            });

            
                var html_bbdb51bd2c98d895baa8cc8cf2038ed5 = $(`<div id="html_bbdb51bd2c98d895baa8cc8cf2038ed5" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guam <strong>       Total Cases </strong>: 39573</div>`)[0];
                popup_db95416aee12022d5a27374f4525244d.setContent(html_bbdb51bd2c98d895baa8cc8cf2038ed5);
            

            circle_marker_fda19dc5fa6eba2d1c22db9d5535da2b.bindPopup(popup_db95416aee12022d5a27374f4525244d)
            ;

            
        
    
            var circle_marker_1938ba229a9aaa5aed173c4dbbdf42a2 = L.circleMarker(
                [11.803749, -15.180413],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ed327e0b7386c345dde914320c9e5002 = L.popup({maxWidth: '100%'
            
            });

            
                var html_fe3f3abfd6c3b72bf040a31d7685018e = $(`<div id="html_fe3f3abfd6c3b72bf040a31d7685018e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guinea-bissau <strong>       Total Cases </strong>: 8002</div>`)[0];
                popup_ed327e0b7386c345dde914320c9e5002.setContent(html_fe3f3abfd6c3b72bf040a31d7685018e);
            

            circle_marker_1938ba229a9aaa5aed173c4dbbdf42a2.bindPopup(popup_ed327e0b7386c345dde914320c9e5002)
            ;

            
        
    
            var circle_marker_e39a54a9389715ecf905226153109c55 = L.circleMarker(
                [4.860416, -58.93018],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c94ebffef41ea6f52f5029bafd25a8ca = L.popup({maxWidth: '100%'
            
            });

            
                var html_5964000b37b0d57a353cb5fe1aefb3c6 = $(`<div id="html_5964000b37b0d57a353cb5fe1aefb3c6" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Guyana <strong>       Total Cases </strong>: 62068</div>`)[0];
                popup_c94ebffef41ea6f52f5029bafd25a8ca.setContent(html_5964000b37b0d57a353cb5fe1aefb3c6);
            

            circle_marker_e39a54a9389715ecf905226153109c55.bindPopup(popup_c94ebffef41ea6f52f5029bafd25a8ca)
            ;

            
        
    
            var circle_marker_f1d8d8ee7f2eac4b0a960abb57b2a4b3 = L.circleMarker(
                [15.199999, -86.241905],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d59c498dc50fe2011bb6c33b94ce9969 = L.popup({maxWidth: '100%'
            
            });

            
                var html_d573dd718374c9dd5941a982158a9217 = $(`<div id="html_d573dd718374c9dd5941a982158a9217" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Honduras <strong>       Total Cases </strong>: 410380</div>`)[0];
                popup_d59c498dc50fe2011bb6c33b94ce9969.setContent(html_d573dd718374c9dd5941a982158a9217);
            

            circle_marker_f1d8d8ee7f2eac4b0a960abb57b2a4b3.bindPopup(popup_d59c498dc50fe2011bb6c33b94ce9969)
            ;

            
        
    
            var circle_marker_8159328e1585815f6bf35d608eb2aaa9 = L.circleMarker(
                [45.1, 15.2],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_54a94f8520a67f042155f1b29b6e2842 = L.popup({maxWidth: '100%'
            
            });

            
                var html_888224988b6baed99bf3faf4d1c1c2b7 = $(`<div id="html_888224988b6baed99bf3faf4d1c1c2b7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Croatia <strong>       Total Cases </strong>: 1090905</div>`)[0];
                popup_54a94f8520a67f042155f1b29b6e2842.setContent(html_888224988b6baed99bf3faf4d1c1c2b7);
            

            circle_marker_8159328e1585815f6bf35d608eb2aaa9.bindPopup(popup_54a94f8520a67f042155f1b29b6e2842)
            ;

            
        
    
            var circle_marker_14959c0b65e367dccb8ab00e51d74117 = L.circleMarker(
                [18.971187, -72.285215],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_efd39846dcf2aaa5b154cc5b58be0402 = L.popup({maxWidth: '100%'
            
            });

            
                var html_4e1302d4fd646b8761cb022d63118a09 = $(`<div id="html_4e1302d4fd646b8761cb022d63118a09" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Haiti <strong>       Total Cases </strong>: 29742</div>`)[0];
                popup_efd39846dcf2aaa5b154cc5b58be0402.setContent(html_4e1302d4fd646b8761cb022d63118a09);
            

            circle_marker_14959c0b65e367dccb8ab00e51d74117.bindPopup(popup_efd39846dcf2aaa5b154cc5b58be0402)
            ;

            
        
    
            var circle_marker_4ee9c3c2d9285ba4dd053c15d557c0da = L.circleMarker(
                [47.162494, 19.503304],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_589b31cbe4713436a0130b1a57d2e046 = L.popup({maxWidth: '100%'
            
            });

            
                var html_af65e3e40b7a8b3eac7c2f959829ebc4 = $(`<div id="html_af65e3e40b7a8b3eac7c2f959829ebc4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Hungary <strong>       Total Cases </strong>: 1822286</div>`)[0];
                popup_589b31cbe4713436a0130b1a57d2e046.setContent(html_af65e3e40b7a8b3eac7c2f959829ebc4);
            

            circle_marker_4ee9c3c2d9285ba4dd053c15d557c0da.bindPopup(popup_589b31cbe4713436a0130b1a57d2e046)
            ;

            
        
    
            var circle_marker_7f4d1fa135325ec73a7fcd27251a7e33 = L.circleMarker(
                [-0.789275, 113.921327],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_813a9ec72655bb4f4afec87097816cb5 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2866ceb42e4d219e843f41e8cfc042fd = $(`<div id="html_2866ceb42e4d219e843f41e8cfc042fd" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Indonesia <strong>       Total Cases </strong>: 5874612</div>`)[0];
                popup_813a9ec72655bb4f4afec87097816cb5.setContent(html_2866ceb42e4d219e843f41e8cfc042fd);
            

            circle_marker_7f4d1fa135325ec73a7fcd27251a7e33.bindPopup(popup_813a9ec72655bb4f4afec87097816cb5)
            ;

            
        
    
            var circle_marker_ebe3981e2fd7343c6b90e39a7644cb1a = L.circleMarker(
                [53.41291, -8.24389],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d59bd98fb70819870035ea8c283be570 = L.popup({maxWidth: '100%'
            
            });

            
                var html_144474c0259c63964838e80464733ac1 = $(`<div id="html_144474c0259c63964838e80464733ac1" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Ireland <strong>       Total Cases </strong>: 1477478</div>`)[0];
                popup_d59bd98fb70819870035ea8c283be570.setContent(html_144474c0259c63964838e80464733ac1);
            

            circle_marker_ebe3981e2fd7343c6b90e39a7644cb1a.bindPopup(popup_d59bd98fb70819870035ea8c283be570)
            ;

            
        
    
            var circle_marker_102ef0f6d3ab3480bd16498fab2cd9d3 = L.circleMarker(
                [31.046051, 34.851612],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2161e9e386bc2ff3dbbe5fd4fd05ffbd = L.popup({maxWidth: '100%'
            
            });

            
                var html_d453d7a61be5bce11c37c13aa093d365 = $(`<div id="html_d453d7a61be5bce11c37c13aa093d365" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Israel <strong>       Total Cases </strong>: 3973112</div>`)[0];
                popup_2161e9e386bc2ff3dbbe5fd4fd05ffbd.setContent(html_d453d7a61be5bce11c37c13aa093d365);
            

            circle_marker_102ef0f6d3ab3480bd16498fab2cd9d3.bindPopup(popup_2161e9e386bc2ff3dbbe5fd4fd05ffbd)
            ;

            
        
    
            var circle_marker_0c68d5a2df4a6c30d4d942adaeb941c3 = L.circleMarker(
                [54.236107, -4.548056],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0e545c43dae692506e7d7147405ee453 = L.popup({maxWidth: '100%'
            
            });

            
                var html_65c88797125446330308dfe80a836b5d = $(`<div id="html_65c88797125446330308dfe80a836b5d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Isle of man <strong>       Total Cases </strong>: 30082</div>`)[0];
                popup_0e545c43dae692506e7d7147405ee453.setContent(html_65c88797125446330308dfe80a836b5d);
            

            circle_marker_0c68d5a2df4a6c30d4d942adaeb941c3.bindPopup(popup_0e545c43dae692506e7d7147405ee453)
            ;

            
        
    
            var circle_marker_29982610ac88d05288cf02ebf4036083 = L.circleMarker(
                [20.593684, 78.96288],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_77d09324be3836487ac3dedf94b6da9f = L.popup({maxWidth: '100%'
            
            });

            
                var html_67db2e5291b834490c586dc9ce10856e = $(`<div id="html_67db2e5291b834490c586dc9ce10856e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: India <strong>       Total Cases </strong>: 42511494</div>`)[0];
                popup_77d09324be3836487ac3dedf94b6da9f.setContent(html_67db2e5291b834490c586dc9ce10856e);
            

            circle_marker_29982610ac88d05288cf02ebf4036083.bindPopup(popup_77d09324be3836487ac3dedf94b6da9f)
            ;

            
        
    
            var circle_marker_cd0d31f9daaeb6cd659d153e1840e7af = L.circleMarker(
                [33.223191, 43.679291],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ec94b5d2e5764495bf9ef54dde78ffee = L.popup({maxWidth: '100%'
            
            });

            
                var html_9488df2094e9b6e8eca982131d1b9014 = $(`<div id="html_9488df2094e9b6e8eca982131d1b9014" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Iraq <strong>       Total Cases </strong>: 2295916</div>`)[0];
                popup_ec94b5d2e5764495bf9ef54dde78ffee.setContent(html_9488df2094e9b6e8eca982131d1b9014);
            

            circle_marker_cd0d31f9daaeb6cd659d153e1840e7af.bindPopup(popup_ec94b5d2e5764495bf9ef54dde78ffee)
            ;

            
        
    
            var circle_marker_c104fc8b47b6c48e59a757cb0b5f928a = L.circleMarker(
                [64.963051, -19.020835],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_293929d4b03e001c03c97cdbcaaf6e38 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8371d121512af523666f5f91d89bc360 = $(`<div id="html_8371d121512af523666f5f91d89bc360" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Iceland <strong>       Total Cases </strong>: 182531</div>`)[0];
                popup_293929d4b03e001c03c97cdbcaaf6e38.setContent(html_8371d121512af523666f5f91d89bc360);
            

            circle_marker_c104fc8b47b6c48e59a757cb0b5f928a.bindPopup(popup_293929d4b03e001c03c97cdbcaaf6e38)
            ;

            
        
    
            var circle_marker_fd26b2ab85d647718d146bc37ee43a5f = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d8506fdeee2165bd365603e37bbabf76 = L.popup({maxWidth: '100%'
            
            });

            
                var html_01effe5d2dc399e2ea5d4354e93838fa = $(`<div id="html_01effe5d2dc399e2ea5d4354e93838fa" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Italy <strong>       Total Cases </strong>: 14945664</div>`)[0];
                popup_d8506fdeee2165bd365603e37bbabf76.setContent(html_01effe5d2dc399e2ea5d4354e93838fa);
            

            circle_marker_fd26b2ab85d647718d146bc37ee43a5f.bindPopup(popup_d8506fdeee2165bd365603e37bbabf76)
            ;

            
        
    
            var circle_marker_7da968653fc19d60bb6e413753d16dec = L.circleMarker(
                [49.214439, -2.13125],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_038dd8e5e2e657786cb859f6ed47e087 = L.popup({maxWidth: '100%'
            
            });

            
                var html_d9c87552f54cc7fe4db7c92d7747b3eb = $(`<div id="html_d9c87552f54cc7fe4db7c92d7747b3eb" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Jersey <strong>       Total Cases </strong>: 47625</div>`)[0];
                popup_038dd8e5e2e657786cb859f6ed47e087.setContent(html_d9c87552f54cc7fe4db7c92d7747b3eb);
            

            circle_marker_7da968653fc19d60bb6e413753d16dec.bindPopup(popup_038dd8e5e2e657786cb859f6ed47e087)
            ;

            
        
    
            var circle_marker_7ba284ef4ceb6618a5b47ecc23713e7e = L.circleMarker(
                [18.109581, -77.297508],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_b18083bcd15941cacd6189bbb0722cc8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_262e7b7b52d55a7d8a1f5828e0f13c51 = $(`<div id="html_262e7b7b52d55a7d8a1f5828e0f13c51" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Jamaica <strong>       Total Cases </strong>: 126049</div>`)[0];
                popup_b18083bcd15941cacd6189bbb0722cc8.setContent(html_262e7b7b52d55a7d8a1f5828e0f13c51);
            

            circle_marker_7ba284ef4ceb6618a5b47ecc23713e7e.bindPopup(popup_b18083bcd15941cacd6189bbb0722cc8)
            ;

            
        
    
            var circle_marker_d8286e38e355a3d69ca4e0ac133cb979 = L.circleMarker(
                [30.585164, 36.238414],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0fa1576f2a7c35c5230d225a725764c2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_f7ca21997a58f074707997299400f0d3 = $(`<div id="html_f7ca21997a58f074707997299400f0d3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Jordan <strong>       Total Cases </strong>: 1680168</div>`)[0];
                popup_0fa1576f2a7c35c5230d225a725764c2.setContent(html_f7ca21997a58f074707997299400f0d3);
            

            circle_marker_d8286e38e355a3d69ca4e0ac133cb979.bindPopup(popup_0fa1576f2a7c35c5230d225a725764c2)
            ;

            
        
    
            var circle_marker_cc1aac963bbf123ec2c7cb553267dae6 = L.circleMarker(
                [36.204824, 138.252924],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_8777089e406dfa82d1ca86c0e1cd99cd = L.popup({maxWidth: '100%'
            
            });

            
                var html_447fed700c796d91fa0230ea8f035c0d = $(`<div id="html_447fed700c796d91fa0230ea8f035c0d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Japan <strong>       Total Cases </strong>: 6858893</div>`)[0];
                popup_8777089e406dfa82d1ca86c0e1cd99cd.setContent(html_447fed700c796d91fa0230ea8f035c0d);
            

            circle_marker_cc1aac963bbf123ec2c7cb553267dae6.bindPopup(popup_8777089e406dfa82d1ca86c0e1cd99cd)
            ;

            
        
    
            var circle_marker_fc765fde4f3f29f1c36e22d03cd9597a = L.circleMarker(
                [-0.023559, 37.906193],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4516667e1fb5ab218f7715c354e670e8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_03138d98b698ed098db50bec67c5fdd1 = $(`<div id="html_03138d98b698ed098db50bec67c5fdd1" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Kenya <strong>       Total Cases </strong>: 317858</div>`)[0];
                popup_4516667e1fb5ab218f7715c354e670e8.setContent(html_03138d98b698ed098db50bec67c5fdd1);
            

            circle_marker_fc765fde4f3f29f1c36e22d03cd9597a.bindPopup(popup_4516667e1fb5ab218f7715c354e670e8)
            ;

            
        
    
            var circle_marker_d49f0f94fccc05126ffdcd061fea0c21 = L.circleMarker(
                [41.20438, 74.766098],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ec6b2bed2209caa2518cdf330a3e0b04 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8fe7a4a835e5523cb2806727be833faa = $(`<div id="html_8fe7a4a835e5523cb2806727be833faa" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Kyrgyzstan <strong>       Total Cases </strong>: 197978</div>`)[0];
                popup_ec6b2bed2209caa2518cdf330a3e0b04.setContent(html_8fe7a4a835e5523cb2806727be833faa);
            

            circle_marker_d49f0f94fccc05126ffdcd061fea0c21.bindPopup(popup_ec6b2bed2209caa2518cdf330a3e0b04)
            ;

            
        
    
            var circle_marker_c01f067bdb7917be386f5028cc689ba4 = L.circleMarker(
                [12.565679, 104.990963],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_9e929299d9cb12c30cbf245eba5f776e = L.popup({maxWidth: '100%'
            
            });

            
                var html_7b84045eda671cdaa5bc97a55e7f78b7 = $(`<div id="html_7b84045eda671cdaa5bc97a55e7f78b7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cambodia <strong>       Total Cases </strong>: 132806</div>`)[0];
                popup_9e929299d9cb12c30cbf245eba5f776e.setContent(html_7b84045eda671cdaa5bc97a55e7f78b7);
            

            circle_marker_c01f067bdb7917be386f5028cc689ba4.bindPopup(popup_9e929299d9cb12c30cbf245eba5f776e)
            ;

            
        
    
            var circle_marker_fa53385317e2f144cf85f0e653c062f9 = L.circleMarker(
                [-3.370417, -168.734039],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c84bd697810142d19ca214ef0ce2b648 = L.popup({maxWidth: '100%'
            
            });

            
                var html_77c4443d9b4c1563e30fef4d4e93b854 = $(`<div id="html_77c4443d9b4c1563e30fef4d4e93b854" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Kiribati <strong>       Total Cases </strong>: 3055</div>`)[0];
                popup_c84bd697810142d19ca214ef0ce2b648.setContent(html_77c4443d9b4c1563e30fef4d4e93b854);
            

            circle_marker_fa53385317e2f144cf85f0e653c062f9.bindPopup(popup_c84bd697810142d19ca214ef0ce2b648)
            ;

            
        
    
            var circle_marker_9fea0dbfb308a44cf440e8a88082d5b0 = L.circleMarker(
                [-11.875001, 43.872219],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_db96765529e2e93cad402c455a712361 = L.popup({maxWidth: '100%'
            
            });

            
                var html_99cbc1e5f63445d4b96b1b2463414c51 = $(`<div id="html_99cbc1e5f63445d4b96b1b2463414c51" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Comoros <strong>       Total Cases </strong>: 7933</div>`)[0];
                popup_db96765529e2e93cad402c455a712361.setContent(html_99cbc1e5f63445d4b96b1b2463414c51);
            

            circle_marker_9fea0dbfb308a44cf440e8a88082d5b0.bindPopup(popup_db96765529e2e93cad402c455a712361)
            ;

            
        
    
            var circle_marker_2db50d8a2f224701657e207f0dfb98c1 = L.circleMarker(
                [17.357822, -62.782998],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ac169f211b9cac91cfbcf899c46be871 = L.popup({maxWidth: '100%'
            
            });

            
                var html_7e42710f42c21ec7e647e0c5555b59c4 = $(`<div id="html_7e42710f42c21ec7e647e0c5555b59c4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saint kitts and nevis <strong>       Total Cases </strong>: 5508</div>`)[0];
                popup_ac169f211b9cac91cfbcf899c46be871.setContent(html_7e42710f42c21ec7e647e0c5555b59c4);
            

            circle_marker_2db50d8a2f224701657e207f0dfb98c1.bindPopup(popup_ac169f211b9cac91cfbcf899c46be871)
            ;

            
        
    
            var circle_marker_2615d20c7948b584ff20d40d75138fae = L.circleMarker(
                [29.31166, 47.481766],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1ec540a8ee597b9eee7324b9bae88914 = L.popup({maxWidth: '100%'
            
            });

            
                var html_bf8f2ab66fd4b51fdae63ee803cda39b = $(`<div id="html_bf8f2ab66fd4b51fdae63ee803cda39b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Kuwait <strong>       Total Cases </strong>: 626971</div>`)[0];
                popup_1ec540a8ee597b9eee7324b9bae88914.setContent(html_bf8f2ab66fd4b51fdae63ee803cda39b);
            

            circle_marker_2615d20c7948b584ff20d40d75138fae.bindPopup(popup_1ec540a8ee597b9eee7324b9bae88914)
            ;

            
        
    
            var circle_marker_ea68f87be25a9b15fc519dc152e83594 = L.circleMarker(
                [19.513469, -80.566956],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_812ca9c920f63bcf5586b0fb6b787acc = L.popup({maxWidth: '100%'
            
            });

            
                var html_5919c9bf8ebb8fc0785a6edd0f2c3953 = $(`<div id="html_5919c9bf8ebb8fc0785a6edd0f2c3953" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Cayman islands <strong>       Total Cases </strong>: 21096</div>`)[0];
                popup_812ca9c920f63bcf5586b0fb6b787acc.setContent(html_5919c9bf8ebb8fc0785a6edd0f2c3953);
            

            circle_marker_ea68f87be25a9b15fc519dc152e83594.bindPopup(popup_812ca9c920f63bcf5586b0fb6b787acc)
            ;

            
        
    
            var circle_marker_eac26db7237c759d2c5656d5b48ec8a0 = L.circleMarker(
                [48.019573, 66.923684],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d6c9c327343e88c266e63ff7a934db09 = L.popup({maxWidth: '100%'
            
            });

            
                var html_11d23a407cd7e91b70409f6fe1d1c79b = $(`<div id="html_11d23a407cd7e91b70409f6fe1d1c79b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Kazakhstan <strong>       Total Cases </strong>: 1375001</div>`)[0];
                popup_d6c9c327343e88c266e63ff7a934db09.setContent(html_11d23a407cd7e91b70409f6fe1d1c79b);
            

            circle_marker_eac26db7237c759d2c5656d5b48ec8a0.bindPopup(popup_d6c9c327343e88c266e63ff7a934db09)
            ;

            
        
    
            var circle_marker_033cc65b4d27b4a6f1fa1959563288f9 = L.circleMarker(
                [33.854721, 35.862285],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_7732b0d0660a4e70efdf4bdbc793747f = L.popup({maxWidth: '100%'
            
            });

            
                var html_4b091c8eb0dce9bcd0e15d62d270a2fd = $(`<div id="html_4b091c8eb0dce9bcd0e15d62d270a2fd" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Lebanon <strong>       Total Cases </strong>: 1083524</div>`)[0];
                popup_7732b0d0660a4e70efdf4bdbc793747f.setContent(html_4b091c8eb0dce9bcd0e15d62d270a2fd);
            

            circle_marker_033cc65b4d27b4a6f1fa1959563288f9.bindPopup(popup_7732b0d0660a4e70efdf4bdbc793747f)
            ;

            
        
    
            var circle_marker_0e316f1ec26667bf0a1d216e4ba54d49 = L.circleMarker(
                [13.909444, -60.978893],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_7d33969c3b18e32e3e86626f28b34422 = L.popup({maxWidth: '100%'
            
            });

            
                var html_d7fa413c3252c48b4007cc4b2912ccf0 = $(`<div id="html_d7fa413c3252c48b4007cc4b2912ccf0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saint lucia <strong>       Total Cases </strong>: 22633</div>`)[0];
                popup_7d33969c3b18e32e3e86626f28b34422.setContent(html_d7fa413c3252c48b4007cc4b2912ccf0);
            

            circle_marker_0e316f1ec26667bf0a1d216e4ba54d49.bindPopup(popup_7d33969c3b18e32e3e86626f28b34422)
            ;

            
        
    
            var circle_marker_b329a762a52124eff0eaebb68fff65e3 = L.circleMarker(
                [47.166, 9.555373],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ac0d3f32f4fbac5d937e4370ce8fafd2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_63d1ae44854d5fc0ec0f324b564869fc = $(`<div id="html_63d1ae44854d5fc0ec0f324b564869fc" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Liechtenstein <strong>       Total Cases </strong>: 16501</div>`)[0];
                popup_ac0d3f32f4fbac5d937e4370ce8fafd2.setContent(html_63d1ae44854d5fc0ec0f324b564869fc);
            

            circle_marker_b329a762a52124eff0eaebb68fff65e3.bindPopup(popup_ac0d3f32f4fbac5d937e4370ce8fafd2)
            ;

            
        
    
            var circle_marker_c490f7dcba0f8789e54310bd637bbf04 = L.circleMarker(
                [7.873054, 80.771797],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_03b879c21b1f15bd4d44a287f4888a9d = L.popup({maxWidth: '100%'
            
            });

            
                var html_84d786c2275955ec10eb107b4ba3cc5c = $(`<div id="html_84d786c2275955ec10eb107b4ba3cc5c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Sri lanka <strong>       Total Cases </strong>: 645937</div>`)[0];
                popup_03b879c21b1f15bd4d44a287f4888a9d.setContent(html_84d786c2275955ec10eb107b4ba3cc5c);
            

            circle_marker_c490f7dcba0f8789e54310bd637bbf04.bindPopup(popup_03b879c21b1f15bd4d44a287f4888a9d)
            ;

            
        
    
            var circle_marker_2b9bb3c69e1db509820b163a43688f66 = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_518e82e918fa88a62616f12d5ecda018 = L.popup({maxWidth: '100%'
            
            });

            
                var html_6cd47bebb0c68be039471dd5c97226e5 = $(`<div id="html_6cd47bebb0c68be039471dd5c97226e5" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Liberia <strong>       Total Cases </strong>: 7106</div>`)[0];
                popup_518e82e918fa88a62616f12d5ecda018.setContent(html_6cd47bebb0c68be039471dd5c97226e5);
            

            circle_marker_2b9bb3c69e1db509820b163a43688f66.bindPopup(popup_518e82e918fa88a62616f12d5ecda018)
            ;

            
        
    
            var circle_marker_fc10acf2ba658d78addc0cae9372b423 = L.circleMarker(
                [-29.609988, 28.233608],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_0c2d0438eb13c92dbd1fc4d9f75df962 = L.popup({maxWidth: '100%'
            
            });

            
                var html_52411101385a2dd638fd6bd38726864e = $(`<div id="html_52411101385a2dd638fd6bd38726864e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Lesotho <strong>       Total Cases </strong>: 32213</div>`)[0];
                popup_0c2d0438eb13c92dbd1fc4d9f75df962.setContent(html_52411101385a2dd638fd6bd38726864e);
            

            circle_marker_fc10acf2ba658d78addc0cae9372b423.bindPopup(popup_0c2d0438eb13c92dbd1fc4d9f75df962)
            ;

            
        
    
            var circle_marker_54b21a97a96fa0d1cdc4a6a5ca61e741 = L.circleMarker(
                [55.169438, 23.881275],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4bbeb7c1bb1af5711229fa0f2802bec2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_342874972c7f393f45dfd3bf5b0d05eb = $(`<div id="html_342874972c7f393f45dfd3bf5b0d05eb" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Lithuania <strong>       Total Cases </strong>: 1030009</div>`)[0];
                popup_4bbeb7c1bb1af5711229fa0f2802bec2.setContent(html_342874972c7f393f45dfd3bf5b0d05eb);
            

            circle_marker_54b21a97a96fa0d1cdc4a6a5ca61e741.bindPopup(popup_4bbeb7c1bb1af5711229fa0f2802bec2)
            ;

            
        
    
            var circle_marker_79013636823c9b10652ab655a64eb102 = L.circleMarker(
                [49.815273, 6.129583],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2d9d5d8b0fbab36a71c709b5a2983570 = L.popup({maxWidth: '100%'
            
            });

            
                var html_035c04ed825d9761d2e7533d67e8f824 = $(`<div id="html_035c04ed825d9761d2e7533d67e8f824" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Luxembourg <strong>       Total Cases </strong>: 221762</div>`)[0];
                popup_2d9d5d8b0fbab36a71c709b5a2983570.setContent(html_035c04ed825d9761d2e7533d67e8f824);
            

            circle_marker_79013636823c9b10652ab655a64eb102.bindPopup(popup_2d9d5d8b0fbab36a71c709b5a2983570)
            ;

            
        
    
            var circle_marker_1470f781aba6f24d015026b2d362a261 = L.circleMarker(
                [56.879635, 24.603189],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2b6846eefb215d5da40f8887d5efb849 = L.popup({maxWidth: '100%'
            
            });

            
                var html_66a992f06f030136cbc9f186afdcfb69 = $(`<div id="html_66a992f06f030136cbc9f186afdcfb69" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Latvia <strong>       Total Cases </strong>: 800770</div>`)[0];
                popup_2b6846eefb215d5da40f8887d5efb849.setContent(html_66a992f06f030136cbc9f186afdcfb69);
            

            circle_marker_1470f781aba6f24d015026b2d362a261.bindPopup(popup_2b6846eefb215d5da40f8887d5efb849)
            ;

            
        
    
            var circle_marker_3a6de18e522e0c9cd3b0d85b39103431 = L.circleMarker(
                [26.3351, 17.228331],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_99926e7fd9de38f3ddbb56479f13348f = L.popup({maxWidth: '100%'
            
            });

            
                var html_33b76745a55c17b34db5e66790d9ebfb = $(`<div id="html_33b76745a55c17b34db5e66790d9ebfb" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Libya <strong>       Total Cases </strong>: 495319</div>`)[0];
                popup_99926e7fd9de38f3ddbb56479f13348f.setContent(html_33b76745a55c17b34db5e66790d9ebfb);
            

            circle_marker_3a6de18e522e0c9cd3b0d85b39103431.bindPopup(popup_99926e7fd9de38f3ddbb56479f13348f)
            ;

            
        
    
            var circle_marker_4e0adc560d5997ddc48e2281c50baa75 = L.circleMarker(
                [31.791702, -7.09262],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_30a92ef2f0c98c0aaa484ef9c1383bec = L.popup({maxWidth: '100%'
            
            });

            
                var html_a012cf320e7756740fa31e665b43abd0 = $(`<div id="html_a012cf320e7756740fa31e665b43abd0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Morocco <strong>       Total Cases </strong>: 1147665</div>`)[0];
                popup_30a92ef2f0c98c0aaa484ef9c1383bec.setContent(html_a012cf320e7756740fa31e665b43abd0);
            

            circle_marker_4e0adc560d5997ddc48e2281c50baa75.bindPopup(popup_30a92ef2f0c98c0aaa484ef9c1383bec)
            ;

            
        
    
            var circle_marker_6fa243286723a6471138760d34f69061 = L.circleMarker(
                [43.750298, 7.412841],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_1163ed950d510d9c3ff8444498342e08 = L.popup({maxWidth: '100%'
            
            });

            
                var html_976cf3f1f72c7ae1bf102a19a1c011c0 = $(`<div id="html_976cf3f1f72c7ae1bf102a19a1c011c0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Monaco <strong>       Total Cases </strong>: 11016</div>`)[0];
                popup_1163ed950d510d9c3ff8444498342e08.setContent(html_976cf3f1f72c7ae1bf102a19a1c011c0);
            

            circle_marker_6fa243286723a6471138760d34f69061.bindPopup(popup_1163ed950d510d9c3ff8444498342e08)
            ;

            
        
    
            var circle_marker_222aeae65d1033ec800cddd295e468de = L.circleMarker(
                [42.708678, 19.37439],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_94ad941a44f89981b68afc1033644313 = L.popup({maxWidth: '100%'
            
            });

            
                var html_52288d1adba8abb30c4126e8b2f207cf = $(`<div id="html_52288d1adba8abb30c4126e8b2f207cf" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Montenegro <strong>       Total Cases </strong>: 230871</div>`)[0];
                popup_94ad941a44f89981b68afc1033644313.setContent(html_52288d1adba8abb30c4126e8b2f207cf);
            

            circle_marker_222aeae65d1033ec800cddd295e468de.bindPopup(popup_94ad941a44f89981b68afc1033644313)
            ;

            
        
    
            var circle_marker_ac59ec79dad630de409b9538b6eed0b0 = L.circleMarker(
                [-18.766947, 46.869107],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_44b09c2dbc99eade0e96d9fdb360dec2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_517a1d2550675e529e2deb5f8ce12d9c = $(`<div id="html_517a1d2550675e529e2deb5f8ce12d9c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Madagascar <strong>       Total Cases </strong>: 62662</div>`)[0];
                popup_44b09c2dbc99eade0e96d9fdb360dec2.setContent(html_517a1d2550675e529e2deb5f8ce12d9c);
            

            circle_marker_ac59ec79dad630de409b9538b6eed0b0.bindPopup(popup_44b09c2dbc99eade0e96d9fdb360dec2)
            ;

            
        
    
            var circle_marker_8bc87f46e7f26fe0340d56129eea0058 = L.circleMarker(
                [7.131474, 171.184478],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_7cc86402c8968786dcf7e318cb9ae8d6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_a53f9e6ea55a0fe66db98781e014d8fe = $(`<div id="html_a53f9e6ea55a0fe66db98781e014d8fe" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Marshall islands <strong>       Total Cases </strong>: 4</div>`)[0];
                popup_7cc86402c8968786dcf7e318cb9ae8d6.setContent(html_a53f9e6ea55a0fe66db98781e014d8fe);
            

            circle_marker_8bc87f46e7f26fe0340d56129eea0058.bindPopup(popup_7cc86402c8968786dcf7e318cb9ae8d6)
            ;

            
        
    
            var circle_marker_376946f9f48511b71843dbf1db658f1b = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_43255523bfca797d20a428a0b84f8f69 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e74397d5a64e0841496e2c56b04803af = $(`<div id="html_e74397d5a64e0841496e2c56b04803af" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mali <strong>       Total Cases </strong>: 29798</div>`)[0];
                popup_43255523bfca797d20a428a0b84f8f69.setContent(html_e74397d5a64e0841496e2c56b04803af);
            

            circle_marker_376946f9f48511b71843dbf1db658f1b.bindPopup(popup_43255523bfca797d20a428a0b84f8f69)
            ;

            
        
    
            var circle_marker_1e7febfc1e477c0bd8be2fc6b0b51e8c = L.circleMarker(
                [46.862496, 103.846656],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e686c81ab2f55c0b960c11a75cf1cf84 = L.popup({maxWidth: '100%'
            
            });

            
                var html_ad4844a1fce09b751f55131bcd996736 = $(`<div id="html_ad4844a1fce09b751f55131bcd996736" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mongolia <strong>       Total Cases </strong>: 917762</div>`)[0];
                popup_e686c81ab2f55c0b960c11a75cf1cf84.setContent(html_ad4844a1fce09b751f55131bcd996736);
            

            circle_marker_1e7febfc1e477c0bd8be2fc6b0b51e8c.bindPopup(popup_e686c81ab2f55c0b960c11a75cf1cf84)
            ;

            
        
    
            var circle_marker_74d4035b2806bfb20a327ee5eb750c39 = L.circleMarker(
                [14.641528, -61.024174],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_93101022fea130af8be26ae4c2acf98b = L.popup({maxWidth: '100%'
            
            });

            
                var html_363642021bfd27b3273bab19b02c4c29 = $(`<div id="html_363642021bfd27b3273bab19b02c4c29" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Martinique <strong>       Total Cases </strong>: 146445</div>`)[0];
                popup_93101022fea130af8be26ae4c2acf98b.setContent(html_363642021bfd27b3273bab19b02c4c29);
            

            circle_marker_74d4035b2806bfb20a327ee5eb750c39.bindPopup(popup_93101022fea130af8be26ae4c2acf98b)
            ;

            
        
    
            var circle_marker_731329780d7b482643b6d547afc9d266 = L.circleMarker(
                [21.00789, -10.940835],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c1e35ce65a1e3d561e95498a4fea0587 = L.popup({maxWidth: '100%'
            
            });

            
                var html_7260249c8b4ef55e3bf20a1d3c384efc = $(`<div id="html_7260249c8b4ef55e3bf20a1d3c384efc" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mauritania <strong>       Total Cases </strong>: 57728</div>`)[0];
                popup_c1e35ce65a1e3d561e95498a4fea0587.setContent(html_7260249c8b4ef55e3bf20a1d3c384efc);
            

            circle_marker_731329780d7b482643b6d547afc9d266.bindPopup(popup_c1e35ce65a1e3d561e95498a4fea0587)
            ;

            
        
    
            var circle_marker_ce886ebbb42705678dbe43f54d1655ab = L.circleMarker(
                [16.742498, -62.187366],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2c8c1f2944b3f89cdc2248f92a62618f = L.popup({maxWidth: '100%'
            
            });

            
                var html_ec83532f3a9ee418b873a5b7a6028f11 = $(`<div id="html_ec83532f3a9ee418b873a5b7a6028f11" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Montserrat <strong>       Total Cases </strong>: 173</div>`)[0];
                popup_2c8c1f2944b3f89cdc2248f92a62618f.setContent(html_ec83532f3a9ee418b873a5b7a6028f11);
            

            circle_marker_ce886ebbb42705678dbe43f54d1655ab.bindPopup(popup_2c8c1f2944b3f89cdc2248f92a62618f)
            ;

            
        
    
            var circle_marker_305437d75003d8e552d1fb215be06509 = L.circleMarker(
                [35.937496, 14.375416],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_6ddc2147acdee8c0ea0021ca5839ba8a = L.popup({maxWidth: '100%'
            
            });

            
                var html_e9f2687ca678cf8b92f25bcaa2114f3c = $(`<div id="html_e9f2687ca678cf8b92f25bcaa2114f3c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Malta <strong>       Total Cases </strong>: 83746</div>`)[0];
                popup_6ddc2147acdee8c0ea0021ca5839ba8a.setContent(html_e9f2687ca678cf8b92f25bcaa2114f3c);
            

            circle_marker_305437d75003d8e552d1fb215be06509.bindPopup(popup_6ddc2147acdee8c0ea0021ca5839ba8a)
            ;

            
        
    
            var circle_marker_51b4f6374d01339f0ef5375ef567fc91 = L.circleMarker(
                [-20.348404, 57.552152],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_337c45a4ffb21365466cab165467a5ff = L.popup({maxWidth: '100%'
            
            });

            
                var html_ad68b835dc5b6fa75b1ac3fd2ec90537 = $(`<div id="html_ad68b835dc5b6fa75b1ac3fd2ec90537" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mauritius <strong>       Total Cases </strong>: 213875</div>`)[0];
                popup_337c45a4ffb21365466cab165467a5ff.setContent(html_ad68b835dc5b6fa75b1ac3fd2ec90537);
            

            circle_marker_51b4f6374d01339f0ef5375ef567fc91.bindPopup(popup_337c45a4ffb21365466cab165467a5ff)
            ;

            
        
    
            var circle_marker_3c272c2a24374ab43ed95ebe40affd03 = L.circleMarker(
                [3.202778, 73.22068],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e23cab2a043ce96e72abede3b8d33615 = L.popup({maxWidth: '100%'
            
            });

            
                var html_a5044f58c3f5431082a5d37ad3f7f4c7 = $(`<div id="html_a5044f58c3f5431082a5d37ad3f7f4c7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Maldives <strong>       Total Cases </strong>: 177367</div>`)[0];
                popup_e23cab2a043ce96e72abede3b8d33615.setContent(html_a5044f58c3f5431082a5d37ad3f7f4c7);
            

            circle_marker_3c272c2a24374ab43ed95ebe40affd03.bindPopup(popup_e23cab2a043ce96e72abede3b8d33615)
            ;

            
        
    
            var circle_marker_c9b7ae1b15ffcc7e28f3f9a4896acefb = L.circleMarker(
                [-13.254308, 34.301525],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_dae3f80c45f2dfd550d0af7989054ab7 = L.popup({maxWidth: '100%'
            
            });

            
                var html_90a48375f8f38f25e96680bed163ab5f = $(`<div id="html_90a48375f8f38f25e96680bed163ab5f" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Malawi <strong>       Total Cases </strong>: 83055</div>`)[0];
                popup_dae3f80c45f2dfd550d0af7989054ab7.setContent(html_90a48375f8f38f25e96680bed163ab5f);
            

            circle_marker_c9b7ae1b15ffcc7e28f3f9a4896acefb.bindPopup(popup_dae3f80c45f2dfd550d0af7989054ab7)
            ;

            
        
    
            var circle_marker_015761880192ab0fcb8005bebf945952 = L.circleMarker(
                [23.634501, -102.552784],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c8ac4271b37cc9b24f31ca14b9b08f43 = L.popup({maxWidth: '100%'
            
            });

            
                var html_de31efef3211fe4f08abc63b5b00c471 = $(`<div id="html_de31efef3211fe4f08abc63b5b00c471" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mexico <strong>       Total Cases </strong>: 5359885</div>`)[0];
                popup_c8ac4271b37cc9b24f31ca14b9b08f43.setContent(html_de31efef3211fe4f08abc63b5b00c471);
            

            circle_marker_015761880192ab0fcb8005bebf945952.bindPopup(popup_c8ac4271b37cc9b24f31ca14b9b08f43)
            ;

            
        
    
            var circle_marker_577a7727f31521a84c52046d1ef7a33a = L.circleMarker(
                [4.210484, 101.975766],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_cdf4d0740a08b804b6b9bf04c1268944 = L.popup({maxWidth: '100%'
            
            });

            
                var html_dea3b6cc7fb9c42a2cd25b9b9f9e0e74 = $(`<div id="html_dea3b6cc7fb9c42a2cd25b9b9f9e0e74" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Malaysia <strong>       Total Cases </strong>: 4257357</div>`)[0];
                popup_cdf4d0740a08b804b6b9bf04c1268944.setContent(html_dea3b6cc7fb9c42a2cd25b9b9f9e0e74);
            

            circle_marker_577a7727f31521a84c52046d1ef7a33a.bindPopup(popup_cdf4d0740a08b804b6b9bf04c1268944)
            ;

            
        
    
            var circle_marker_f49ec5e4084d7f0596be8dd391d1480f = L.circleMarker(
                [-18.665695, 35.529562],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_635e7fd27a4cbb1dd06b51643571030f = L.popup({maxWidth: '100%'
            
            });

            
                var html_1268fc44cac348eb60dbe2b0f79083fe = $(`<div id="html_1268fc44cac348eb60dbe2b0f79083fe" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mozambique <strong>       Total Cases </strong>: 223075</div>`)[0];
                popup_635e7fd27a4cbb1dd06b51643571030f.setContent(html_1268fc44cac348eb60dbe2b0f79083fe);
            

            circle_marker_f49ec5e4084d7f0596be8dd391d1480f.bindPopup(popup_635e7fd27a4cbb1dd06b51643571030f)
            ;

            
        
    
            var circle_marker_1dae9808179a7866a5e76cf35e06fabc = L.circleMarker(
                [-22.95764, 18.49041],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_8aba1b805be79a77fe1060db6d98c6dc = L.popup({maxWidth: '100%'
            
            });

            
                var html_d993aecf82aff3705a7ed3dafb53d9f7 = $(`<div id="html_d993aecf82aff3705a7ed3dafb53d9f7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Namibia <strong>       Total Cases </strong>: 153805</div>`)[0];
                popup_8aba1b805be79a77fe1060db6d98c6dc.setContent(html_d993aecf82aff3705a7ed3dafb53d9f7);
            

            circle_marker_1dae9808179a7866a5e76cf35e06fabc.bindPopup(popup_8aba1b805be79a77fe1060db6d98c6dc)
            ;

            
        
    
            var circle_marker_15ecfd0cfe4f0015d4d274dfede450c5 = L.circleMarker(
                [-20.904305, 165.618042],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_43b0b84c85f315772827581a1d922eac = L.popup({maxWidth: '100%'
            
            });

            
                var html_04e397d71b254a4003211bcb36871e3d = $(`<div id="html_04e397d71b254a4003211bcb36871e3d" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: New caledonia <strong>       Total Cases </strong>: 60182</div>`)[0];
                popup_43b0b84c85f315772827581a1d922eac.setContent(html_04e397d71b254a4003211bcb36871e3d);
            

            circle_marker_15ecfd0cfe4f0015d4d274dfede450c5.bindPopup(popup_43b0b84c85f315772827581a1d922eac)
            ;

            
        
    
            var circle_marker_dd92d3750677fba042408a545e7cbe77 = L.circleMarker(
                [17.607789, 8.081666],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_dbab43647b4fdb8f8199ac1555521200 = L.popup({maxWidth: '100%'
            
            });

            
                var html_84e3513b9ccea4c316b23264bc3a7b75 = $(`<div id="html_84e3513b9ccea4c316b23264bc3a7b75" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Niger <strong>       Total Cases </strong>: 8514</div>`)[0];
                popup_dbab43647b4fdb8f8199ac1555521200.setContent(html_84e3513b9ccea4c316b23264bc3a7b75);
            

            circle_marker_dd92d3750677fba042408a545e7cbe77.bindPopup(popup_dbab43647b4fdb8f8199ac1555521200)
            ;

            
        
    
            var circle_marker_dfb2e56b11c97449b7f20e53b731e7ae = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d6e367b9bb3f2e6e758b71dc6a650218 = L.popup({maxWidth: '100%'
            
            });

            
                var html_af856e8cdcb94367661309d990f87ad6 = $(`<div id="html_af856e8cdcb94367661309d990f87ad6" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Nigeria <strong>       Total Cases </strong>: 252433</div>`)[0];
                popup_d6e367b9bb3f2e6e758b71dc6a650218.setContent(html_af856e8cdcb94367661309d990f87ad6);
            

            circle_marker_dfb2e56b11c97449b7f20e53b731e7ae.bindPopup(popup_d6e367b9bb3f2e6e758b71dc6a650218)
            ;

            
        
    
            var circle_marker_dcda1e0b7087e2034dd2752e731fd4da = L.circleMarker(
                [12.865416, -85.207229],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c6083a48cee602027cf744ae868abc1e = L.popup({maxWidth: '100%'
            
            });

            
                var html_17637998432e49ea2d4848741d269518 = $(`<div id="html_17637998432e49ea2d4848741d269518" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Nicaragua <strong>       Total Cases </strong>: 14075</div>`)[0];
                popup_c6083a48cee602027cf744ae868abc1e.setContent(html_17637998432e49ea2d4848741d269518);
            

            circle_marker_dcda1e0b7087e2034dd2752e731fd4da.bindPopup(popup_c6083a48cee602027cf744ae868abc1e)
            ;

            
        
    
            var circle_marker_0f3eeba1e00a823724b414fb1e48b26f = L.circleMarker(
                [52.132633, 5.291266],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f2b6723548768d99d1449adf3bfe45e3 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c2e88d6da92175c622a9e39e46a47f9a = $(`<div id="html_c2e88d6da92175c622a9e39e46a47f9a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Netherlands <strong>       Total Cases </strong>: 7938915</div>`)[0];
                popup_f2b6723548768d99d1449adf3bfe45e3.setContent(html_c2e88d6da92175c622a9e39e46a47f9a);
            

            circle_marker_0f3eeba1e00a823724b414fb1e48b26f.bindPopup(popup_f2b6723548768d99d1449adf3bfe45e3)
            ;

            
        
    
            var circle_marker_9bebbaba676eb340dd38a90e04cbc43c = L.circleMarker(
                [60.472024, 8.468946],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a90db8b3d63b22c8f042b008dd5bfe25 = L.popup({maxWidth: '100%'
            
            });

            
                var html_61cb010e5b69400bc7521c5297d03a2b = $(`<div id="html_61cb010e5b69400bc7521c5297d03a2b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Norway <strong>       Total Cases </strong>: 1410299</div>`)[0];
                popup_a90db8b3d63b22c8f042b008dd5bfe25.setContent(html_61cb010e5b69400bc7521c5297d03a2b);
            

            circle_marker_9bebbaba676eb340dd38a90e04cbc43c.bindPopup(popup_a90db8b3d63b22c8f042b008dd5bfe25)
            ;

            
        
    
            var circle_marker_431b0ce78d797ef8de40099f29447f2c = L.circleMarker(
                [28.394857, 84.124008],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_58a2daccaabae6f3be2dfca161673060 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b8ed2e6543092048fff1ca610fe2ebe1 = $(`<div id="html_b8ed2e6543092048fff1ca610fe2ebe1" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Nepal <strong>       Total Cases </strong>: 966605</div>`)[0];
                popup_58a2daccaabae6f3be2dfca161673060.setContent(html_b8ed2e6543092048fff1ca610fe2ebe1);
            

            circle_marker_431b0ce78d797ef8de40099f29447f2c.bindPopup(popup_58a2daccaabae6f3be2dfca161673060)
            ;

            
        
    
            var circle_marker_35ca45583dbedf65d2c3f5b1a5b4c6c1 = L.circleMarker(
                [-0.522778, 166.931503],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_74433fa7d541b34a4c578ffbc3370ab4 = L.popup({maxWidth: '100%'
            
            });

            
                var html_40916fb128ab728d3153e960548a4c3a = $(`<div id="html_40916fb128ab728d3153e960548a4c3a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Nauru <strong>       Total Cases </strong>: 3</div>`)[0];
                popup_74433fa7d541b34a4c578ffbc3370ab4.setContent(html_40916fb128ab728d3153e960548a4c3a);
            

            circle_marker_35ca45583dbedf65d2c3f5b1a5b4c6c1.bindPopup(popup_74433fa7d541b34a4c578ffbc3370ab4)
            ;

            
        
    
            var circle_marker_3a4d0ddbfde5893f94cb9d026acf2fce = L.circleMarker(
                [-19.054445, -169.867233],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d2bde5aa30c9c5317503aeecabecfb24 = L.popup({maxWidth: '100%'
            
            });

            
                var html_939d80ea38e0108f54d7c5eae82c0775 = $(`<div id="html_939d80ea38e0108f54d7c5eae82c0775" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Niue <strong>       Total Cases </strong>: 7</div>`)[0];
                popup_d2bde5aa30c9c5317503aeecabecfb24.setContent(html_939d80ea38e0108f54d7c5eae82c0775);
            

            circle_marker_3a4d0ddbfde5893f94cb9d026acf2fce.bindPopup(popup_d2bde5aa30c9c5317503aeecabecfb24)
            ;

            
        
    
            var circle_marker_fb012fc07890929fbe8c54250620cb3a = L.circleMarker(
                [-40.900557, 174.885971],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_2b5697843b51d3bdb19b17b22a24d836 = L.popup({maxWidth: '100%'
            
            });

            
                var html_9e2da31abca475cbe73c7a5c757257d3 = $(`<div id="html_9e2da31abca475cbe73c7a5c757257d3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: New zealand <strong>       Total Cases </strong>: 749959</div>`)[0];
                popup_2b5697843b51d3bdb19b17b22a24d836.setContent(html_9e2da31abca475cbe73c7a5c757257d3);
            

            circle_marker_fb012fc07890929fbe8c54250620cb3a.bindPopup(popup_2b5697843b51d3bdb19b17b22a24d836)
            ;

            
        
    
            var circle_marker_4f374f69320c695dfa65a045d44b63d9 = L.circleMarker(
                [21.512583, 55.923255],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4ff854f2739cf3e4ba1cddb8b2782a01 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b93f44dc3039096823f748b982410001 = $(`<div id="html_b93f44dc3039096823f748b982410001" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Oman <strong>       Total Cases </strong>: 384350</div>`)[0];
                popup_4ff854f2739cf3e4ba1cddb8b2782a01.setContent(html_b93f44dc3039096823f748b982410001);
            

            circle_marker_4f374f69320c695dfa65a045d44b63d9.bindPopup(popup_4ff854f2739cf3e4ba1cddb8b2782a01)
            ;

            
        
    
            var circle_marker_d9a1633a5635c1be66c4a93d4b3b9276 = L.circleMarker(
                [8.537981, -80.782127],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d242df941fd00f9f3e20cb324930bdc0 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2ef7dc9fbde3d54651ae783931c15b1e = $(`<div id="html_2ef7dc9fbde3d54651ae783931c15b1e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Panama <strong>       Total Cases </strong>: 757758</div>`)[0];
                popup_d242df941fd00f9f3e20cb324930bdc0.setContent(html_2ef7dc9fbde3d54651ae783931c15b1e);
            

            circle_marker_d9a1633a5635c1be66c4a93d4b3b9276.bindPopup(popup_d242df941fd00f9f3e20cb324930bdc0)
            ;

            
        
    
            var circle_marker_28498d33ef6e50afc59d44f3795945de = L.circleMarker(
                [-9.189967, -75.015152],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f671a3c285a2b0ac5a5ab6e684417715 = L.popup({maxWidth: '100%'
            
            });

            
                var html_b3e162081bc4745b3a4238d5d1b9b571 = $(`<div id="html_b3e162081bc4745b3a4238d5d1b9b571" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Peru <strong>       Total Cases </strong>: 3337115</div>`)[0];
                popup_f671a3c285a2b0ac5a5ab6e684417715.setContent(html_b3e162081bc4745b3a4238d5d1b9b571);
            

            circle_marker_28498d33ef6e50afc59d44f3795945de.bindPopup(popup_f671a3c285a2b0ac5a5ab6e684417715)
            ;

            
        
    
            var circle_marker_66b2e33270a7556e3ea2aa81799c9745 = L.circleMarker(
                [-17.679742, -149.406843],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_67e31eb7fc67002e593e2b1f3ab157f3 = L.popup({maxWidth: '100%'
            
            });

            
                var html_16c77d963b47d7211fb3b5c45fc805c7 = $(`<div id="html_16c77d963b47d7211fb3b5c45fc805c7" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: French polynesia <strong>       Total Cases </strong>: 71880</div>`)[0];
                popup_67e31eb7fc67002e593e2b1f3ab157f3.setContent(html_16c77d963b47d7211fb3b5c45fc805c7);
            

            circle_marker_66b2e33270a7556e3ea2aa81799c9745.bindPopup(popup_67e31eb7fc67002e593e2b1f3ab157f3)
            ;

            
        
    
            var circle_marker_e8963a0d3e234bc3a937ef2d34a426d2 = L.circleMarker(
                [-6.314993, 143.95555],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_fdd0c10f195e6e6186e6c86e363f3e61 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2782ea29eeac3d841346ab7060329bff = $(`<div id="html_2782ea29eeac3d841346ab7060329bff" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Papua new guinea <strong>       Total Cases </strong>: 42781</div>`)[0];
                popup_fdd0c10f195e6e6186e6c86e363f3e61.setContent(html_2782ea29eeac3d841346ab7060329bff);
            

            circle_marker_e8963a0d3e234bc3a937ef2d34a426d2.bindPopup(popup_fdd0c10f195e6e6186e6c86e363f3e61)
            ;

            
        
    
            var circle_marker_9cb0b0bc6788d500bb184a4ecb63b623 = L.circleMarker(
                [12.879721, 121.774017],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_581b284503e8d1ea8926cb962e0f1e86 = L.popup({maxWidth: '100%'
            
            });

            
                var html_0268d2614d19f9da44bd56adbf936727 = $(`<div id="html_0268d2614d19f9da44bd56adbf936727" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Philippines <strong>       Total Cases </strong>: 3620923</div>`)[0];
                popup_581b284503e8d1ea8926cb962e0f1e86.setContent(html_0268d2614d19f9da44bd56adbf936727);
            

            circle_marker_9cb0b0bc6788d500bb184a4ecb63b623.bindPopup(popup_581b284503e8d1ea8926cb962e0f1e86)
            ;

            
        
    
            var circle_marker_53ead09a60e57143dbfc3bb6036605f3 = L.circleMarker(
                [30.375321, 69.345116],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a384a580d71ae6ca7508903c71407062 = L.popup({maxWidth: '100%'
            
            });

            
                var html_21a3246a5b15986aed1cd1a8d80c7908 = $(`<div id="html_21a3246a5b15986aed1cd1a8d80c7908" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Pakistan <strong>       Total Cases </strong>: 1495732</div>`)[0];
                popup_a384a580d71ae6ca7508903c71407062.setContent(html_21a3246a5b15986aed1cd1a8d80c7908);
            

            circle_marker_53ead09a60e57143dbfc3bb6036605f3.bindPopup(popup_a384a580d71ae6ca7508903c71407062)
            ;

            
        
    
            var circle_marker_ccf2531b5993e8993dee9b4c041c43a0 = L.circleMarker(
                [51.919438, 19.145136],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_85349c4b5ee19becf826ab8d0ab2f595 = L.popup({maxWidth: '100%'
            
            });

            
                var html_005fbbb7198eb8eba796a42b6d3489d0 = $(`<div id="html_005fbbb7198eb8eba796a42b6d3489d0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Poland <strong>       Total Cases </strong>: 5860770</div>`)[0];
                popup_85349c4b5ee19becf826ab8d0ab2f595.setContent(html_005fbbb7198eb8eba796a42b6d3489d0);
            

            circle_marker_ccf2531b5993e8993dee9b4c041c43a0.bindPopup(popup_85349c4b5ee19becf826ab8d0ab2f595)
            ;

            
        
    
            var circle_marker_982c721d802f6972971e4fb5aa39481a = L.circleMarker(
                [46.941936, -56.27111],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e0e6b290650610f944f6ce74cc295ec0 = L.popup({maxWidth: '100%'
            
            });

            
                var html_af446b3f85e92c6fc29179094cc97b80 = $(`<div id="html_af446b3f85e92c6fc29179094cc97b80" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saint pierre and miquelon <strong>       Total Cases </strong>: 2417</div>`)[0];
                popup_e0e6b290650610f944f6ce74cc295ec0.setContent(html_af446b3f85e92c6fc29179094cc97b80);
            

            circle_marker_982c721d802f6972971e4fb5aa39481a.bindPopup(popup_e0e6b290650610f944f6ce74cc295ec0)
            ;

            
        
    
            var circle_marker_e8b2a1842135aea12256959afbf50ef1 = L.circleMarker(
                [-24.703615, -127.439308],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_24eedf355979f15952f5d371b7878bc3 = L.popup({maxWidth: '100%'
            
            });

            
                var html_30d34a2fa3c549ee65a30d88a0c29b76 = $(`<div id="html_30d34a2fa3c549ee65a30d88a0c29b76" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Pitcairn islands <strong>       Total Cases </strong>: 0</div>`)[0];
                popup_24eedf355979f15952f5d371b7878bc3.setContent(html_30d34a2fa3c549ee65a30d88a0c29b76);
            

            circle_marker_e8b2a1842135aea12256959afbf50ef1.bindPopup(popup_24eedf355979f15952f5d371b7878bc3)
            ;

            
        
    
            var circle_marker_7a9ed0ede16cafa1b8e9914b091c0840 = L.circleMarker(
                [18.220833, -66.590149],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_057bb80fe0bf26eaa85a9db679dd2677 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8a2a733c0a06e60b2718edb200a5227b = $(`<div id="html_8a2a733c0a06e60b2718edb200a5227b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Puerto rico <strong>       Total Cases </strong>: 480114</div>`)[0];
                popup_057bb80fe0bf26eaa85a9db679dd2677.setContent(html_8a2a733c0a06e60b2718edb200a5227b);
            

            circle_marker_7a9ed0ede16cafa1b8e9914b091c0840.bindPopup(popup_057bb80fe0bf26eaa85a9db679dd2677)
            ;

            
        
    
            var circle_marker_2e90ee6b41fc861c25c64fbc73cf87c7 = L.circleMarker(
                [39.399872, -8.224454],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_8b88a05b9ca56370f17240e64647cb20 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2250a6d3426787c8d9881d7606c694f4 = $(`<div id="html_2250a6d3426787c8d9881d7606c694f4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Portugal <strong>       Total Cases </strong>: 3635934</div>`)[0];
                popup_8b88a05b9ca56370f17240e64647cb20.setContent(html_2250a6d3426787c8d9881d7606c694f4);
            

            circle_marker_2e90ee6b41fc861c25c64fbc73cf87c7.bindPopup(popup_8b88a05b9ca56370f17240e64647cb20)
            ;

            
        
    
            var circle_marker_ac6a7876b330eef2b8ed1e9b9e3454ee = L.circleMarker(
                [7.51498, 134.58252],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_76fd25ee8657d7abfcc3fbd8e07f17ff = L.popup({maxWidth: '100%'
            
            });

            
                var html_27b11e96417aa647001c04680098eccd = $(`<div id="html_27b11e96417aa647001c04680098eccd" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Palau <strong>       Total Cases </strong>: 4064</div>`)[0];
                popup_76fd25ee8657d7abfcc3fbd8e07f17ff.setContent(html_27b11e96417aa647001c04680098eccd);
            

            circle_marker_ac6a7876b330eef2b8ed1e9b9e3454ee.bindPopup(popup_76fd25ee8657d7abfcc3fbd8e07f17ff)
            ;

            
        
    
            var circle_marker_4cece12ced7217f1547988763b652bc1 = L.circleMarker(
                [-23.442503, -58.443832],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_67d5dbfdf7d489588d8393d980c6ffc1 = L.popup({maxWidth: '100%'
            
            });

            
                var html_6dc9ae72e7e3b5fb93049fdd4a259217 = $(`<div id="html_6dc9ae72e7e3b5fb93049fdd4a259217" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Paraguay <strong>       Total Cases </strong>: 629622</div>`)[0];
                popup_67d5dbfdf7d489588d8393d980c6ffc1.setContent(html_6dc9ae72e7e3b5fb93049fdd4a259217);
            

            circle_marker_4cece12ced7217f1547988763b652bc1.bindPopup(popup_67d5dbfdf7d489588d8393d980c6ffc1)
            ;

            
        
    
            var circle_marker_f9eb82ff3e4f5527ffa0fcfc1c31251f = L.circleMarker(
                [25.354826, 51.183884],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_75176816bf444ffee8e09edf7232b68f = L.popup({maxWidth: '100%'
            
            });

            
                var html_e9f1d1be992074a162f46b3ff85288f3 = $(`<div id="html_e9f1d1be992074a162f46b3ff85288f3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Qatar <strong>       Total Cases </strong>: 361596</div>`)[0];
                popup_75176816bf444ffee8e09edf7232b68f.setContent(html_e9f1d1be992074a162f46b3ff85288f3);
            

            circle_marker_f9eb82ff3e4f5527ffa0fcfc1c31251f.bindPopup(popup_75176816bf444ffee8e09edf7232b68f)
            ;

            
        
    
            var circle_marker_4607706a9a302b1fb93b3b9329aba4a5 = L.circleMarker(
                [-21.115141, 55.536384],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f90c692cd81fdecffc03eae9d2d51238 = L.popup({maxWidth: '100%'
            
            });

            
                var html_be76baa0298947a77581f1180319df1c = $(`<div id="html_be76baa0298947a77581f1180319df1c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Réunion <strong>       Total Cases </strong>: 347221</div>`)[0];
                popup_f90c692cd81fdecffc03eae9d2d51238.setContent(html_be76baa0298947a77581f1180319df1c);
            

            circle_marker_4607706a9a302b1fb93b3b9329aba4a5.bindPopup(popup_f90c692cd81fdecffc03eae9d2d51238)
            ;

            
        
    
            var circle_marker_46ea182085b01c4c20b3ec4ea9efbeeb = L.circleMarker(
                [45.943161, 24.96676],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a921744e31bd292af011956f1a9eb974 = L.popup({maxWidth: '100%'
            
            });

            
                var html_0f73b5e6ef365ceabd8bd8dff795763f = $(`<div id="html_0f73b5e6ef365ceabd8bd8dff795763f" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Romania <strong>       Total Cases </strong>: 2803607</div>`)[0];
                popup_a921744e31bd292af011956f1a9eb974.setContent(html_0f73b5e6ef365ceabd8bd8dff795763f);
            

            circle_marker_46ea182085b01c4c20b3ec4ea9efbeeb.bindPopup(popup_a921744e31bd292af011956f1a9eb974)
            ;

            
        
    
            var circle_marker_93f1faccad4149e2bd7e5c3c65e5582d = L.circleMarker(
                [44.016521, 21.005859],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_905ff17f147db0f12243b164d1bc2b86 = L.popup({maxWidth: '100%'
            
            });

            
                var html_bda39d35245c9ade30a7557d0a3f66d3 = $(`<div id="html_bda39d35245c9ade30a7557d0a3f66d3" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Serbia <strong>       Total Cases </strong>: 1970577</div>`)[0];
                popup_905ff17f147db0f12243b164d1bc2b86.setContent(html_bda39d35245c9ade30a7557d0a3f66d3);
            

            circle_marker_93f1faccad4149e2bd7e5c3c65e5582d.bindPopup(popup_905ff17f147db0f12243b164d1bc2b86)
            ;

            
        
    
            var circle_marker_a4e7f1c34d8be1f0d83f963b03f331dd = L.circleMarker(
                [-1.940278, 29.873888],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_db5f8ef921a1323aa76a762d094084cb = L.popup({maxWidth: '100%'
            
            });

            
                var html_1506b3b1d25ea0d8405a2f06657548ae = $(`<div id="html_1506b3b1d25ea0d8405a2f06657548ae" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Rwanda <strong>       Total Cases </strong>: 128284</div>`)[0];
                popup_db5f8ef921a1323aa76a762d094084cb.setContent(html_1506b3b1d25ea0d8405a2f06657548ae);
            

            circle_marker_a4e7f1c34d8be1f0d83f963b03f331dd.bindPopup(popup_db5f8ef921a1323aa76a762d094084cb)
            ;

            
        
    
            var circle_marker_e085d0d86e5a874960a8fd4582a3d3a1 = L.circleMarker(
                [23.885942, 45.079162],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_df0e166af5d9a4dd9acfa12aa3aa0aea = L.popup({maxWidth: '100%'
            
            });

            
                var html_b40eaf8311781d3aae137346a5646b77 = $(`<div id="html_b40eaf8311781d3aae137346a5646b77" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saudi arabia <strong>       Total Cases </strong>: 742464</div>`)[0];
                popup_df0e166af5d9a4dd9acfa12aa3aa0aea.setContent(html_b40eaf8311781d3aae137346a5646b77);
            

            circle_marker_e085d0d86e5a874960a8fd4582a3d3a1.bindPopup(popup_df0e166af5d9a4dd9acfa12aa3aa0aea)
            ;

            
        
    
            var circle_marker_9dd067f4960d02369d450a742d4c01eb = L.circleMarker(
                [-9.64571, 160.156194],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4766ffcaa217e4f428e6e1afee8e06fd = L.popup({maxWidth: '100%'
            
            });

            
                var html_b385367d1bddab119d5e51e7b373576f = $(`<div id="html_b385367d1bddab119d5e51e7b373576f" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Solomon islands <strong>       Total Cases </strong>: 11868</div>`)[0];
                popup_4766ffcaa217e4f428e6e1afee8e06fd.setContent(html_b385367d1bddab119d5e51e7b373576f);
            

            circle_marker_9dd067f4960d02369d450a742d4c01eb.bindPopup(popup_4766ffcaa217e4f428e6e1afee8e06fd)
            ;

            
        
    
            var circle_marker_e5e905c54f703c13b6e1c1c10fb0a384 = L.circleMarker(
                [-4.679574, 55.491977],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_af118586d90edfbd7eecc8c103fe03ba = L.popup({maxWidth: '100%'
            
            });

            
                var html_d9512d544dab90480ad2e7f32ce13b4b = $(`<div id="html_d9512d544dab90480ad2e7f32ce13b4b" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Seychelles <strong>       Total Cases </strong>: 40896</div>`)[0];
                popup_af118586d90edfbd7eecc8c103fe03ba.setContent(html_d9512d544dab90480ad2e7f32ce13b4b);
            

            circle_marker_e5e905c54f703c13b6e1c1c10fb0a384.bindPopup(popup_af118586d90edfbd7eecc8c103fe03ba)
            ;

            
        
    
            var circle_marker_1d06fca3315ff24f61436342629ddce3 = L.circleMarker(
                [12.862807, 30.217636],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d7fc8619192d7498ea5dd15105b32fc8 = L.popup({maxWidth: '100%'
            
            });

            
                var html_64469546d4b48e38a0b09ae6e6b3729a = $(`<div id="html_64469546d4b48e38a0b09ae6e6b3729a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Sudan <strong>       Total Cases </strong>: 57080</div>`)[0];
                popup_d7fc8619192d7498ea5dd15105b32fc8.setContent(html_64469546d4b48e38a0b09ae6e6b3729a);
            

            circle_marker_1d06fca3315ff24f61436342629ddce3.bindPopup(popup_d7fc8619192d7498ea5dd15105b32fc8)
            ;

            
        
    
            var circle_marker_b2240d462a2ed5f835efe787c1c24573 = L.circleMarker(
                [60.128161, 18.643501],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a836a35bced84cbe80a6cbf3dc63567b = L.popup({maxWidth: '100%'
            
            });

            
                var html_39c759d57ae49f7ed2a669a010d2d6be = $(`<div id="html_39c759d57ae49f7ed2a669a010d2d6be" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Sweden <strong>       Total Cases </strong>: 2473474</div>`)[0];
                popup_a836a35bced84cbe80a6cbf3dc63567b.setContent(html_39c759d57ae49f7ed2a669a010d2d6be);
            

            circle_marker_b2240d462a2ed5f835efe787c1c24573.bindPopup(popup_a836a35bced84cbe80a6cbf3dc63567b)
            ;

            
        
    
            var circle_marker_57cca0c5ec374f1db575e53c956988bf = L.circleMarker(
                [1.352083, 103.819836],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_47ebe723de0d52331b7fea99c159445b = L.popup({maxWidth: '100%'
            
            });

            
                var html_520d3924574bb2561160fd0f70490a5e = $(`<div id="html_520d3924574bb2561160fd0f70490a5e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Singapore <strong>       Total Cases </strong>: 1126865</div>`)[0];
                popup_47ebe723de0d52331b7fea99c159445b.setContent(html_520d3924574bb2561160fd0f70490a5e);
            

            circle_marker_57cca0c5ec374f1db575e53c956988bf.bindPopup(popup_47ebe723de0d52331b7fea99c159445b)
            ;

            
        
    
            var circle_marker_a8968310ccfc20d277f3d7453f618d65 = L.circleMarker(
                [-24.143474, -10.030696],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a064f34610ed8c1c854145d39fb3af5d = L.popup({maxWidth: '100%'
            
            });

            
                var html_34dc9f909b287fdc1c4dcc2ca0c355b6 = $(`<div id="html_34dc9f909b287fdc1c4dcc2ca0c355b6" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saint helena <strong>       Total Cases </strong>: 0</div>`)[0];
                popup_a064f34610ed8c1c854145d39fb3af5d.setContent(html_34dc9f909b287fdc1c4dcc2ca0c355b6);
            

            circle_marker_a8968310ccfc20d277f3d7453f618d65.bindPopup(popup_a064f34610ed8c1c854145d39fb3af5d)
            ;

            
        
    
            var circle_marker_70bc852ac963e81d6b4c4096371815d8 = L.circleMarker(
                [46.151241, 14.995463],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a423da6c19d875c29e70243c97dd7380 = L.popup({maxWidth: '100%'
            
            });

            
                var html_65b31eac393222c65eec914d1a3fee7e = $(`<div id="html_65b31eac393222c65eec914d1a3fee7e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Slovenia <strong>       Total Cases </strong>: 975330</div>`)[0];
                popup_a423da6c19d875c29e70243c97dd7380.setContent(html_65b31eac393222c65eec914d1a3fee7e);
            

            circle_marker_70bc852ac963e81d6b4c4096371815d8.bindPopup(popup_a423da6c19d875c29e70243c97dd7380)
            ;

            
        
    
            var circle_marker_6edb7381d91d4e1d27bfaf5c234dc237 = L.circleMarker(
                [48.669026, 19.699024],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_97897b3e5ef11f2b98d3f49532ee1768 = L.popup({maxWidth: '100%'
            
            });

            
                var html_c6bb9756dbc42710f811891ff6fd78c4 = $(`<div id="html_c6bb9756dbc42710f811891ff6fd78c4" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Slovakia <strong>       Total Cases </strong>: 1725745</div>`)[0];
                popup_97897b3e5ef11f2b98d3f49532ee1768.setContent(html_c6bb9756dbc42710f811891ff6fd78c4);
            

            circle_marker_6edb7381d91d4e1d27bfaf5c234dc237.bindPopup(popup_97897b3e5ef11f2b98d3f49532ee1768)
            ;

            
        
    
            var circle_marker_447d62f4e9a4fa280484c6c70bd072a9 = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_3d12af21cb38dfd38e91e07e5f344940 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2dead9b1e5e0e9959cc17c4355f81b2a = $(`<div id="html_2dead9b1e5e0e9959cc17c4355f81b2a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Sierra leone <strong>       Total Cases </strong>: 7550</div>`)[0];
                popup_3d12af21cb38dfd38e91e07e5f344940.setContent(html_2dead9b1e5e0e9959cc17c4355f81b2a);
            

            circle_marker_447d62f4e9a4fa280484c6c70bd072a9.bindPopup(popup_3d12af21cb38dfd38e91e07e5f344940)
            ;

            
        
    
            var circle_marker_178a3e592506a8e1073000011787e0a6 = L.circleMarker(
                [43.94236, 12.457777],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_ff026045cbd64fcc9ac91515397e792e = L.popup({maxWidth: '100%'
            
            });

            
                var html_7c3a1b50d426ad60c134ad7571b96050 = $(`<div id="html_7c3a1b50d426ad60c134ad7571b96050" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: San marino <strong>       Total Cases </strong>: 15515</div>`)[0];
                popup_ff026045cbd64fcc9ac91515397e792e.setContent(html_7c3a1b50d426ad60c134ad7571b96050);
            

            circle_marker_178a3e592506a8e1073000011787e0a6.bindPopup(popup_ff026045cbd64fcc9ac91515397e792e)
            ;

            
        
    
            var circle_marker_4c3e6bd57e8a08d02e2353f5adac7589 = L.circleMarker(
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_4f7d89c1a9e44ff02160bb11035d2e91 = L.popup({maxWidth: '100%'
            
            });

            
                var html_0643305d49ebcf6585168eb0584bf19e = $(`<div id="html_0643305d49ebcf6585168eb0584bf19e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Senegal <strong>       Total Cases </strong>: 83975</div>`)[0];
                popup_4f7d89c1a9e44ff02160bb11035d2e91.setContent(html_0643305d49ebcf6585168eb0584bf19e);
            

            circle_marker_4c3e6bd57e8a08d02e2353f5adac7589.bindPopup(popup_4f7d89c1a9e44ff02160bb11035d2e91)
            ;

            
        
    
            var circle_marker_d26e2d8bc31dd3bf4b050bcd547d3254 = L.circleMarker(
                [5.152149, 46.199616],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e7c31d883f127f7e4ce44cda16ab37c7 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e8989e25b4e0f4dabe024da298f0f828 = $(`<div id="html_e8989e25b4e0f4dabe024da298f0f828" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Somalia <strong>       Total Cases </strong>: 25110</div>`)[0];
                popup_e7c31d883f127f7e4ce44cda16ab37c7.setContent(html_e8989e25b4e0f4dabe024da298f0f828);
            

            circle_marker_d26e2d8bc31dd3bf4b050bcd547d3254.bindPopup(popup_e7c31d883f127f7e4ce44cda16ab37c7)
            ;

            
        
    
            var circle_marker_0cbb36d28be0a1085a6afe496e3a415c = L.circleMarker(
                [3.919305, -56.027783],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c49e1ec7840aac70300d6bd18faf95df = L.popup({maxWidth: '100%'
            
            });

            
                var html_aeb45da2b66168937de6d0297cc2aa2a = $(`<div id="html_aeb45da2b66168937de6d0297cc2aa2a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Suriname <strong>       Total Cases </strong>: 77916</div>`)[0];
                popup_c49e1ec7840aac70300d6bd18faf95df.setContent(html_aeb45da2b66168937de6d0297cc2aa2a);
            

            circle_marker_0cbb36d28be0a1085a6afe496e3a415c.bindPopup(popup_c49e1ec7840aac70300d6bd18faf95df)
            ;

            
        
    
            var circle_marker_6414e218903b600a6607715709f9d2d7 = L.circleMarker(
                [13.794185, -88.89653],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_7c73cee5608f00de3056b986899c553e = L.popup({maxWidth: '100%'
            
            });

            
                var html_b1e4a6c31c3381e5c19559b9ba77b279 = $(`<div id="html_b1e4a6c31c3381e5c19559b9ba77b279" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: El salvador <strong>       Total Cases </strong>: 157449</div>`)[0];
                popup_7c73cee5608f00de3056b986899c553e.setContent(html_b1e4a6c31c3381e5c19559b9ba77b279);
            

            circle_marker_6414e218903b600a6607715709f9d2d7.bindPopup(popup_7c73cee5608f00de3056b986899c553e)
            ;

            
        
    
            var circle_marker_b328946bab9bca42d178927f1035d7d0 = L.circleMarker(
                [21.694025, -71.797928],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d8841da34be00f3bdc883a60d67935a6 = L.popup({maxWidth: '100%'
            
            });

            
                var html_7c8382fb5d6de1b5eee0910121b1e820 = $(`<div id="html_7c8382fb5d6de1b5eee0910121b1e820" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Turks and caicos islands <strong>       Total Cases </strong>: 5887</div>`)[0];
                popup_d8841da34be00f3bdc883a60d67935a6.setContent(html_7c8382fb5d6de1b5eee0910121b1e820);
            

            circle_marker_b328946bab9bca42d178927f1035d7d0.bindPopup(popup_d8841da34be00f3bdc883a60d67935a6)
            ;

            
        
    
            var circle_marker_caf1e12da2c8276c11bfa377465f0948 = L.circleMarker(
                [15.454166, 18.732207],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_84093ab3db9b8342a9032a386ff2f709 = L.popup({maxWidth: '100%'
            
            });

            
                var html_241be8fbc25aaad78d1e61c9310e856c = $(`<div id="html_241be8fbc25aaad78d1e61c9310e856c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Chad <strong>       Total Cases </strong>: 7157</div>`)[0];
                popup_84093ab3db9b8342a9032a386ff2f709.setContent(html_241be8fbc25aaad78d1e61c9310e856c);
            

            circle_marker_caf1e12da2c8276c11bfa377465f0948.bindPopup(popup_84093ab3db9b8342a9032a386ff2f709)
            ;

            
        
    
            var circle_marker_640e151c8f40f9765bdd92b816f6b988 = L.circleMarker(
                [8.619543, 0.824782],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_29ca50c26087da76ccce497b4c8de616 = L.popup({maxWidth: '100%'
            
            });

            
                var html_8f2542bb0b304a15f98d216c19051558 = $(`<div id="html_8f2542bb0b304a15f98d216c19051558" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Togo <strong>       Total Cases </strong>: 36683</div>`)[0];
                popup_29ca50c26087da76ccce497b4c8de616.setContent(html_8f2542bb0b304a15f98d216c19051558);
            

            circle_marker_640e151c8f40f9765bdd92b816f6b988.bindPopup(popup_29ca50c26087da76ccce497b4c8de616)
            ;

            
        
    
            var circle_marker_f493387d055392c0ca28583ae41d3bc0 = L.circleMarker(
                [15.870032, 100.992541],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_12dea6be7b45223fe71279c95751948b = L.popup({maxWidth: '100%'
            
            });

            
                var html_47ed2e96201f9b7a87107a7a05f2d448 = $(`<div id="html_47ed2e96201f9b7a87107a7a05f2d448" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Thailand <strong>       Total Cases </strong>: 3807171</div>`)[0];
                popup_12dea6be7b45223fe71279c95751948b.setContent(html_47ed2e96201f9b7a87107a7a05f2d448);
            

            circle_marker_f493387d055392c0ca28583ae41d3bc0.bindPopup(popup_12dea6be7b45223fe71279c95751948b)
            ;

            
        
    
            var circle_marker_76d3a3364f075b9e085a322b6d34a5b9 = L.circleMarker(
                [38.861034, 71.276093],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a4455ba78b256e72b608dc6b422e94ab = L.popup({maxWidth: '100%'
            
            });

            
                var html_b8226e52ef360b83fbc82e9d53359963 = $(`<div id="html_b8226e52ef360b83fbc82e9d53359963" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Tajikistan <strong>       Total Cases </strong>: 17661</div>`)[0];
                popup_a4455ba78b256e72b608dc6b422e94ab.setContent(html_b8226e52ef360b83fbc82e9d53359963);
            

            circle_marker_76d3a3364f075b9e085a322b6d34a5b9.bindPopup(popup_a4455ba78b256e72b608dc6b422e94ab)
            ;

            
        
    
            var circle_marker_311965e2d94e2d06842a68ae4e612492 = L.circleMarker(
                [-8.967363, -171.855881],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d510fd37ac4c461877411324c6b4541f = L.popup({maxWidth: '100%'
            
            });

            
                var html_920a8f4513084850a02977ee8e97e81a = $(`<div id="html_920a8f4513084850a02977ee8e97e81a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Tokelau <strong>       Total Cases </strong>: 0</div>`)[0];
                popup_d510fd37ac4c461877411324c6b4541f.setContent(html_920a8f4513084850a02977ee8e97e81a);
            

            circle_marker_311965e2d94e2d06842a68ae4e612492.bindPopup(popup_d510fd37ac4c461877411324c6b4541f)
            ;

            
        
    
            var circle_marker_5e6a636a4a9b3b5e6281931761582c25 = L.circleMarker(
                [-8.874217, 125.727539],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_56fb9f2e4b252421f66edf7ca0bebaec = L.popup({maxWidth: '100%'
            
            });

            
                var html_035140adc31dad2ed61771507bac9355 = $(`<div id="html_035140adc31dad2ed61771507bac9355" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Timor-leste <strong>       Total Cases </strong>: 22712</div>`)[0];
                popup_56fb9f2e4b252421f66edf7ca0bebaec.setContent(html_035140adc31dad2ed61771507bac9355);
            

            circle_marker_5e6a636a4a9b3b5e6281931761582c25.bindPopup(popup_56fb9f2e4b252421f66edf7ca0bebaec)
            ;

            
        
    
            var circle_marker_c6c1690266c3ff96ef12f581165f700f = L.circleMarker(
                [38.969719, 59.556278],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e4ec5684a7b65d53166b95aedd4c6f51 = L.popup({maxWidth: '100%'
            
            });

            
                var html_034f7c3aff7f73f4c68b1afaf6024e31 = $(`<div id="html_034f7c3aff7f73f4c68b1afaf6024e31" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Turkmenistan <strong>       Total Cases </strong>: 0</div>`)[0];
                popup_e4ec5684a7b65d53166b95aedd4c6f51.setContent(html_034f7c3aff7f73f4c68b1afaf6024e31);
            

            circle_marker_c6c1690266c3ff96ef12f581165f700f.bindPopup(popup_e4ec5684a7b65d53166b95aedd4c6f51)
            ;

            
        
    
            var circle_marker_f17250091fa759b44a77d132a80fcb17 = L.circleMarker(
                [33.886917, 9.537499],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c25c6c883e46f603ed8562de4b6ac2e5 = L.popup({maxWidth: '100%'
            
            });

            
                var html_55b42e799ea5658f30e7972258f49c9a = $(`<div id="html_55b42e799ea5658f30e7972258f49c9a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Tunisia <strong>       Total Cases </strong>: 1008933</div>`)[0];
                popup_c25c6c883e46f603ed8562de4b6ac2e5.setContent(html_55b42e799ea5658f30e7972258f49c9a);
            

            circle_marker_f17250091fa759b44a77d132a80fcb17.bindPopup(popup_c25c6c883e46f603ed8562de4b6ac2e5)
            ;

            
        
    
            var circle_marker_28c3b42a57b57e472e207687093e157b = L.circleMarker(
                [-21.178986, -175.198242],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_123fe280eb0c8379dd32440c87c5b55b = L.popup({maxWidth: '100%'
            
            });

            
                var html_9870347cabe29487951de0d2fda438cf = $(`<div id="html_9870347cabe29487951de0d2fda438cf" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Tonga <strong>       Total Cases </strong>: 7656</div>`)[0];
                popup_123fe280eb0c8379dd32440c87c5b55b.setContent(html_9870347cabe29487951de0d2fda438cf);
            

            circle_marker_28c3b42a57b57e472e207687093e157b.bindPopup(popup_123fe280eb0c8379dd32440c87c5b55b)
            ;

            
        
    
            var circle_marker_c4bd42d7d437cef0ddd1ee702c8baca0 = L.circleMarker(
                [38.963745, 35.243322],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_9ba7e72d8e43eb28d34c6ba1453a1c3a = L.popup({maxWidth: '100%'
            
            });

            
                var html_7c5cd240905acd28d9427edc0d6bc20a = $(`<div id="html_7c5cd240905acd28d9427edc0d6bc20a" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Turkey <strong>       Total Cases </strong>: 14840948</div>`)[0];
                popup_9ba7e72d8e43eb28d34c6ba1453a1c3a.setContent(html_7c5cd240905acd28d9427edc0d6bc20a);
            

            circle_marker_c4bd42d7d437cef0ddd1ee702c8baca0.bindPopup(popup_9ba7e72d8e43eb28d34c6ba1453a1c3a)
            ;

            
        
    
            var circle_marker_8716b2fd995704f8b58ff7f3d62335cf = L.circleMarker(
                [10.691803, -61.222503],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_94963d3262c975ba36595d31e4081e51 = L.popup({maxWidth: '100%'
            
            });

            
                var html_93ac0b20a54618808ba3f3763e51ff64 = $(`<div id="html_93ac0b20a54618808ba3f3763e51ff64" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Trinidad and tobago <strong>       Total Cases </strong>: 135627</div>`)[0];
                popup_94963d3262c975ba36595d31e4081e51.setContent(html_93ac0b20a54618808ba3f3763e51ff64);
            

            circle_marker_8716b2fd995704f8b58ff7f3d62335cf.bindPopup(popup_94963d3262c975ba36595d31e4081e51)
            ;

            
        
    
            var circle_marker_19ec64f8a219a85bbb04c00dd48adac7 = L.circleMarker(
                [-7.109535, 177.64933],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_d5299505dc86f900e342512576747b7d = L.popup({maxWidth: '100%'
            
            });

            
                var html_bd9f0b32301bf9c0f550596942e1b40e = $(`<div id="html_bd9f0b32301bf9c0f550596942e1b40e" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Tuvalu <strong>       Total Cases </strong>: 0</div>`)[0];
                popup_d5299505dc86f900e342512576747b7d.setContent(html_bd9f0b32301bf9c0f550596942e1b40e);
            

            circle_marker_19ec64f8a219a85bbb04c00dd48adac7.bindPopup(popup_d5299505dc86f900e342512576747b7d)
            ;

            
        
    
            var circle_marker_4aa093ef79c62b444094b8392900de23 = L.circleMarker(
                [48.379433, 31.16558],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_8c323dc24a72d7d16c21ad7b46edeb75 = L.popup({maxWidth: '100%'
            
            });

            
                var html_bd51991dfd977a9f1bd6f57154be4dc9 = $(`<div id="html_bd51991dfd977a9f1bd6f57154be4dc9" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Ukraine <strong>       Total Cases </strong>: 4874131</div>`)[0];
                popup_8c323dc24a72d7d16c21ad7b46edeb75.setContent(html_bd51991dfd977a9f1bd6f57154be4dc9);
            

            circle_marker_4aa093ef79c62b444094b8392900de23.bindPopup(popup_8c323dc24a72d7d16c21ad7b46edeb75)
            ;

            
        
    
            var circle_marker_4cf2f668192d3511beeb2c7c0d7edf8c = L.circleMarker(
                [1.373333, 32.290275],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_106e56cae7a858f31b82bd6ea60cae4c = L.popup({maxWidth: '100%'
            
            });

            
                var html_41258f05cd685f1fbe33bd08f7c5238c = $(`<div id="html_41258f05cd685f1fbe33bd08f7c5238c" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Uganda <strong>       Total Cases </strong>: 160319</div>`)[0];
                popup_106e56cae7a858f31b82bd6ea60cae4c.setContent(html_41258f05cd685f1fbe33bd08f7c5238c);
            

            circle_marker_4cf2f668192d3511beeb2c7c0d7edf8c.bindPopup(popup_106e56cae7a858f31b82bd6ea60cae4c)
            ;

            
        
    
            var circle_marker_ae4bd7e1a654cc2c8502c0bc7ca3f2df = L.circleMarker(
                [-32.522779, -55.765835],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e3eb88a6049aeee22e70574dd228f500 = L.popup({maxWidth: '100%'
            
            });

            
                var html_5fc9b662f6550af58411e9fa51ee73aa = $(`<div id="html_5fc9b662f6550af58411e9fa51ee73aa" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Uruguay <strong>       Total Cases </strong>: 884624</div>`)[0];
                popup_e3eb88a6049aeee22e70574dd228f500.setContent(html_5fc9b662f6550af58411e9fa51ee73aa);
            

            circle_marker_ae4bd7e1a654cc2c8502c0bc7ca3f2df.bindPopup(popup_e3eb88a6049aeee22e70574dd228f500)
            ;

            
        
    
            var circle_marker_c6d366b0059c6567200c3fc051549f96 = L.circleMarker(
                [41.377491, 64.585262],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_7c465fc6e3c782d0081e48a1328c302f = L.popup({maxWidth: '100%'
            
            });

            
                var html_14280687aef6e3875c71079f50318bdf = $(`<div id="html_14280687aef6e3875c71079f50318bdf" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Uzbekistan <strong>       Total Cases </strong>: 236357</div>`)[0];
                popup_7c465fc6e3c782d0081e48a1328c302f.setContent(html_14280687aef6e3875c71079f50318bdf);
            

            circle_marker_c6d366b0059c6567200c3fc051549f96.bindPopup(popup_7c465fc6e3c782d0081e48a1328c302f)
            ;

            
        
    
            var circle_marker_20cb67616911a4437519ef3731691d14 = L.circleMarker(
                [12.984305, -61.287228],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_3f5c309d8e46609258139f822d81d955 = L.popup({maxWidth: '100%'
            
            });

            
                var html_bebf91cfd609ce47ed27ef051fed55b8 = $(`<div id="html_bebf91cfd609ce47ed27ef051fed55b8" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Saint vincent and the grenadines <strong>       Total Cases </strong>: 8233</div>`)[0];
                popup_3f5c309d8e46609258139f822d81d955.setContent(html_bebf91cfd609ce47ed27ef051fed55b8);
            

            circle_marker_20cb67616911a4437519ef3731691d14.bindPopup(popup_3f5c309d8e46609258139f822d81d955)
            ;

            
        
    
            var circle_marker_7251cd5d5e05f268b122ae62d916fff4 = L.circleMarker(
                [18.420695, -64.639968],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_e7a2e14adc349dcd07dbe3eb2c7d3f17 = L.popup({maxWidth: '100%'
            
            });

            
                var html_5ce760df3009801b573b34dc3e60d351 = $(`<div id="html_5ce760df3009801b573b34dc3e60d351" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: British virgin islands <strong>       Total Cases </strong>: 6093</div>`)[0];
                popup_e7a2e14adc349dcd07dbe3eb2c7d3f17.setContent(html_5ce760df3009801b573b34dc3e60d351);
            

            circle_marker_7251cd5d5e05f268b122ae62d916fff4.bindPopup(popup_e7a2e14adc349dcd07dbe3eb2c7d3f17)
            ;

            
        
    
            var circle_marker_ae97426fa43dfd466a964c7b52732a5d = L.circleMarker(
                [-15.376706, 166.959158],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_905a6f0c95c6623f8694441276928ac4 = L.popup({maxWidth: '100%'
            
            });

            
                var html_cde252ac1d2c4a0df3d9ac67fb3ddb8f = $(`<div id="html_cde252ac1d2c4a0df3d9ac67fb3ddb8f" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Vanuatu <strong>       Total Cases </strong>: 4919</div>`)[0];
                popup_905a6f0c95c6623f8694441276928ac4.setContent(html_cde252ac1d2c4a0df3d9ac67fb3ddb8f);
            

            circle_marker_ae97426fa43dfd466a964c7b52732a5d.bindPopup(popup_905a6f0c95c6623f8694441276928ac4)
            ;

            
        
    
            var circle_marker_347d0b9ff48337bb984a0b2ea5c054ec = L.circleMarker(
                [-13.768752, -177.156097],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_f5dc5e5598fe9ffee7200af157bc88e2 = L.popup({maxWidth: '100%'
            
            });

            
                var html_df2035592375c74971f433b88fddd685 = $(`<div id="html_df2035592375c74971f433b88fddd685" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Wallis and futuna <strong>       Total Cases </strong>: 446</div>`)[0];
                popup_f5dc5e5598fe9ffee7200af157bc88e2.setContent(html_df2035592375c74971f433b88fddd685);
            

            circle_marker_347d0b9ff48337bb984a0b2ea5c054ec.bindPopup(popup_f5dc5e5598fe9ffee7200af157bc88e2)
            ;

            
        
    
            var circle_marker_1377443d75e317d42f691ad0a55bdfdd = L.circleMarker(
                [-13.759029, -172.104629],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_c028d7bec7be929738467c46ebe7325b = L.popup({maxWidth: '100%'
            
            });

            
                var html_31246ca535799a3ac91a2a2bcad7d546 = $(`<div id="html_31246ca535799a3ac91a2a2bcad7d546" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Samoa <strong>       Total Cases </strong>: 3317</div>`)[0];
                popup_c028d7bec7be929738467c46ebe7325b.setContent(html_31246ca535799a3ac91a2a2bcad7d546);
            

            circle_marker_1377443d75e317d42f691ad0a55bdfdd.bindPopup(popup_c028d7bec7be929738467c46ebe7325b)
            ;

            
        
    
            var circle_marker_acacf710dbdc977b8e01024ea88eae93 = L.circleMarker(
                [15.552727, 48.516388],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_753214dee0df357704fc38e796f9c536 = L.popup({maxWidth: '100%'
            
            });

            
                var html_78bed14567642333d2041c168dd84db0 = $(`<div id="html_78bed14567642333d2041c168dd84db0" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Yemen <strong>       Total Cases </strong>: 9668</div>`)[0];
                popup_753214dee0df357704fc38e796f9c536.setContent(html_78bed14567642333d2041c168dd84db0);
            

            circle_marker_acacf710dbdc977b8e01024ea88eae93.bindPopup(popup_753214dee0df357704fc38e796f9c536)
            ;

            
        
    
            var circle_marker_a0a3c49ef8257e2015908819fb3578af = L.circleMarker(
                [-12.8275, 45.166244],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_cca1c64689429599ed4660f5c92fc986 = L.popup({maxWidth: '100%'
            
            });

            
                var html_e69f964afc6ed67eeee3fa4829278dae = $(`<div id="html_e69f964afc6ed67eeee3fa4829278dae" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Mayotte <strong>       Total Cases </strong>: 36771</div>`)[0];
                popup_cca1c64689429599ed4660f5c92fc986.setContent(html_e69f964afc6ed67eeee3fa4829278dae);
            

            circle_marker_a0a3c49ef8257e2015908819fb3578af.bindPopup(popup_cca1c64689429599ed4660f5c92fc986)
            ;

            
        
    
            var circle_marker_d620dc90f130595e556649f58b4a76c3 = L.circleMarker(
                [-30.559482, 22.937506],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_a37a1bab01c0a413ecc12190dd6e97c1 = L.popup({maxWidth: '100%'
            
            });

            
                var html_28eec57625e723e1f2349ca9ed0e49ef = $(`<div id="html_28eec57625e723e1f2349ca9ed0e49ef" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: South africa <strong>       Total Cases </strong>: 3628614</div>`)[0];
                popup_a37a1bab01c0a413ecc12190dd6e97c1.setContent(html_28eec57625e723e1f2349ca9ed0e49ef);
            

            circle_marker_d620dc90f130595e556649f58b4a76c3.bindPopup(popup_a37a1bab01c0a413ecc12190dd6e97c1)
            ;

            
        
    
            var circle_marker_97fc0b5f722a07dde17b08ff6b4cc7c5 = L.circleMarker(
                [-13.133897, 27.849332],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_5155da69c37cc8bfc31bbfe33e2e2107 = L.popup({maxWidth: '100%'
            
            });

            
                var html_dace397fc3791d13eaf57a9bb9243da1 = $(`<div id="html_dace397fc3791d13eaf57a9bb9243da1" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Zambia <strong>       Total Cases </strong>: 313516</div>`)[0];
                popup_5155da69c37cc8bfc31bbfe33e2e2107.setContent(html_dace397fc3791d13eaf57a9bb9243da1);
            

            circle_marker_97fc0b5f722a07dde17b08ff6b4cc7c5.bindPopup(popup_5155da69c37cc8bfc31bbfe33e2e2107)
            ;

            
        
    
            var circle_marker_6f2ded253e733a7e7ab4cbfd833e76ef = L.circleMarker(
                [-19.015438, 29.154857],
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
                .addTo(map_2cbb88844eeedbdf8ad5eca4e827e6d7);
            
    
            var popup_fa6fa655d1d7b33616c71be8d496a599 = L.popup({maxWidth: '100%'
            
            });

            
                var html_2405460e03cd97530aef34f6bd4fa563 = $(`<div id="html_2405460e03cd97530aef34f6bd4fa563" style="width: 100.0%; height: 100.0%;"><strong>Country</strong>: Zimbabwe <strong>       Total Cases </strong>: 241415</div>`)[0];
                popup_fa6fa655d1d7b33616c71be8d496a599.setContent(html_2405460e03cd97530aef34f6bd4fa563);
            

            circle_marker_6f2ded253e733a7e7ab4cbfd833e76ef.bindPopup(popup_fa6fa655d1d7b33616c71be8d496a599)
            ;

            
        
</script>