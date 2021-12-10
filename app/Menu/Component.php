<?php

namespace Initiator\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;

class Component extends MenuContract {
    public function menus() {
        return array(
            'primary'   => esc_html__( 'Primary Sidebar', 'initiator' ),
            'secondary' => esc_html__( 'Secondary Sidebar', 'initiator' ),
            'social'    => esc_html__( 'Social Navigation', 'initiator' )
        );
    }

	public function enqueue() {
		wp_enqueue_script( 'initiator-navigation', get_theme_file_uri( 'vendor/benlumia007/initiator/assets/js/navigation.js' ), array('jquery'), '3.0.0', true );
		wp_localize_script( 'initiator-navigation', 'initiatorScreenReaderText', array(
			'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'initiator' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'initiator' ) . '</span>',
		) );
	}
}   