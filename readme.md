# Actions everywhere module for Oxid eShop

This module makes your actions available in all templates that have access to `oxViewConf`.


This module will be obsolete with OXID eShop v6 as it will have this buildin: https://www.proudcommerce.com/OXID-Blog/Globales-Aktions-Widget.html

## Installation
1. Copy "copy_this" into your shop root directory. 
2. empty /tmp directory. 
3. activate the module under "Erweiterungen->Module->Ivo Bathke: ActionEverywhere".
4. clear the cache

## Requirements
- UTF-8
- PHP >= 5.6
- Oxid eShop >= CE 4.9.0

## Usage
Create a new action, give it an id and title and assign some products.  

Then in template fetch the products from the action:  

    [{if $oViewConf->getActionArticles('neue-aktion')|@count > 0}]
          [{assign var="myActionArticles" value=$oViewConf->getActionArticles('neue-aktion') }]
          [{include file="widget/product/list.tpl" type=grid head=$oViewConf->getActionTitle('neue-aktion') listId="myAction" products=$myActionArticles showMainLink=true}]
    [{/if}]

## Todo 
- dont allow to change ids of standard actions like 'oxnewest'

## License MIT

© [Ivo Bathke](https://oxid.ivo-bathke.name)
