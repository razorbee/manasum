<?php if ( ! defined( 'WPINC' ) ) { die( "Don't mess with us." ); }
/**
 * SEO Redirections
 *
 * @since      7.0.0
 * @package    CF_Geoplugin
 * @edited     Ivijan-Stefan Stipic
 */

if( !class_exists( 'CF_Geoplugin_SEO_Redirection' ) ) :
class CF_Geoplugin_SEO_Redirection extends CF_Geoplugin_Global
{
    public function __construct()
    {
		// Stop on ajax
		if(wp_doing_ajax()) return;
		
		// Prevent redirection using GET parametter
		if(isset($_GET['geo']) && ($_GET['geo'] === false || $_GET['geo'] === 'false'))
			return;
			
		if(isset($_REQUEST['stop_redirection']) && ($_REQUEST['stop_redirection'] === true || $_REQUEST['stop_redirection'] === 'true'))
			return;
		
		/**
		 * Fire WordPress redirecion ASAP
		 =======================================*/
		/* 01 */ $this->add_action( 'muplugins_loaded',		'wp_seo_redirection', 1);
		/* 02 */ $this->add_action( 'send_headers',			'wp_seo_redirection', 1);
		/* 03 */ $this->add_action( 'template_redirect',	'wp_seo_redirection', 1);
		
		/**
		 * Fire Page redirecion ASAP
		 =======================================*/
		/* 01 */ $this->add_action( 'send_headers',			'page_seo_redirection', 1);
		/* 02 */ $this->add_action( 'posts_selection',		'page_seo_redirection', 1);
		/* 03 */ $this->add_action( 'wp',					'page_seo_redirection', 1);
		/* 04 */ $this->add_action( 'template_redirect',	'page_seo_redirection', 1);
		
	}

	/*
	 * Page SEO Redirection
	 */
	public function page_seo_redirection(){
		$CFGEO = $GLOBALS['CFGEO'];
		
		if(parent::get_the_option('redirect_disable_bots', false) && parent::is_bot()) return;
		
		$page_id = $this->get_current_page_ID();
		
		if($page_id && !is_admin() && parent::get_the_option('enable_seo_redirection', false))
		{
			$redirect_data 	= $this->get_post_meta( 'redirection' );
			if( is_array( $redirect_data ) )
			{
				foreach( $redirect_data as $i => $value )
				{
					if( !isset( $value['seo_redirect'] )) continue;
					if( !$value['seo_redirect'] || $value['seo_redirect'] == 0 ) continue;

					if( !isset( $value['country'] ) ) $value['country'] = NULL;
					if( !isset( $value['region'] ) ) $value['region'] = NULL;
					if( !isset( $value['city'] ) ) $value['city'] = NULL;

					if( !isset( $value['only_once'] ) ) $value['only_once'] = 0;
					
					$value['ID'] = $i;
					$value['page_id'] = $page_id;
					
					$value = apply_filters('cf_geoplugin_page_seo_redirection_values', $value);
					
					$this->do_redirection( $value );
				}
			}

			$old_redirection = apply_filters('cf_geoplugin_page_seo_redirection_old_fields', array(
				'country',
				'region',
				'city',
				'redirect_url',
				'http_code',
				'seo_redirect',
				'page_id',
				'ID'
			));
			$redirection = array();

			foreach( $old_redirection as $i => $meta_key )
			{
				$meta_value = $this->get_post_meta( $meta_key );

				if( $meta_key == 'redirect_url' ) $meta_key = 'url';
				if( $meta_value )
				{
					if( in_array( $meta_key, array( 'country', 'region', 'city' ) ) ) $meta_value = array( $meta_value );

					$redirection[ $meta_key ] = $meta_value;
				}
				else $redirection[ $meta_key ] = NULL;
			}
			$redirection['ID'] = 0;
			$redirection['page_id'] = $page_id;
			$redirection = apply_filters('cf_geoplugin_page_seo_redirection_fields', $redirection);
			if( isset( $redirection['seo_redirect'] ) && $redirection['seo_redirect'] == '1' ) $this->do_redirection( $redirection );
		}
	}

