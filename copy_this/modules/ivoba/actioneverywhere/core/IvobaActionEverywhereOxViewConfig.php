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

class IvobaActionEverywhereOxViewConfig extends IvobaActionEverywhereOxViewConfig_parent
{
    /**
     * @param string $sActionID
     * @param null|int $iLimit
     * @return object|oxArticleList|roxidModExtend_oxArticleList
     */
    public function getActionArticles($sActionID, $iLimit = null)
    {
        $oArtList = oxNew('oxarticlelist');
        $oArtList->loadActionArticles($sActionID, $iLimit);

        return $oArtList;
    }

    /**
     * @param string $sOxid
     * @return bool|string
     */
    public function getActionTitle($sOxid)
    {
        $oDB  = oxDB::getDb();
        $aRes = $oDB->Execute("select oxtitle from oxactions where oxid = '".$sOxid."'");
        if ($aRes->fields && count($aRes->fields) > 0) {
            return $aRes->fields[0];
        }

        return false;
    }
}