/*
    var marker = new google.maps.Marker({
	position: {lat: 55.77186, lng: 37.59343799999999},
	map: map,
	title: 'Legalizuem.ru',
	icon: {
		url: "images/markers/svg/Arrow_3.svg",
		scaledSize: new google.maps.Size(64, 64)
	}
});
//http://blog.kogtev.com/customize-google-map-markers/
*/




// Определяем переменную map
var map;

// Функция initMap которая отрисует карту на странице
function initMap() {
    // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
    map = new google.maps.Map(document.getElementById('map'), {
        // При создании объекта карты необходимо указать его свойства
        // center - определяем точку на которой карта будет центрироваться
        center: {lat: 50.485707, lng: 30.488558},
        // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
        zoom: 15,
        // Добавляем свои стили для отображения карты
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    });

    // Создаем маркер на карте
    var marker = new google.maps.Marker({
        // Определяем позицию маркера
        position: {lat: 49.813942, lng: 24.038837},
        // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
        map: map,
        // Пишем название маркера - появится если навести на него курсор и немного подождать
        title: 'Ваш Білий Дім',
        // Укажем свою иконку для маркера
        icon: '../wp-content/themes/Level-seo/img/map-min.png'
    });
    // Создаем наполнение для информационного окна
    var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Ваш Білий Дім</h1>'+
          '<div id="bodyContent">'+
          '</div>'+
          '</div>';

    // Создаем информационное окно
    var infowindow = new google.maps.InfoWindow({
       content: contentString,
       maxWidth: 200
    });
    // Создаем прослушивание, по клику на маркер - открыть инфо-окно infowindow
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    }