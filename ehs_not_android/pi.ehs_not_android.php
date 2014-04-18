<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Am I Android? Class
 *
 * @package		ExpressionEngine
 * @category	Plugin
 * @author		Ryan Shrum
 * @copyright	Copyright (c) 2013, Ryan Shrum
 * @link		http://www.ehousestudio.com
 */

$plugin_info = array(
  'pi_name'         => '{e} house studio Am I Android?',
  'pi_version'      => '1.0',
  'pi_author'       => 'Ryan Shrum',
  'pi_author_url'   => 'http://www.ehousestudio.com',
  'pi_description'  => 'Android detection; returns boolean.'
);

class ehs_not_android {

	public function __construct()
	{

		$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
		
		if( stripos( $user_agent, 'android' ) !== false ) { 
		
			$return = false;

		} else {

			$return = true;

		}

		$this->return_data = $return;

	}
	
}

/* End of file pi.ehs_not_android.php */
/* Location: ./system/expressionengine/third_party/ehs_not_android/pi.ehs_not_android.php */