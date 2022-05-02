ymaps.ready(init);
        let center = [56.144975, 101.598878];
        function init(){
            let myMap = new ymaps.Map("map", {
                center: center,
                zoom: 16
            });

            let placemark = new ymaps.Placemark(center, {
                balloonContent: `
                <div class='bollon'>
                    <div>{{ $contact->address }}</div>
                </div>
                `
            },{
                iconLayout:'default#image',
                //iconImageHref: '',
                iconImageSize: [40,40],
                iconImageSOffset: [-19,-44]
            });
            
            myMap.controls.remove('geolocationControl');
            myMap.controls.remove('searchControl');
            myMap.controls.remove('trafficControl');
            myMap.controls.remove('typeSelector');
            myMap.controls.remove('fullscreenControl');
            myMap.controls.remove('zoomControl');
            myMap.controls.remove('rulerControl');

            myMap.geoObjects.add(placemark);
        }