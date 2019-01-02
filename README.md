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
