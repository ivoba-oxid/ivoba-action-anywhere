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
class IvobaActionEverywhere_actions_main extends IvobaActionEverywhere_actions_main_parent
{
    /**
     * Saves Promotions
     *
     * @return mixed
     */
    public function save()
    {
        $myConfig = $this->getConfig();

        $this->resetContentCache();

        $soxId = $this->getEditObjectId();
        $aParams = oxRegistry::getConfig()->getRequestParameter("editval");

        $oPromotion = oxNew("oxactions");
        if ($soxId != "-1") {
            $oPromotion->load($soxId);
        }
// allow to set a action id
//        else {
//            $aParams['oxactions__oxid'] = null;
//        }

        if (!$aParams['oxactions__oxactive']) {
            $aParams['oxactions__oxactive'] = 0;
        }

        $oPromotion->setLanguage(0);
        $oPromotion->assign($aParams);
        $oPromotion->setLanguage($this->_iEditLang);
        $oPromotion = oxRegistry::get("oxUtilsFile")->processFiles($oPromotion);
        $oPromotion->save();

        // set oxid if inserted
        $this->setEditObjectId($oPromotion->getId());
    }
}