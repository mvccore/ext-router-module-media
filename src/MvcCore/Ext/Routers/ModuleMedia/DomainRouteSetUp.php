<?php

/**
 * MvcCore
 *
 * This source file is subject to the BSD 3 License
 * For the full copyright and license information, please view
 * the LICENSE.md file that are distributed with this source code.
 *
 * @copyright	Copyright (c) 2016 Tom Flidr (https://github.com/mvccore)
 * @license		https://mvccore.github.io/docs/mvccore/5.0.0/LICENCE.md
 */

namespace MvcCore\Ext\Routers\ModuleMedia;

trait DomainRouteSetUp {

	protected function domainRoutingSetUpRouterByDomainRoute () {
		/** @var $this \MvcCore\Ext\Routers\ModuleMedia */
		// if domain route contains any allowed media version configuration,
		// set up router by this configuration
		$allowedMediaVersions = $this->currentDomainRoute->GetAdvancedConfigProperty(
			\MvcCore\Ext\Routers\Modules\IRoute::CONFIG_ALLOWED_MEDIA_VERSIONS
		);
		if (is_array($allowedMediaVersions)) 
			$this->allowedMediaVersionsAndUrlValues = $allowedMediaVersions;

		// if domain route contains media version param, 
		// set up request media version if possible,
		// else redirect to default media version
		$mediaUrlParamName = static::URL_PARAM_MEDIA_VERSION;
		if (isset($this->defaultParams[$mediaUrlParamName]))
			if (!$this->prepareSetUpRequestMediaSiteVersionIfValid(
				$this->defaultParams[$mediaUrlParamName]
			)) 
				$this->switchUriParamMediaSiteVersion = static::MEDIA_VERSION_FULL;
	}
}
