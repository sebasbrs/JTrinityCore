<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');
 
/**
 * JTrinityCores Controller
 */
class JTrinityCoreControllerJTrinityCores extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 * @since	1.7
	 */
	public function getModel($name = 'JTrinityCore', $prefix = 'JTrinityCoreModel') 
	{
		echo "JTrinityCoreModelJTrinityCores dentro de getModel() <br>";
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}