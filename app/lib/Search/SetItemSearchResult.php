<?php
/**
 *
 * SetItemSearchResult module.  Copyright 2015 Whirl-i-Gig (http://www.whirl-i-gig.com)
 * class for set item search handling
 *
 * @author Stefan Keidel <stefan@whirl-i-gig.com>
 * @copyright Copyright 2015 Whirl-i-Gig (http://www.whirl-i-gig.com)
 * @license http://www.gnu.org/copyleft/lesser.html
 * @package CA
 * @subpackage Core
 *
 * Disclaimer:  There are no doubt inefficiencies and bugs in this code; the
 * documentation leaves much to be desired. If you'd like to improve these
 * libraries please consider helping us develop this software.
 *
 * phpweblib is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY.
 *
 * This source code are free and modifiable under the terms of
 * GNU Lesser General Public License. (http://www.gnu.org/copyleft/lesser.html)
 *
 *
 */

include_once(__CA_LIB_DIR__ . "/Search/BaseSearchResult.php");

class SetItemSearchResult extends BaseSearchResult
{
    # -------------------------------------
    /**
     * Name of table for this type of search subject
     */
    protected $ops_table_name = 'ca_set_items';
    # -------------------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
    # -------------------------------------
}

?>
