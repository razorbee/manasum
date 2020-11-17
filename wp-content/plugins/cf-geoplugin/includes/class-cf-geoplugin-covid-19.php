<?php
/**
 * Covid 19 tracker
 *
 * @since      7.9.9
 * @package    CF_Geoplugin
 * @author     Ivijan-Stefan Stipic
 */
if(!class_exists('CF_Geoplugin_Covid_19')) :
class CF_Geoplugin_Covid_19 extends CF_Geoplugin_Global
{
	private $URL;
	private $covid19_country_statistic = array(); //caching control
	private $tab_id = 'covid19';
	
	function __construct() {
		$this->URL = $GLOBALS['CFGEO_API_CALL']['covid-api'];
	}
	
	private static $default_fields = array(
		'covid19_total_cases' 				=> 0,
		'covid19_total_recovered' 			=> 0,
		'covid19_total_unresolved' 			=> 0,
		'covid19_total_deaths' 				=> 0,
		'covid19_total_new_cases_today' 	=> 0,
		'covid19_total_new_deaths_today' 	=> 0,
		'covid19_total_active_cases'		=> 0,
		'covid19_mortality_rate'			=> 0,
		'covid19_recovery_rate'				=> 0,
	//	'covid19_total_serious_cases'		=> 0,
	);
	
	private static $default_global_fields = array(
		'covid19_global_total_cases' 				=> 0,
		'covid19_global_total_recovered' 			=> 0,
		'covid19_global_total_unresolved' 			=> 0,
		'covid19_global_total_deaths' 				=> 0,
		'covid19_global_total_new_cases_today' 		=> 0,
		'covid19_global_total_new_deaths_today' 	=> 0,
		'covid19_global_total_active_cases'			=> 0,
		'covid19_global_mortality_rate'				=> 0,
		'covid19_global_recovery_rate'				=> 0,
	//	'covid19_global_total_serious_cases'		=> 0,
	);
	
	public function run(){
		// Stop on ajax
		if(wp_doing_ajax() && isset($_REQUEST['action']) && !in_array($_REQUEST['action'], array('cf_geoplugin_clear_session','cfgeo_banner_cache'))) return;
		
		if(parent::get_the_option('covid19', 0))
		{
			// Session Type
			$this->session_type = parent::get_the_option('session_type', 1);
			
			$this->add_filter('cf_geoplugin_api_response', 'set_response', 999);
			$this->add_filter('cf_geoplugin_api_response', 'set_response_global', 999);
			
			$this->add_filter('cf_geoplugin_api_render_response', 'set_response', 999);
			$this->add_filter('cf_geoplugin_api_render_response', 'set_response_global', 999);
			
			$this->add_action('page-cf-geoplugin-tab', 'cf_geoplugin_tab');
			$this->add_action('page-cf-geoplugin-tab-panel', 'cf_geoplugin_tab_panel');
			$this->add_action('page-cf-geoplugin-tag-table-end', 'cf_geoplugin_tag_table_end');
			
			if(in_array($this->session_type, array(2,3)) !== false) {
				$this->add_action('clear_cf_geoplugin_session', 'clear_session');
			}
		}
	}
	
	public function clear_session(){
		$CFGEO = $GLOBALS['CFGEO'];

		if(isset($CFGEO['country_code']) && $country_code = $CFGEO['country_code']){
			delete_transient('cf_geoplugin_covid19_' . $country_code . '_statistic');
		}
		
		delete_transient('cfgp-covid19-global-statistic');
	}
	
	public function cf_geoplugin_tab ()
	{ ?>
		<li class="nav-item">
			<a class="nav-link nav-link-<?php echo $this->tab_id; ?> text-dark" href="#<?php echo $this->tab_id; ?>" role="tab" data-toggle="tab"><span class="fa fa-sun-o"></span> <?php _e('COVID-19',CFGP_NAME); ?></a>
		</li>
	<?php }
	
