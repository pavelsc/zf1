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
 * @package    Zend_Serializer
 * @subpackage Adapter
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/** @see Zend_Serializer_Adapter_AdapterAbstract */
require_once 'Zend/Serializer/Adapter/AdapterAbstract.php';

/** @see Zend_Xml_Security */
require_once 'Zend/Xml/Security.php';

/** @see Zend_Xml_Exception */
require_once 'Zend/Xml/Exception.php';

/**
 * @link       http://www.infoloom.com/gcaconfs/WEB/chicago98/simeonov.HTM
 * @link       http://en.wikipedia.org/wiki/WDDX
 * @category   Zend
 * @package    Zend_Serializer
 * @subpackage Adapter
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @deprecated Please use JSON
 */
class Zend_Serializer_Adapter_Wddx extends Zend_Serializer_Adapter_AdapterAbstract
{
    /**
     * @var array Default options
     */
    protected $_options = [
        'comment' => null,
    ];

    /**
     * Constructor
     *
     * @param array $opts
     * @return void
     * @throws Zend_Serializer_Exception if wddx extension not found
     */
    public function __construct($opts = [])
    {
        throw new Zend_Serializer_Exception('PHP extension "wddx" is deprecated, please use JSON instead');
    }


    public function serialize($value, array $options = [])
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize($serialized, array $options = [])
    {
        // TODO: Implement unserialize() method.
    }
}
