<footer class="footer">
    <div class="footer__container _container">
        <div class="row">

            <div class="footer__menu">
                <nav class="menu ">
                    <?php
                            wp_nav_menu( [
                            'menu'            => 'Footer menu',
                            'container'       => false,
                            'menu_class'      => 'menu__list',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                            'depth'           => 1,
                            ] );
                        ?>
                </nav>

            </div>

            <span class=" item__border"></span>


            <div class="footer__contact ">
                <a href="http://topforum/contacts" class=" contact__link">CONTACT</a>
                <div class="contact__title">Top Forum Group</div>
                <address class="contact__address"><?php the_field('address', 33); ?></address>
                <div class="contact__number">
                    <a href="tel:<?php the_field('number') ?>">+<?php the_field('number',33)?></a>
                </div>
                <a href="mailto:<?php the_field('email') ?>" class="contact__email"><?php the_field('email', 33) ?></a>
            </div>
            <a href="#" class="follow__link  open-popup">FOLLOW US</a>
        </div>
        <div class="border__line"></div>
        <div class="footer__copyright">
            <div class="footer__copyright-text">© 2014 Top Forum Group. All rights reserved. </div>
            <div class="copyrigth__service">Website development:</div>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/footer_ico.png" alt="mamont"
                class="copyright__ico">
        </div>
    </div>
</footer>

</div>

<div class="popup-bg">
    <div class="popup">
        <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/close_popup.png" alt="" class="close">
        <h2 class="popup__title">SUBSCRIBE</h2>
        <div class="popup__text"><?php the_field('text_in_popup') ?></div>
        <?php echo do_shortcode('[contact-form-7 id="440" title="Pop up form"]') ?>
    </div>
</div>


<?php wp_footer();?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcqPq8n3K5VwQA_Dkz2hsFkBr5iJ89KrY"></script>
<script type="text/javascript">
(function($) {

    /*
     *  new_map
     *
     *  Эта функция рендерит Google карту внутри выбранного jQuery элемента
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$el (jQuery элемент)
     *  @return	n/a
     */

    function new_map($el) {

        // Переменные
        var $markers = $el.find('.marker');


        // Переменные
        var args = {
            zoom: 16,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        // Создаем карту	        	
        var map = new google.maps.Map($el[0], args);


        // Создаем заготовку массива маркеров
        map.markers = [];


        // Добавляем маркеры
        $markers.each(function() {

            add_marker($(this), map);

        });


        // Центрируем карту
        center_map(map);


        // Возвращаем данные
        return map;

    }

    /*
     *  add_marker
     *
     *  Эта функция добавляет маркер на Google карту
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	$marker (jQuery элемент)
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function add_marker($marker, map) {

        // Переменные
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // Создаем маркер
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        // Добавляем маркер в массив
        map.markers.push(marker);

        // Если маркер содержит HTML, добавим его в infoWindow
        if ($marker.html()) {
            // оздаем info window
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // Показываем info window при нажатии на маркер
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open(map, marker);

            });
        }

    }

    /*
     *  center_map
     *
     *  Эта функция центрирует карту и показывает все маркеры, прикрепленные к карте
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	4.3.0
     *
     *  @param	map (Google Map object)
     *  @return	n/a
     */

    function center_map(map) {

        // Переменные
        var bounds = new google.maps.LatLngBounds();

        // Перебираем все маркеры и создаем bounds
        $.each(map.markers, function(i, marker) {

            var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

            bounds.extend(latlng);

        });

        // Только 1 маркер?
        if (map.markers.length == 1) {
            // Центрируем карту
            map.setCenter(bounds.getCenter());
            map.setZoom(16);
        } else {
            // fit to bounds
            map.fitBounds(bounds);
        }

    }

    /*
     *  document ready
     *
     *  Эта функция рендерит каждую карту когда страница загружена
     *
     *  @type	function
     *  @date	8/11/2013
     *  @since	5.0.0
     *
     *  @param	n/a
     *  @return	n/a
     */
    // global var
    var map = null;

    $(document).ready(function() {

        $('.acf-map').each(function() {

            // Создаем карту
            map = new_map($(this));

        });

    });

})(jQuery);
</script>
</body>

</html>