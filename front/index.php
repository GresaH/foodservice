<?php
include 'header.php';
?>
<!--
        <div class="fullscreen background" style="background-image:url('http://www.foodsmiths.uk.com/img/home-hero.jpg');" data-img-width="1455" data-img-height="838">
    <div id="intro-arrow">
                <a href="#work-section"><img class="hvr-hangx" src="img/hover-arrow.png" alt=""></a>
        </div>
        <div class="content-a">
                <div class="content-b">
                        <div class="content-c">
                                 <div class="content-d">
                                                <h2><span>We</span> unlock opportunities for foodservice brands</h2>
                                                <a href="#work-section" class="round-button round-button-white">Explore our work</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
    
-->
  
<div id="video-holder" data-vide-bg="videos/video">  
    <script src="js/vendor/vide/jquery.vide.min.js"></script>
    <script>
        // $(document).ready(function () {
        //   $(document.body).vide('video/ocean'); // Non declarative initialization
        //
        //   var instance = $(document.body).data('vide'); // Get the instance
        //   var video = instance.getVideoObject(); // Get the video object
        //   instance.destroy(); // Destroy instance
        // });
    </script>

    <div class="center-container">
        <div class="center-block">
            <div class="center-block-inner">
                <h2><span>We</span> unlock opportunities for foodservice brands</h2>
                <a href="#work-section" class="round-button round-button-white">Explore our work</a>
            </div>
        </div>
    </div>   

</div>






<div class="text-block home-intro">
    <div class="inner">
        <!--<div id="intro-arrow">
        <a href="#work-section"><img class="hvr-hang" src="img/hover-arrow.png" alt=""></a>
</div>-->
        <h2>We grow brands through stand-out creative solutions inspired by our unrivalled foodservice expertise</h2>
    </div>
</div>




<div id="portfolio-panel">
    <a name="work-section"></a> 
    <div class="thumbs-wrap">

        <div class="work-item">
            <img src="img/knorr.jpg" alt="Knorr">
            <a href="../knorr/">
                <div class="work-item-link">
                    <h3>Knorr</h3>
                    <p>Leveraging a trend</p>
                </div>
            </a>
        </div> 

        <div class="work-item">
            <img src="img/pg-tips.jpg" alt="PG tips">
            <a href="../pg-tips/">
                <div class="work-item-link">
                    <h3>PG tips</h3>
                    <p>Tea with the Queen</p>
                </div>
            </a>
        </div>

        <div class="work-item">
            <img src="img/sodexo-yuyu.jpg" alt="Sodexo">
            <a href="../sodexo-yuyu/">
                <div class="work-item-link">
                    <h3>Sodexo</h3>
                    <p>A brand for students</p>
                </div>
            </a>
        </div>

        <div class="work-item">
            <img src="img/alpro-barista-challenge.jpg" alt="Barista Challenge">
            <a href="../alpro-barista-challenge/">
                <div class="work-item-link">
                    <h3>Alpro</h3>
                    <p>Engaging a clique</p>
                </div>
            </a>
        </div> 

        <div class="work-item">
            <img src="img/meadowland.jpg" alt="Meadowland">
            <a href="../meadowland/">
                <div class="work-item-link">
                    <h3>Meadowland</h3>
                    <p>Disruptive creative</p>
                </div>
            </a>
        </div> 


        <div class="work-item">
            <img src="img/bidvest-safari.jpg" alt="Safari">
            <a href="../safari/">
                <div class="work-item-link">
                    <h3>Bidvest</h3>
                    <p>Rewarding customers</p>
                </div>
            </a>
        </div>     


        <!--
        <div class="work-item">
        <img src="/img/elior.jpg" alt="Elior">
        <a href="../elior/">
        <div class="work-item-link">
        <h3>Elior</h3>
        <p>Branding new concepts</p>
        </div>
        </a>
        </div> 
        -->

    </div>
</div>



<div class="text-block home-get-in-touch">
    <div class="inner">
        <h2>Get in touch</h2>
        <p>We love meeting and talking to passionate people and brands</p>
    </div>
</div>

