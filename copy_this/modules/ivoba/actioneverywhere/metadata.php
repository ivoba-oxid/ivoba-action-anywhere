<?php
/* Please retain this copyright header in all versions of the software
 *
 * Copyright (C) 2017 Ivo Bathke
 *
 * It is published under the MIT Open Source License.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

$sMetadataVersion = '1.1';
$aModule          = [
    'id'          => 'ivoba_actioneverywhere',
    'title'       => '<strong>Ivo Bathke</strong>:  <i>ActionEverywhere</i>',
    'description' => 'Use Actions everywhere',
    'thumbnail'   => 'ivoba_oxid.png',
    'version'     => '1.0',
    'author'      => 'Ivo Bathke',
    'email'       => 'ivo.bathke@gmail.com',
    'url'         => 'https://oxid.ivo-bathke.name',
    'extend'      => [
        'oxviewconfig' => 'ivoba/actioneverywhere/core/IvobaActionEverywhereOxViewConfig',
        'actions_main' => 'ivoba/actioneverywhere/application/controllers/admin/IvobaActionEverywhere_actions_main'
    ],
    'blocks'      => [
        array(
            'template' => 'actions_main.tpl',
            'block'    => 'admin_actions_main_form',
            'file'     => '/views/blocks/actionseverywhere_admin_actions_main_form.tpl',
        ),
    ],
    'settings'    => [],
];