	/*
	 * WordPress SEO Redirection
	 */
	public function wp_seo_redirection(){
		global $wpdb; $CFGEO = $GLOBALS['CFGEO'];
		
		if(parent::get_the_option('redirect_disable_bots', false) && parent::is_bot()) return;

		if(!is_admin() && parent::get_the_option('enable_seo_redirection', false))
		{
			$country = (isset($CFGEO['country']) && !empty($CFGEO['country']) ? strtolower($CFGEO['country']) : NULL);
			$country_code = (isset($CFGEO['country_code']) && !empty($CFGEO['country_code']) ? strtolower($CFGEO['country_code']) : NULL);
			
			$region = (isset($CFGEO['region']) && !empty($CFGEO['region']) ? strtolower($CFGEO['region']) : NULL);
			$region_code = (isset($CFGEO['region_code']) && !empty($CFGEO['region_code']) ? strtolower($CFGEO['region_code']) : NULL);
			
			$city = (isset($CFGEO['city']) && !empty($CFGEO['city']) ? strtolower($CFGEO['city']) : NULL);
			
			$where = array();
			
			if($country || $country_code)
			{
				if($country) $where[]=$wpdb->prepare('TRIM(LOWER(country)) = %s', $country);
				if($country_code) $where[]=$wpdb->prepare('TRIM(LOWER(country)) = %s', $country_code);
			}
			
			if($region || $region_code)
			{
				if($region) $where[]=$wpdb->prepare('TRIM(LOWER(region)) = %s', $region);
				if($region_code) $where[]=$wpdb->prepare('TRIM(LOWER(region)) = %s', $region_code);
			}
			
			if($city) $where[]=$wpdb->prepare('TRIM(LOWER(city)) = %s', $city);
			
			if(!empty($where)) {
				$where = ' AND (' . join(' OR ', $where) . ')';
			} else {
				$where = '';
			}
			
			$table_name = self::TABLE['seo_redirection'];
			$where = apply_filters('cf_geoplugin_wp_seo_redirection_query_where', $where, "{$wpdb->prefix}{$table_name}");
 
			
            $redirects = $wpdb->get_results(apply_filters('cf_geoplugin_wp_seo_redirection_query', "
			SELECT 
				TRIM(url) AS url,
				TRIM(LOWER(country)) AS country,
				TRIM(LOWER(region)) AS region,
				TRIM(LOWER(city)) AS city,
				http_code AS http_code,
				only_once
			FROM 
				{$wpdb->prefix}{$table_name}
			WHERE
				active = 1{$where}", "{$wpdb->prefix}{$table_name}"), ARRAY_A );

			if( $redirects !== NULL && $wpdb->num_rows > 0 && ( isset( $CFGEO['country'] ) || isset( $CFGEO['country_code'] ) ) )
			{
				foreach( $redirects as $redirect )
				{
					$this->do_redirection( $redirect );
				}
			}
		}
	}
	
	/*
	 * Safe WordPress redirection
	 */
	private function redirect($url, $http_code=302){
		if (!headers_sent())
		{
			// Clear cache for the redirections
			if(parent::get_the_option('enable_cache', false))
			{
				if(function_exists('nocache_headers')) {
					nocache_headers();
				}
				header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
				header('Pragma: no-cache');
				header('Expires: Sat, 26 Jul 2019 05:00:00 GMT');
			}
			
			// Using the Referrer-Policy HTTP header
			if( parent::get_the_option('hide_http_referer_headers', 0) )
			{
				header('Referrer-Policy: no-referrer');
			}
			
			// Redirect via PHP
			if( !wp_redirect( $url, $http_code ) )
			{
				// Log exception
				if(parent::get_the_option('log_errors', false)) {
					throw new Exception(__('CF GEO PLUGIN NOTICE: WordPress redirection fail because of CORS (Cross-Origin Resource Sharing) protection. We proceed with the standard PHP redirection.', CFGP_NAME));
				}
			}
			
			// Standard redirect
			header("Location: {$url}", true, $http_code);
			
			// Optional workaround for an IE bug (thanks Olav)
        	header('Connection: close');
			exit;
		}
		else
		{
			// Log exception
			if(parent::get_the_option('log_errors', false)) {
				throw new Exception(sprintf(__('CF GEO PLUGIN NOTICE: Headers already sent, redirection is not possible to the: %s', CFGP_NAME), $url));
			}
		}
	}

	/*
	 * Prepare and do redirection
	 */
	private function do_redirection( $redirect )
	{		
		$CFGEO = $GLOBALS['CFGEO'];
		
		if(
			isset($redirect['country'])		=== false
			&& isset($redirect['region']) 	=== false
			&& isset($redirect['city']) 	=== false
		) return;
		
		$country_check = $this->check_user_by_country( $redirect['country'] );

		$country_empty = false;
		$region_empty = false;
		$city_empty = false;
		
		if( $this->is_object_empty($redirect, 'country') ) $country_empty = true;
		if( $this->is_object_empty($redirect, 'region') ) $region_empty = true;
		if( $this->is_object_empty($redirect, 'city') ) $city_empty = true;

		if( isset( $redirect['url'] ) && filter_var($redirect['url'], FILTER_VALIDATE_URL) && ( $country_check || $country_empty ) )
		{			
			if($this->check_user_by_city( $redirect['city'] ) && ( $this->check_user_by_region( $redirect['region'] ) || $region_empty ) )
			{
				if($this->control_redirection( $redirect )) $this->redirect( $redirect['url'], $redirect['http_code'] );
			}
			elseif($city_empty && $this->check_user_by_region( $redirect['region'] ) ) 
			{
				if($this->control_redirection( $redirect )) $this->redirect( $redirect['url'], $redirect['http_code'] );
			}
			elseif($region_empty && $city_empty && $country_check ) 
			{
				if($this->control_redirection( $redirect )) $this->redirect( $redirect['url'], $redirect['http_code'] );
			}
		}
	}
	
	/*
	 * Redirection control
	 */
	private function control_redirection( $redirect )
	{	
		// Forbid infinity loop
		if($this->current_url( $redirect['url'], true ))
		{
			return false;
		}
	
		// Redirect only once
		if(isset( $redirect['only_once'] ) && $redirect['only_once'] == 1)
		{
			
			if(isset($redirect['page_id']) && isset($redirect['ID']) && !empty($redirect['page_id'])) {
				$cookie_name = apply_filters(
					'cf_geoplugin_control_seo_redirection_cookie_name_' . $redirect['page_id'],
					'__cfgp_seo_' . md5($redirect['page_id'] . '_once_' . $redirect['ID']),
					$redirect['page_id'],
					$redirect['ID']
				);
			} else {
				$cookie_name = apply_filters(
					'cf_geoplugin_control_seo_redirection_cookie_name',
					'__cfgp_seo_' . md5($redirect['url']),
					$redirect['url']
				);
			}
			
			$expire = apply_filters(
				'cf_geoplugin_control_seo_redirection_cookie_expire_time',
				(time()+((365*DAY_IN_SECONDS)*2)),
				time()
			);
			
			if(isset($redirect['page_id']) && isset($redirect['ID']) && !empty($redirect['page_id'])) {
				$expire = apply_filters(
					'cf_geoplugin_control_seo_redirection_cookie_expire_time_' . $redirect['page_id'],
					$expire,
					time()
				);
			}
			
			if(isset($_COOKIE[$cookie_name]) && !empty($_COOKIE[$cookie_name])){
				return false;
			} else {
				setcookie( $cookie_name, time() . '_' . $expire, $expire, COOKIEPATH, COOKIE_DOMAIN );
			}
		}
		
		return true;
	}
	
	/*
	 * Test is object empty or not
	 */
	private function is_object_empty($obj,$name){
		return ( ( isset( $obj[$name][0] ) && empty( $obj[$name][0] ) ) || ( empty( $obj[$name] ) ) );
	}
	
	/*
	 * Get current URL or match current URL
	 */
	private function current_url ($url = NULL, $avoid_protocol = false) {
		$host = $_SERVER['HTTP_HOST'];
		$uri = $_SERVER['REQUEST_URI'];
		
		if( $avoid_protocol )
		{
			$url = preg_replace('/(https?\:\/\/)/i', '', $url);
			$location = "{$host}{$uri}";
		}
		else
		{
			$protocol = parent::is_ssl() ? 'https' : 'http';
			$location = "{$protocol}://{$host}{$uri}";
		}

		
		if(NULL === $url)
			return $location;
		else
		{
			if(!empty($url) && !empty($location))
			{
				$url = rtrim($url, '/');
				$location = rtrim($location, '/');
				
				if(strtolower($url) == strtolower($location))
					return $location;
			}
		}
		
		return false;
	}
}
endif;