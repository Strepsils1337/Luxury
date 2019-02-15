<?php
include_once("include/header/header.php");
include_once("include/header/topmenu.php");
?>

    <section id="container">
      <div class="wrap-container">
        <section class="content-box box-1">
          <div class="zerogrid">
            <div class="wrap-box"><!--Start Box-->
              <div class="row">
                <div class="">
                  <div class="row">
                    <div class="col-1-2">
                      
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
        <section class="content-box box-2" ng-controller="addCar">
            <form ng-submit="submitForm()" >
                <fieldset>
                    <legend>Форма для додавання квартири</legend>
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
                            <button type="submit" class="add-car-btn-js">Відправити</button>
                    </fieldset>
            </form>
        </section>
      </div>
    </section>

</div>
</body>
</html>
