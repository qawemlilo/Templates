<?php
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

class TemplateModelTemplate extends JModelItem 
{
    public function getGreeting() {
	    return "Hello, this is a demo";    
	}
}