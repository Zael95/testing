//var busRouteApi = 'https://ptx.transportdata.tw/MOTC/v2/Bus/Shape/City/Kaohsiung?$format=json';
//var busSstopApi = 'https://ptx.transportdata.tw/MOTC/v2/Bus/StopOfRoute/City/Kaohsiung?$format=json'; 

//var busRouteApi = 'https://gist.githubusercontent.com/Mantarraya/fa3e039e4600753096f5547bc1ee4963/raw/4893e578c74b8194aa35a74f510c924344fa353d/json';
//var busSstopApi = 'https://gist.githubusercontent.com/Mantarraya/fa3e039e4600753096f5547bc1ee4963/raw/4893e578c74b8194aa35a74f510c924344fa353d/json';

//var busRouteApi = 'https://gist.githubusercontent.com/Mantarraya/0c9f60ddb3f82497e41a2f5ab2b8d510/raw/290df0c67a8a29881884f0f4d240d2863f0062ce/json';
//var busSstopApi = 'https://gist.githubusercontent.com/Mantarraya/0c9f60ddb3f82497e41a2f5ab2b8d510/raw/290df0c67a8a29881884f0f4d240d2863f0062ce/json';

var busRouteApi = 'https://gist.githubusercontent.com/Mantarraya/bf20d1a87507bbaeb7ac510d2498c1fe/raw/06476187000b109253e9850886934225ddcad3a7/json';
var busSstopApi = 'https://gist.githubusercontent.com/Mantarraya/7491fcf97597d94dcf363f71a2e0e07d/raw/3429de90182276d9d25aced3c2ea43ca0094bd45/json';

function initMap() {
    var kaohsiungStation = { lat: -12.041946313086456, lng: -77.0763350912956 };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13.5
,        center: kaohsiungStation
    });
}

function showMap() {
    clearMap();
    var busStopShowList = $.grep(busStopList, function (e) { return e.show == true });
    $.each(busStopShowList, function (index, value) {
        $.each(value.markerList, function (i, marker) {
            marker.setMap(map);
        });
    });

    var busRouteShowList = $.grep(busRouteList, function (e) { return e.show == true });
    $.each(busRouteShowList, function (index, value) {
        var polyline = value.polyline;
        polyline.setMap(map);
    });

    console.log('show map end.');
}

function clearMap() {
    $.each(busStopList, function (index, value) {
        $.each(value.markerList, function (i, marker) {
            marker.setMap(null);
        });
    });
    $.each(busRouteList, function (index, value) {
        var polyline = value.polyline;
        polyline.setMap(null);
    });
}

function getBusRoute() {
    return $.getJSON(busRouteApi, function (data) {
        return data;
    });
}

function getBusStop() {
    return $.getJSON(busSstopApi, function (data) {
        return data;
    });
}