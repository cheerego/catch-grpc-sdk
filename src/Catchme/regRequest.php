<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catchme.proto

namespace Catchme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>catchme.regRequest</code>
 */
class regRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string app_id = 1;</code>
     */
    private $app_id = '';
    /**
     * Generated from protobuf field <code>string app_uid = 2;</code>
     */
    private $app_uid = '';
    /**
     * Generated from protobuf field <code>string gender = 3;</code>
     */
    private $gender = '';
    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     */
    private $nickname = '';

    public function __construct() {
        \GPBMetadata\Catchme::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string app_id = 1;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_uid = 2;</code>
     * @return string
     */
    public function getAppUid()
    {
        return $this->app_uid;
    }

    /**
     * Generated from protobuf field <code>string app_uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gender = 3;</code>
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>string gender = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkString($var, True);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

}

