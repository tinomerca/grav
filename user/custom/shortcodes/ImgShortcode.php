<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ImgShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('img', function(ShortcodeInterface $sc) {
            $id = $sc->getParameter('id');
            $class = $sc->getParameter('class');
            $style = $sc->getParameter('style');
            $caption = $sc->getParameter('caption');
	        $image = $sc->getParameter('src');

            $id_output = $id ? 'id="' . $id . '" ': '';
            $class_output = $class ? 'class="' . $class . '"' : '';
            $style_output = $style ? 'style="' . $style . '"' : '';
            $src = $this->grav['base_url'] .'/user/images/'. $image;
	    
            return '<img ' . $id_output . ' src="'. $src  .'" ' . $class_output . ' ' . $style_output . '/>';
        });
    }
}