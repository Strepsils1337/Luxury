<!DOCTYPE html>
<html lang="ru" ng-app="app>
<head>

	<!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>AnguLabs</title>
   

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!-- Latest compiled and minified bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script defer type="text/javascript" src="js/script.js?<?php echo sha1(microtime(1))?>"></script>

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">

    <!-- Latest compiled and minified bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->


	<!-- Windows 8 Tiles -->
	<meta name="msapplication-TileColor" content="#FFFFFF"/>
	<!-- ****** faviconit.com favicons ****** -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	<link rel="stylesheet" href="css/picto-foundry-emotions.css" />
	<link rel="stylesheet" href="css/picto-foundry-household.css" />
	<link rel="stylesheet" href="css/picto-foundry-shopping-finance.css" />
	<link rel="stylesheet" href="css/picto-foundry-general.css" />
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
</head>
	<body>
	        <section id="container">
      <div class="wrap-container">
        <section class="content-box box-1">
          <div class="zerogrid">
            <div class="wrap-box"><!--Start Box-->
              <div class="row">
                <div class="">
                  <div class="row">
                    <div class="col-1-2">
                      <a href="index.html"><img src="images/logo.png" /></a>
                    </div>
                    <div class="col-1-2">
                      <!-- <form id="form-container" action="" class="f-right"> -->
                        <!--<input type="submit" id="searchsubmit" value="" />-->
                        <!-- <a class="search-submit-button" href="javascript:void(0)">
                          <i class="fa fa-search"></i>
                        </a>
                        <div id="searchtext">
                          <input type="text" id="s" name="s" placeholder="Search Something...">
                        </div> -->
                      <!-- </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>  
	
        <section class="form">
            <div class="row">
                <div class="form" ng-repeat="car in cars | orderBy: 'id' | filter: searchBox">
                    <div ng-controller="updCar">
                        <form class="form" ng-submit="submitFormUpd()">
                            <label>Город</label>
                            <input type="text" ng-model="car.name">
                            <br>
                            <label>Улица</label>
                            <input type="text" ng-model="car.description">
                            <br>
                            <label>Дом</label>
                            <input type="text" ng-model="car.color">
                            <br>
                            <label>Квартира</label>
                            <input type="text" ng-model="car.driveType">
                            <br>
                            <label>Название</label>
                            <input type="text" ng-model="car.fuel">
                            <br>
                            <label>Описание</label>
                            <input type="text" ng-model="car.fuelConsumption">
                            <br>
                            <label>Площадь</label>
                            <input type="text" ng-model="car.transmission">
                            <br>
                            <label>Площадь комнат</label>
                            <input type="text" ng-model="car.transportType">
                            <br>
                            <label>Площадь кухни</label>
                            <input type="text" ng-model="car.run">
                            <br>
                            <label>Высота</label>
                            <input type="text" ng-model="car.phone">
                            <br>
                            <label>Цена</label>
                            <input type="text" ng-model="car.city">
                            <br>
                            <label>Этаж</label>
                            <input type="text" ng-model="car.volume">
                            <br>
                            <label>к-во комнат</label>
                            <input type="text" ng-model="car.price">
                            <br>
                            <!-- <label></label>
                            <input type="text" ng-model="car.">
                            <br> -->
                            <label>Мабли</label>
                            <input type="text" ng-model="car.centralLock">
                            <br>
                            <label>Отопление</label>
                            <input type="text" ng-model="car.airbag">
                            <br>
                            <label>Тип дома</label>
                            <input type="text" ng-model="car.abs">
                            <br>
                            <label>Тип комнаты</label>
                            <input type="text" ng-model="car.alarms">
                            <br>
                            <button type="submit" class="button">Upd</button>
                        </form>
                    </div>
                    <div ng-controller="delCar">
                        <form ng-submit="submitFormDel()">
                            <button type="submit" class="button">Del</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </section>
</div>
	</body>
	</html>