<a name="map"></a>
<div id="outer-map-holder">
    <div class="map-overlay">
        <div class="map-inner">
            <h4>Switchboard:</h4>
            <p><a href="tel:01525840830">+44 (0)1525 840 830</a></p>
            <h4>New business enquiries:</h4>
            <p>Chris Davies<br /><a href="mailto:chris@foodsmiths.uk.com">chris@foodsmiths.uk.com</a><br /><a href="tel:07720880861">+44 (0)7720 880 861</a></p>
            <h4>Career enquiries:</h4>
            <p>Anna Massey<br /><a href="mailto:anna@foodsmiths.uk.com">anna@foodsmiths.uk.com</a></p>
            <h4>Office address:</h4>
            <p class="no-map-line">6 Doolittle Yard, <br />Froghall Road, <br />Ampthill, Bedfordshire<br />MK45 2NW</p>
        </div> 
    </div>
</div>

<div id="home-map">

    <div id="inner-map-holder">

        <div class="map-overlay">
            <div class="map-inner">
                <h4>Switchboard:</h4>
                <p>+44 (0)1525 840 830</p>
                <h4>New business enquiries:</h4>
                <p>Chris Davies<br /><a href="mailto:chris@foodsmiths.uk.com">chris@foodsmiths.uk.com</a><br />+44 (0)7720 880 861</p>
                <h4>Career enquiries:</h4>
                <p>Anna Massey<br /><a href="mailto:anna@foodsmiths.uk.com">anna@foodsmiths.uk.com</a></p>
                <h4>Office address:</h4>
                <p class="no-map-line">6 Doolittle Yard, <br />Froghall Road, <br />Ampthill, Bedfordshire<br />MK45 2NW</p>
            </div> 
        </div>
    </div>

    <div id="gmaps" class="contact_page_gmaps" style=""></div>


    <script>
        var myLatlng, iconBase, mapOptions, marker, map, styles, gwidth;

        function initialize() {
            myLatlng = new google.maps.LatLng(52.016231, -0.502982);
            iconBase = '/img/';

            var currentWidth = $(window).width();

            if (currentWidth < 724) {
                mapOptions = {
                    center: new google.maps.LatLng(52.016231, -0.502982),
                    zoom: 12,
                    'mapTypeControl': false,
                    'scrollwheel': false,
                    'navigationControl': false,
                    'zoomControl': false,
                    'draggable': false,
                    'disableDefaultUI': true,
                    "stylers": [
                        {"visibility": "simplified"},
                        {"saturation": -100},
                        {"weight": 1.9},
                        {"lightness": 36}
                    ]
                };
            }
            else {
                mapOptions = {
                    center: new google.maps.LatLng(52.016231, -0.574211),
                    zoom: 12,
                    'mapTypeControl': false,
                    'scrollwheel': false,
                    'navigationControl': false,
                    'zoomControl': false,
                    'draggable': false,
                    'disableDefaultUI': true,
                    "stylers": [
                        {"visibility": "simplified"},
                        {"saturation": -100},
                        {"weight": 1.9},
                        {"lightness": 36}
                    ]
                };
            }

            map = new google.maps.Map(document.getElementById("gmaps"), mapOptions);

            marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Foodsmiths',
                icon: iconBase + 'map-marker.png'
            });

            styles = [
                {
                    "stylers": [
                        {"visibility": "simplified"}
                    ]
                }, {
                    "featureType": "road",
                    "stylers": [
                        {"saturation": -100}
                    ]
                }, {
                    "featureType": "road.highway",
                    "stylers": [
                        {"lightness": 100}
                    ]
                }, {
                    "featureType": "landscape",
                    "stylers": [
                        {"saturation": -100},
                        {"lightness": 27}
                    ]
                }, {
                    "featureType": "poi",
                    "stylers": [
                        {"visibility": "off"}
                    ]
                }, {
                    "featureType": "road.local",
                    "stylers": [
                        {"visibility": "on"},
                        {"lightness": 25}
                    ]
                }, {
                    "featureType": "water",
                    "stylers": [
                        {"visibility": "simplified"},
                        {"color": "#40a2ff"},
                        {"lightness": 59}
                    ]
                }
            ];

            map.setOptions({styles: styles});
        }

        google.maps.event.addDomListener(window, 'load', initialize);




        google.maps.event.addDomListener(window, 'resize', function () {

            center = map.getCenter();
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
            var currentWidth = $(window).width();
            if (currentWidth < 724) {
                var newCenter = new google.maps.LatLng(52.016231, -0.502982);
                map.setCenter(newCenter);
            }
        });
    </script>




</div>
<?php
include 'footer.php';
?>
