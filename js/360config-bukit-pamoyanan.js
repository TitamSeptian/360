var panorama = pannellum.viewer('panorama', {
  'default' : {
    "firstScene": "scene1",
    "author": "Ahmad Irfan Maulana",
    "sceneFadeDuration": 200,
    "autoRotate": -1,
    "showControls" : false,
    "autoLoad" : true,
    "compass" : false,
    "preview" : "assets/img/view/bukit-pamoyanan.jpg"
  },

  "scenes": {
        "scene1": {
            "title": "Bukit Pamoyanan",
            "type": "equirectangular",
            "panorama": "assets/360pictures/Pamoyanan/1.jpg",
            "hotSpots": [
              {
                  "pitch": 13.193603619606826,
                  "yaw": 9.95424118483875,
                  "type": "scene",
                  "text": "Pergi ke atas",
                  "cssClass" : "scene-left-sm",
                  "sceneId": "scene2"

              }
            ]
        },
        "scene2": {
            "title": "Bukit Pamoyanan",
            "type": "equirectangular",
            "panorama": "assets/360pictures/Pamoyanan/2.jpg",
            "hotSpots": [
              {
                  "pitch":  13.307923432178008,
                  "yaw": 94.21688115498299,
                  "type": "scene",
                  "text": "Pergi ke atas",
                  "cssClass" : "scene-right-sm",
                  "sceneId": "scene3"

              },
              {
                  "pitch":  -17.020517119165593,
                  "yaw": -12.66485574975884,
                  "type": "scene",
                  "text": "Pergi ke bawah",
                  "cssClass" : "scene-left-sm",
                  "sceneId": "scene1"

              },
            ]
        },
        "scene3": {
            "title": "Bukit Pamoyanan",
            "type": "equirectangular",
            "panorama": "assets/360pictures/Pamoyanan/3.jpg",
            "hotSpots": [
              {
                  "pitch":  13.307923432178008,
                  "yaw": 94.21688115498299,
                  "type": "scene",
                  "text": "Pergi ke atas",
                  "cssClass" : "scene-right-sm",
                  "sceneId": "scene3"

              },
              {
                  "pitch":  -17.020517119165593,
                  "yaw": -12.66485574975884,
                  "type": "scene",
                  "text": "Pergi ke bawah",
                  "cssClass" : "scene-left-sm",
                  "sceneId": "scene1"

              },
            ]
        }
    }
});
$('<div/>',{
  "class" : "lds-ellipsis"
}).appendTo('.pnlm-load-box');

$('<div/>').appendTo('.lds-ellipsis');
$('<div/>').appendTo('.lds-ellipsis');
$('<div/>').appendTo('.lds-ellipsis');
$('<div/>').appendTo('.lds-ellipsis');

panorama.on('mousedown', function(event) {
  event.preventDefault();
  var pitch = panorama.mouseEventToCoords(event)[0];
  var yaw = panorama.mouseEventToCoords(event)[1];

  $('.locate-in').html('('+pitch+','+yaw+')');
});
