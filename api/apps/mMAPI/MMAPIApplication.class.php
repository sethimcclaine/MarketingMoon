<?php
Library::import('recess.framework.Application');

class MMAPIApplication extends Application {
	public function __construct() {
		
		$this->name = 'API for MarketingMoon';
		
		$this->viewsDir = $_ENV['dir.apps'] . 'mMAPI/views/';
		
		$this->assetUrl = $_ENV['url.base'] . 'apps/mMAPI/public/';
		
		$this->modelsPrefix = 'mMAPI.models.';
		
		$this->controllersPrefix = 'mMAPI.controllers.';
		
		$this->routingPrefix = 'rest/';
				
	}
}
?>