	public function cf_geoplugin_tab_panel ()
	{
		$CFGEO = $GLOBALS['CFGEO'];
		?>
		<div role="tabpanel" class="tab-pane tab-pane-<?php echo $this->tab_id; ?> fade pt-3" id="<?php echo $this->tab_id; ?>">
			<h3 class="ml-3 mr-3"><?php _e('Coronavirus outbreak tracker',CFGP_NAME); ?></h3>
			<p class="ml-3 mr-3"><?php _e('You can display global or country based informations of the Coronavirus (COVID-19).',CFGP_NAME); ?></p>
			<table width="100%" class="table table-striped table-sm">
				<thead>
					<tr>
						<th class="manage-column column-shortcode column-primary" width="40%"><strong><?php _e('Shortcode',CFGP_NAME); ?></strong></th>
						<th class="manage-column column-returns column-primary"><strong><?php _e('Returns',CFGP_NAME); ?></strong></th>
					</tr>
				</thead>
				<tbody>
				<?php $test = array_keys( array_merge(self::$default_fields, self::$default_global_fields) ); foreach($CFGEO as $key => $val) : if(!in_array($key, $test)) continue;  ?>
					<tr>
						<td><kbd>[cfgeo_<?php echo $key; ?>]</kbd></td>
						<td><?php echo $val; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
				<thead>
					<tr>
						<th class="manage-column column-shortcode column-primary" width="40%"><strong><?php _e('Shortcode',CFGP_NAME); ?></strong></th>
						<th class="manage-column column-returns column-primary"><strong><?php _e('Returns',CFGP_NAME); ?></strong></th>
					</tr>
				</thead>
			</table>
		</div>
	<?php }
	
	public function cf_geoplugin_tag_table_end ()
	{
		$CFGEO = $GLOBALS['CFGEO'];
		$test = array_keys( array_merge(self::$default_fields, self::$default_global_fields) ); foreach($CFGEO as $key => $val) : if(!in_array($key, $test)) continue; ?>
		<tr>
			<td><kbd>%%<?php echo $key; ?>%%</kbd></td>
			<td><?php echo $val; ?></td>
		</tr>
	<?php endforeach;
	}
	
	public function set_response ( $data, $default = array() )
	{
		if (version_compare(PHP_VERSION, '7.0.0', '>='))
		{
			$data=array_replace($data, self::$default_fields);
		}
		else
		{
			$data=array_merge($data, self::$default_fields);
		}
		
		if(empty($data))
			return $data;
		
		if(!isset($data['country_code']))
			return $data;
		
		if(empty($data['country_code']))
			return $data;
		
		if($statistic = $this->get_country_statistic($data['country_code'], $data['country']))
		{
			if(is_array($data) && is_array($statistic))
			{
				if (version_compare(PHP_VERSION, '7.0.0', '>='))
				{
					$data=array_replace($data, $statistic);
				}
				else
				{
					$data=array_merge($data, $statistic);
				}
			}
		}
		
		$GLOBALS['CFGEO'] = array_merge($GLOBALS['CFGEO'], $data);
		
		return $data;
	}
	
	public function set_response_global ( $data, $default = array() )
	{
		if(is_array($data) && is_array(self::$default_global_fields))
		{
			if (version_compare(PHP_VERSION, '7.0.0', '>='))
			{
				$data=array_replace($data, self::$default_global_fields);
			}
			else
			{
				$data=array_merge($data, self::$default_global_fields);
			}
		}
		
		if($statistic = $this->get_global_statistic())
		{
			if(is_array($data) && is_array($statistic))
			{
				if (version_compare(PHP_VERSION, '7.0.0', '>='))
				{
					$data=array_replace($data, $statistic);
				}
				else
				{
					$data=array_merge($data, $statistic);
				}
			}
		}
		
		$GLOBALS['CFGEO'] = array_merge($GLOBALS['CFGEO'], $data);
		
		return $data;
	}
	
