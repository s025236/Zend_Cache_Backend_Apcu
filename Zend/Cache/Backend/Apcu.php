<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Cache
 * @subpackage Zend_Cache_Backend
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */


/**
 * @see Zend_Cache_Backend_Apc
 */
require_once 'Zend/Cache/Backend/Apc.php';

/**
 * @package    Zend_Cache
 * @subpackage Zend_Cache_Backend
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Cache_Backend_Apcu extends Zend_Cache_Backend_Apc
{
    /**
     * Constructor
     *
     * @param  array $options associative array of options
     * @throws Zend_Cache_Exception
     * @return void
     */
    public function __construct(array $options = array())
    {
        if (!extension_loaded('apcu')) {
            Zend_Cache::throwException('The apc extension must be loaded for using this backend !');
        }
        $parent = get_parent_class( get_parent_class($this) );
        $parent::__construct($options);
    }
}
