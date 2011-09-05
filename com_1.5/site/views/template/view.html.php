<?php
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
   HTML View class for the Bookings Component
**/

class TemplateViewTemplate extends JView
{
	function display($tpl = null)
	{
	    $this->greetings = $this->get('Greeting');
		parent::display($tpl);
	}
}