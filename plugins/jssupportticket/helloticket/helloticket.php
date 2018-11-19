<?php
/**
 * @version 1.0
 * @package jssupportticket
 * @copyright (C) 2018-2019 NosyWeb
 * @license GNU/GPL v2
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

class PlgJSSupportTicketHelloTicket extends JPlugin
{
	private $app;
	
	public function __construct( &$subject , $config )
	{
		$this->app = \JFactory::getApplication();
		parent::__construct($subject, $config);
	}


	public function onContentBeforeSave($context, $ticket, $isNew, $formData = array())
	{
		$this->app->enqueueMessage("Hello Ticket, ".get_class($this)."/".__FUNCTION__." say hello to you with the following context : ".$context, 'info');
		
		return true;
	}
	
	public function onContentAfterSave($context, $ticket, $isNew, $formData = array())
	{
		$this->app->enqueueMessage("Hello Ticket, ".get_class($this)."/".__FUNCTION__." say hello to you with the following context : ".$context, 'info');

		return true;
	}
}
