# MvcCore Extension - Router - Modules With Media

[![Latest Stable Version](https://img.shields.io/badge/Stable-v4.3.1-brightgreen.svg?style=plastic)](https://github.com/mvccore/ext-router-module-media/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

MvcCore Router extension to manage multiple websites in single project and to manage website media versions (`full`/`tablet`/`mobile` for different templates/css/js files rendering, optionaly contained in URL address domain part or in URL address beinning), defined by domain routes, targeted by module property in URL completing.  

This router is the way, how to route your requests in domain level with website media versions with params or variable sections, namespaces, default param values and more.

## Outline  
1. [Installation](#user-content-1-installation)  
2. [Features](#user-content-2-features)  
3. [How It Works](#user-content-3-how-it-works)  
4. [Usage](#user-content-4-usage)  
    4.1. [Usage - `Bootstrap` Initialization](#user-content-41-usage---bootstrap-initialization)  
	4.2. [Usage - Targeting Custom Application Part](#user-content-42-usage---targeting-custom-application-part)  
    4.3. [Usage - Creating Module Domain Route](#user-content-43-usage---creating-module-domain-route)  
    4.4. [Usage - Domain Routes And Standard Routes Definition](#user-content-44-usage---domain-routes-and-standard-routes-definition)  


## 1. Installation
```shell
composer require mvccore/ext-router-module-media
```

## 2. Features
Extension has the same features as extensions bellow together:
- [Features for `mvccore/ext-router-module`](https://github.com/mvccore/ext-router-module#user-content-2-features)
- [Features for `mvccore/ext-router-media`](https://github.com/mvccore/ext-router-media#user-content-2-features)

Website media version could be contained in any module domain route as param named `<media_version>` match URL requests like this:
- `http://www.example.com/anything`
- `http://mobile.example.com/anything`
```php
new \MvcCore\Ext\Routers\Modules\Route([
    "pattern"              => "//<media_version>.example.com",
    "module"               => "main",
    "constraints"          => ["media_version" => "www|mobile"],
]);
```
If there is not contained param `<media_version>` in matched module domain route pattern, website media version param has to be contained (or is automaticly inserted) in URL address beginning like this:
- `http://www.example.com/anything`
- `http://www.example.com/mobile/anything`
How precisely is conained in URL address depends on advanced router configuration like allowed media version and more...

[go to top](#user-content-outline)

## 3. How It Works

Extension works in the same way as extensions bellow together:
- [How It Works - `mvccore/ext-router-module`](https://github.com/mvccore/ext-router-module#user-content-3-how-it-works)
- [How It Works - `mvccore/ext-router-media`](https://github.com/mvccore/ext-router-media#user-content-3-how-it-works)

[go to top](#user-content-outline)

## 4. Usage

### 4.1. Usage - `Bootstrap` Initialization

Add this to `/App/Bootstrap.php` or to **very application beginning**, 
before application routing or any other extension configuration
using router for any purposes:

```php
$app = & \MvcCore\Application::GetInstance();
$app->SetRouterClass('\MvcCore\Ext\Routers\ModuleMedia');
...
// to get router instance for next configuration:
/** @var $router \MvcCore\Ext\Routers\ModuleMedia */
$router = & \MvcCore\Router::GetInstance();
```

All other specific usage and advanced configuration is the same as extensions bellow together:
- [More usage and configuration for `mvccore/ext-router-module`](https://github.com/mvccore/ext-router-module#user-content-42-usage---targeting-custom-application-part)
- [More usage and configuration for `mvccore/ext-router-media`](https://github.com/mvccore/ext-router-media#user-content-42-usage---media-url-prefixes-and-allowed-media-versions)

[go to top](#user-content-outline)
