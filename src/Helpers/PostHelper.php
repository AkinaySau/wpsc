<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 16.07.18
 * Time: 12:56
 */

namespace Sau\WP\WPSC\Helpers;


class PostHelper {
	public static function getPostTypes() {
		$types = get_post_types();

		$sort = array_diff_key( $types, [
			'attachment'          => 'attachment',
			'revision'            => 'revision',
			'nav_menu_item'       => 'nav_menu_item',
			'custom_css'          => 'custom_css',
			'customize_changeset' => 'customize_changeset',
			'user_request'        => 'user_request',
			'oembed_cache'        => 'oembed_cache',
		] );

		return $sort;
	}
}