var panorama = pannellum.viewer('panorama', {
  'default' : {
    "firstScene": "scene1",
    "author": "Ahmad Irfan Maulana",
    "sceneFadeDuration": 200,
    "autoRotate": -1,
    "showControls" : false,
    "autoLoad" : true,
    "compass" : false,
    "preview" : "assets/img/view/curug-masigit2.jpg"
  },

  "scenes": {
      "scene1": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/1.jpg",
          "hotSpots": [
            {
                "pitch": -13.158732919525647,
                "yaw": -135.11607473531294,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-right",
                "sceneId": "scene2"

            }
          ]
      },
      "scene2": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/2.jpg",
          "hotSpots": [
            {
                "pitch": 4.6515649254336715,
                "yaw": 175.90606056678592,
                "type": "scene",
                "text": "Pergi ke sini",
                "cssClass" : "scene-right",
                "sceneId": "scene1"

            },
            {
                "pitch": -15.832618658114093,
                "yaw": 5.091179188272759,
                "type": "scene",
                "text": "Pergi ke bawah",
                "cssClass" : "scene-right-sm",
                "sceneId": "scene5"
            },
            {
                "pitch" : -6.4939220015705414,
                "yaw" : -117.90293474506147,
                "type" : "info",
                "text" : "Tempat Parkir Motor / Mobil",
                "cssClass" : "info",
                "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                }
            }
          ]
      },
      "scene3": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/3.jpg",
          "hotSpots": [
            {
              "pitch" : -28.689603156838494,
              "yaw"   : -73.72401678356705,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-right",
              "sceneId": "scene4"

            },
            {
              "pitch" : -11.218497848217117,
              "yaw"   : 64.2686908123529,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-left",
              "sceneId": "last"
            },
            {
              "pitch" : -19.345194144302997,
              "yaw"   : 86.52292727556905,
              "type": "info",
              "text": "Warung Jajanan",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : 15.72687700385583,
              "yaw"   : -140.83727290953235,
              "type": "scene",
              "text": "Pergi ke atas",
              "cssClass" : "scene-right-sm",
              "sceneId": "scene6"
            },
            // {
            //   "pitch" : -28.689603156838494,
            //   "yaw"   : -73.72401678356705,
            //   "type": "scene",
            //   "text": "Pergi ke sini",
            //   "cssClass" : "scene",
            //   "sceneId": "scene4"
            //
            // }
          ]
      },
      "scene4": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/4.jpg",
          "hotSpots": [
            {
              "pitch" : 4.288796178029102,
              "yaw"   : 106.6556036956487,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-left",
              "sceneId": "scene3"
            },
            {
              "pitch" : -1.2593068512671328,
              "yaw"   : 80.41320686600297,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-left-sm",
              "sceneId": "last"
            },
            {
              "pitch" : 16.851670372877784,
              "yaw"   : -174.18875848795471,
              "type": "info",
              "text": "Slogan Kebersihan",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : 7.65907882012155,
              "yaw"   : 100.76152979392484,
              "type": "info",
              "text": "Warung Jajanan",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : 5.845243582063856,
              "yaw"   : 38.68348600477252,
              "type": "info",
              "text": "Warung Jajanan & Tempat Bersantai",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : 27.078190787694187,
              "yaw"   : -163.6737852180309,
              "type": "scene",
              "text": "Pergi ke atas",
              "cssClass" : "scene-right-sm",
              "sceneId": "scene6"
            }
          ]
      },
      "scene5": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/5.jpg",
          "hotSpots": [
            {
              "pitch" : -16.568331287357978,
              "yaw"   : 3.8288599772422884,
              "type": "scene",
              "text": "Pergi ke bawah",
              "cssClass" : "scene-right-sm",
              "sceneId": "scene6"
            },
            {
              "pitch" : 8.698888401515859,
              "yaw"   : 174.3795755061788,
              "type": "scene",
              "text": "Pergi ke atas",
              "cssClass" : "scene-right",
              "sceneId": "scene2"
            },
          ]
      },
      "scene6": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/6.jpg",
          "hotSpots": [
            {
              "pitch" : -22.461235205498376,
              "yaw"   : -27.60429538330132,
              "type": "scene",
              "text": "Pergi ke bawah",
              "cssClass" : "scene-left-sm",
              "sceneId": "scene3"
            },
            {
              "pitch" : 5.0418519813311296,
              "yaw"   : 158.58160292032417,
              "type": "scene",
              "text": "Pergi ke atas",
              "cssClass" : "scene-left-sm",
              "sceneId": "scene5"
            },
          ]
      },
      "last": {
          "title": "Curug Masigit",
          "type": "equirectangular",
          "panorama": "assets/360pictures/Curug Masigit/last3.jpg",
          "hotSpots": [
            {
              "pitch" : 1.6841740476800715,
              "yaw"   : 154.13211106957297,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-right",
              "sceneId": "scene3"
            },
            {
              "pitch" : -2.1452584378648556,
              "yaw"   : 165.3135014779333,
              "type": "scene",
              "text": "Pergi ke sini",
              "cssClass" : "scene-right-sm",
              "sceneId": "scene4"
            },
            {
              "pitch" : 0.9788647930789866,
              "yaw"   : -15.935653527499003,
              "type": "info",
              "text": "Curug Masigit",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : 4.822647009439245,
              "yaw"   : -84.67857372109698,
              "type": "info",
              "text": "Warung Jajanan & Tempat Bersantai",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            },
            {
              "pitch" : -6.855610383328735,
              "yaw"   : -2.1571455657151404,
              "type": "info",
              "text": "Kedalaman 2 Meter",
              "cssClass" : "info",
              "clickHandlerFunc" : function () {
                  if (panorama.getHfov() == 50) {
                    panorama.setHfov(150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                  else {
                    panorama.setHfov(-150);
                    panorama.setPitch(this.pitch);
                    panorama.setYaw(this.yaw);
                  }
                },
            }
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

// panorama.on('mousedown', function(event) {
//   event.preventDefault();
//   var pitch = panorama.mouseEventToCoords(event)[0];
//   var yaw = panorama.mouseEventToCoords(event)[1];
//
//   $('.locate-in').html('('+pitch+','+yaw+')');
// });
