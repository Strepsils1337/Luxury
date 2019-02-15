( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );

$(".open-upd-popup").on(function() {
    $(".popup-form").css("display", "block");
})

var app = angular.module('app', []);

app.controller('mainCtrl', function($scope,$http) {

    var _url = "http://lab.kids-lu-server.xyz/api/v1/auto";
    var _headers = {
            'Authorization': 'Basic dGVzdDp0ZXN0',
        };

    var req = {
         method: 'GET',
         url: _url,
         headers: _headers,
        };

    $http.get(req.url, {headers: req.headers}).then(function successCallback(response) {
            returnedData = response.data
            $scope.cars = response.data['list']
        }, function errorCallback(response) {

            if (response.status = 401) {
                console.log("BAD 401")
            }
            else {
                console.log("broken at last")
            }
        });
})

app.controller('delCar', function($scope,$http) {
    $scope.submitFormDel = function() {
        var _url = "http://lab.kids-lu-server.xyz/api/v1/auto/" + $scope.car.id;
        var _headers = {
                'Authorization': 'Basic dGVzdDp0ZXN0',
            };

        var req = {
             method: 'DELETE',
             url: _url,
             headers: _headers,
            };
        $http.delete(req.url, {headers: req.headers}).then(function successCallback(response) {

            console.log("OK!")
            // returnedData = response.data
            // $scope.cars = response.data['list']
            console.log(returnedData)

        }, function errorCallback(response) {
            console.log(returnedData)
            if (response.status = 401) {
                console.log("BAD 401")
            }
            else {
                console.log("broken at last")
            }
        });
    }
})

app.controller('addCar', function($scope,$http) {
    $scope.submitForm = function() {
        console.log($scope.car)
        // if ($scope.userForm.$valid) {
        // }
        var _url = "http://lab.kids-lu-server.xyz/api/v1/auto";
        var _headers = {
                'Authorization': 'Basic dGVzdDp0ZXN0',
                'Content-Type': "application/json"
            };

        var req = {
             method: 'POST',
             url: _url,
             headers: _headers,
            };
        $http.post(req.url, $scope.car, {headers: req.headers}).then(function successCallback(response) {
            returnedData = response.data
            console.log(returnedData)
        }, function errorCallback(response) {
            console.log(response.status)
        }
        )
    };
})

app.controller('updCar', function($scope,$http) {
    $scope.submitFormUpd = function() {
        console.log($scope.car)
        // if ($scope.userForm.$valid) {
        // }
        var _url = "http://lab.kids-lu-server.xyz/api/v1/auto/" + $scope.car.id;;
        var _headers = {
                'Authorization': 'Basic dGVzdDp0ZXN0',
                'Content-Type': "application/json"
            };

       var req = {
             method: 'put',
             url: _url,
             headers: _headers,
            };
        $http.put(req.url, $scope.car, {headers: req.headers}).then(function successCallback(response) {
            console.log(returnedData)

        }, function errorCallback(response) {
            console.log(returnedData)
        });
    }
});
