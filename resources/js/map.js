
ymaps.ready(init);
        let center = [latitude, longitude];
        function init(){
            let myMap = new ymaps.Map("map", {
                center: center,
                zoom: 15
            });

            let placemark = new ymaps.Placemark(center, {
                balloonContent:`
                    <div style="background:#ebebeb">
                        <picture>
                            <source srcset="`+img_webp+`" type="image/webp">
                            <img src="`+img+`" alt="logo">
                        </picture>
                    </div>
                    <div>`+address+`</div>
                    <div><a href="mailto:`+email+`">`+email+`</a></div>
                    <div><a href="tel:`+phone+`">`+phone+`</a></div>
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