	public function get_global_statistic()
	{
		global $CFGEO_DEBUG;
		// delete_transient("cfgp-covid19-global-statistic");
		
		if(isset($this->covid19_global_statistic) && !empty($this->covid19_global_statistic) && $CFGEO_DEBUG !== true)
			return apply_filters( 'cf_geoplugin_covid19_global_statistic', $this->covid19_global_statistic, self::$default_global_fields);
		
		if($CFGEO_DEBUG !== true && in_array($this->session_type, array(2,3)) !== false &&  $cache = get_transient('cfgp-covid19-global-statistic') )
		{
			$this->covid19_global_statistic = $cache;
			return apply_filters( 'cf_geoplugin_covid19_global_statistic', $this->covid19_global_statistic, self::$default_global_fields);
		}
		else if (
			isset($_SESSION[CFGP_PREFIX . 'api_covid_19_global_statistic']) 
			&& !empty($_SESSION[CFGP_PREFIX . 'api_covid_19_global_statistic'])
			&& in_array($this->session_type, array(1,3)) !==  false
		)
		{
			$this->covid19_global_statistic = $_SESSION[CFGP_PREFIX . 'api_covid_19_global_statistic'];
			return apply_filters( 'cf_geoplugin_covid19_global_statistic', $_SESSION[CFGP_PREFIX . 'api_covid_19_global_statistic'], self::$default_global_fields);
		}
		else
		{
			if($api_summary = $this->curl_get($this->URL . '/summary', '', apply_filters('api_covid_19_global_statistic_curl_params', array('timeout'=>5)), false))
			{
				if(preg_match('/^({"Global":{.*?}),/i', $api_summary, $match)){
					$api_summary = $match[1] . '}';
					$api_summary = json_decode($api_summary, true);
				}
				
				if(isset($api_summary['Global']))
				{
					$summary = (object)$api_summary['Global'];
					
					$summary->TotalConfirmed = $summary->TotalConfirmed ? (int)$summary->TotalConfirmed : 0;
					$summary->TotalRecovered = $summary->TotalRecovered ? (int)$summary->TotalRecovered : 0;
					$summary->TotalDeaths = $summary->TotalDeaths ? (int)$summary->TotalDeaths : 0;
					$summary->NewConfirmed = $summary->NewConfirmed ? (int)$summary->NewConfirmed : 0;
					$summary->NewDeaths = $summary->NewDeaths ? (int)$summary->NewDeaths : 0;
					
					$covid19_global_total_unresolved = ($summary->TotalConfirmed - $summary->TotalRecovered - $summary->TotalDeaths);
					$covid19_global_total_active_cases = ($summary->TotalConfirmed - $summary->TotalDeaths);
					$active_cases =  ($covid19_global_total_active_cases < 0 ? 0 : $covid19_global_total_active_cases );
					
					$fields = array(
						'covid19_global_total_cases' 				=> $summary->TotalConfirmed,
						'covid19_global_total_recovered' 			=> $summary->TotalRecovered,
						'covid19_global_total_unresolved' 			=> ( $covid19_global_total_unresolved < 0 ? 0 : $covid19_global_total_unresolved ),
						'covid19_global_total_deaths' 				=> $summary->TotalDeaths,
						'covid19_global_total_new_cases_today' 		=> $summary->NewConfirmed,
						'covid19_global_total_new_deaths_today' 	=> $summary->NewDeaths,
						'covid19_global_total_active_cases'			=> $active_cases,
						'covid19_global_mortality_rate'				=> number_format(floatval(($summary->TotalDeaths/$summary->TotalConfirmed)*100), 2, '.', ''),
						'covid19_global_recovery_rate'				=> number_format(floatval(($summary->TotalRecovered/$summary->TotalConfirmed)*100), 2, '.', '')
					//	'covid19_global_total_serious_cases'		=> 0,
					);
					
					$this->covid19_global_statistic = $fields;
					if($CFGEO_DEBUG !== true)
					{
						if(in_array($this->session_type, array(2,3)) !==  false) {
							set_transient("cfgp-covid19-global-statistic", $fields, (MINUTE_IN_SECONDS * CFGP_SESSION));
						}
						if(in_array($this->session_type, array(1,3)) !==  false) {
							$_SESSION[CFGP_PREFIX . 'api_covid_19_global_statistic'] = $fields;
						}
					}
					return apply_filters( "api_covid_19_global_statistic", $fields, self::$default_global_fields);
				}
			}
		}
		return false;
	}

