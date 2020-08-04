<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class LeafletShortcode extends Shortcode
{
    public function init()
    {
        //[leaflet id="map" height="300" cx="41.909986" cy="12.395915" zoom="12"]
        $this->shortcode->getHandlers()->add('leaflet', function(ShortcodeInterface $sc) {

            $this->shortcode->addAssets('js', 'theme://js/plugins/leaflet-src.js');
            $this->shortcode->addAssets('css','theme://css/leaflet.css');

            $id         =   $sc->getParameter('id');
            $height     =   $sc->getParameter('height');
 
            $cx         =   $sc->getParameter('cx');
            $cy         =   $sc->getParameter('cy');
            $zoom       =   $sc->getParameter('zoom');


            $id_output      = $id ? 'id="' . $id . '" ': 'map';
            $zoom_output    = $zoom ?  $zoom : 13;
            $height_output  = $height ? 'height:'. $height . 'px' : 'height:300px';
            $style_output   = 'style="' . $height_output . '"'  ;
        
            $script=<<<src
            <script>
            var map = L.map('map', {
                center: [{$cx}, {$cy}],
                zoom: {$zoom_output}
            });
             L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
              maxZoom: 18,
              detectRetina: true,
              maxNativeZoom: 17
            }).addTo(map);

            </script>
src;

            return '<div id="map" '.$style_output.'></div>' . $script;
        });
    }
}