<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 * @version   OXID eShop CE
 */

require_once 'oxerptype.php';

/**
 * article2category relation type subclass
 */
class oxERPType_Article2Category extends oxERPType
{

    /**
     * class constructor
     *
     * @return null
     */
    public function __construct()
    {
        parent::__construct();

        $this->_sTableName = 'oxobject2category';

        $this->_aKeyFieldList = array(
            'OXOBJECTID' => 'OXOBJECTID',
            'OXCATNID'   => 'OXCATNID',
            'OXSHOPID'   => 'OXSHOPID'
        );

        unset($this->_aKeyFieldList['OXSHOPID']);
    }
}
