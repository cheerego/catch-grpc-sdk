<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catchme.proto

namespace Catchme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>catchme.LoginRequest</code>
 */
class LoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string app_key = 1;</code>
     */
    private $app_key = '';
    /**
     * Generated from protobuf field <code>int32 uid = 2;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     */
    private $nickname = '';
    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     */
    private $avatar = '';
    /**
     * Generated from protobuf field <code>.catchme.LoginRequest.Gender gender = 5;</code>
     */
    private $gender = 0;
    /**
     * Generated from protobuf field <code>string mobile = 6;</code>
     */
    private $mobile = '';

    public function __construct() {
        \GPBMetadata\Catchme::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string app_key = 1;</code>
     * @return string
     */
    public function getAppKey()
    {
        return $this->app_key;
    }

    /**
     * Generated from protobuf field <code>string app_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 2;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Generated from protobuf field <code>string avatar = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.catchme.LoginRequest.Gender gender = 5;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.catchme.LoginRequest.Gender gender = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Catchme\LoginRequest_Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mobile = 6;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

}