	public function get_country_statistic( $country_code, $country )
	{
		global $CFGEO_DEBUG;
		// delete_transient('cfgp-covid19-' . $country_code . '-statistic');

		if(empty($country_code)) return false;
		
		if(isset($this->covid19_country_statistic[$country_code]) && !empty($this->covid19_country_statistic[$country_code]) && $CFGEO_DEBUG !== true)
			return apply_filters( 'cf_geoplugin_covid19_' . $country_code . '_statistic', $this->covid19_country_statistic[$country_code], self::$default_fields);
		
		if( $CFGEO_DEBUG !== true && in_array($this->session_type, array(2,3)) !==  false && $cache = get_transient('cfgp-covid19-' . $country_code . '-statistic'))
		{
			$this->covid19_country_statistic[$country_code] = $cache;
			return apply_filters( 'cf_geoplugin_covid19_' . $country_code . '_statistic', $cache, self::$default_fields);
		}
		else if (
			isset($_SESSION[CFGP_PREFIX . 'api_covid_19_statistic']) 
			&& !empty($_SESSION[CFGP_PREFIX . 'api_covid_19_statistic']) 
			&& isset($_SESSION[CFGP_PREFIX . 'api_covid_19_statistic']['covid19_total_country'])
			&& $_SESSION[CFGP_PREFIX . 'api_covid_19_statistic']['covid19_total_country'] == $country_code
			&& in_array($this->session_type, array(1,3)) !==  false
		)
		{
			$this->covid19_country_statistic[$country_code] = $_SESSION[CFGP_PREFIX . 'api_covid_19_statistic'];
			return apply_filters( 'cf_geoplugin_covid19_' . $country_code . '_statistic', $_SESSION[CFGP_PREFIX . 'api_covid_19_statistic'], self::$default_fields);
		}
		else
		{
			if($api_countries = $this->curl_get("{$this->URL}/countries", '', apply_filters('api_covid_19_country_statistic_curl_params', array('timeout'=>3)), true))
			{				
				$slug = NULL;
				foreach($api_countries as $index => $obj)
				{
					if(isset($obj['ISO2']) && $obj['ISO2'] == $country_code)
					{
						$slug = $obj['Slug'];
						break;
					}
					else if(isset($obj['Slug']) && $obj['Slug'] == strtolower($country))
					{
						$slug = $obj['Slug'];
						break;
					}
					continue;
				}
				
				if($slug && $response_total = $this->curl_get($this->URL . '/country/' . $slug . '?from=' . date('Y-m-d', strtotime('-3 days')) . 'T00:00:00Z&to=' . date('Y-m-d') . 'T00:00:00Z', '', apply_filters('api_covid_19_country_statistic_curl_params', array('timeout'=>3)), true))
				{
					if(!empty($response_total))
					{				
						$total = count($response_total);
						$today = (object)$response_total[$total-1];
						
						$today->Recovered = $today->Recovered ? (int)$today->Recovered : 0;
						$today->Confirmed = $today->Confirmed ? (int)$today->Confirmed : 0;
						$today->Active = $today->Active ? (int)$today->Active : 0;
						$today->Deaths = $today->Deaths ? (int)$today->Deaths : 0;
						
						$recovered = $today->Recovered;
						if(empty($recovered))
							$recovered = ($today->Confirmed - $today->Active - $today->Deaths);
						if($recovered < 0)
							$recovered = 0;
						
						$fields = array(
							'covid19_total_cases' 				=> $today->Confirmed,
							'covid19_total_recovered' 			=> $recovered,
							'covid19_total_unresolved' 			=> $today->Active,
							'covid19_total_deaths' 				=> $today->Deaths
						);
						
						if(isset($response_total[$total-2]))
						{
							$yesturday = (object)$response_total[$total-2];
							
							$yesturday->Recovered = $yesturday->Recovered ? (int)$yesturday->Recovered : 0;
							$yesturday->Confirmed = $yesturday->Confirmed ? (int)$yesturday->Confirmed : 0;
							$yesturday->Active = $yesturday->Active ? (int)$yesturday->Active : 0;
							$yesturday->Deaths = $yesturday->Deaths ? (int)$yesturday->Deaths : 0;
							
							$covid19_total_new_cases_today	= ($today->Confirmed - $yesturday->Confirmed);
							$covid19_total_new_deaths_today	= ($today->Deaths - $yesturday->Deaths);
							$covid19_total_active_cases		= ($today->Active - $yesturday->Active);
							
							$fields = array_merge($fields, array(
								'covid19_total_new_cases_today' 	=> ($covid19_total_new_cases_today < 0 ? 0 : $covid19_total_new_cases_today),
								'covid19_total_new_deaths_today' 	=> ($covid19_total_new_deaths_today < 0 ? 0 : $covid19_total_new_deaths_today),
								'covid19_total_active_cases'		=> ($covid19_total_active_cases < 0 ? 0 : $covid19_total_active_cases),
								'covid19_mortality_rate'			=> number_format(floatval($today->Confirmed>0 && $today->Deaths>0 ? (($today->Deaths/$today->Confirmed)*100) : 0 ), 2, '.', ''),
								'covid19_recovery_rate'				=> number_format(floatval($today->Confirmed>0 && $recovered>0 ? (($recovered/$today->Confirmed)*100) : 0 ), 2, '.', ''),
							//	'covid19_total_serious_cases'		=> 0,
							));
						}
						
						$this->covid19_country_statistic[$country_code] = $fields;
						if($CFGEO_DEBUG !== true)
						{
							if(in_array($this->session_type, array(2,3)) !==  false) {
								set_transient('cfgp-covid19-' . $country_code . '-statistic', $this->covid19_country_statistic[$country_code], (MINUTE_IN_SECONDS * CFGP_SESSION));
							}
							if(in_array($this->session_type, array(1,3)) !==  false) {
								$this->covid19_country_statistic[$country_code]['covid19_total_country'] = $country_code;
								$_SESSION[CFGP_PREFIX . 'api_covid_19_statistic'] = $this->covid19_country_statistic[$country_code];
							}
						}
						return apply_filters( 'cf_geoplugin_covid19_' . $country_code . '_statistic', $this->covid19_country_statistic[$country_code], self::$default_fields);
					}
				}

			}
		}
		return false;
	}

}
endif;