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
 * @package    Zend_Filter
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @see Zend_Filter_Encrypt_Interface
 */
require_once 'Zend/Filter/Encrypt/Interface.php';

/** @see Zend_Crypt_Math */
require_once 'Zend/Crypt/Math.php';

/**
 * Encryption adapter for mcrypt
 *
 * @category   Zend
 * @package    Zend_Filter
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Filter_Encrypt_Mcrypt implements Zend_Filter_Encrypt_Interface
{
    /**
     * Definitions for encryption
     * array(
     *     'key' => encryption key string
     *     'algorithm' => algorithm to use
     *     'algorithm_directory' => directory where to find the algorithm
     *     'mode' => encryption mode to use
     *     'modedirectory' => directory where to find the mode
     * )
     */
    protected $_encryption = [
        'key' => 'ZendFramework',
        'algorithm' => 'blowfish',
        'algorithm_directory' => '',
        'mode' => 'cbc',
        'mode_directory' => '',
        'vector' => null,
        'salt' => false
    ];

    /**
     * Internal compression
     *
     * @var array
     */
    protected $_compression;

    protected static $_srandCalled = false;

    /**
     * Class constructor
     *
     * @param string|array|Zend_Config $options Cryption Options
     */
    public function __construct($options)
    {
        throw new Zend_Filter_Exception('This filter is deprecated, use openssl extension');
    }

    public function encrypt($value)
    {
        // TODO: Implement encrypt() method.
    }

    public function decrypt($value)
    {
        // TODO: Implement decrypt() method.
    }
}
