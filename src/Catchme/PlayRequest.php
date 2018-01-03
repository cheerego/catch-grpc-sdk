<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catchme.proto

namespace Catchme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>catchme.PlayRequest</code>
 */
class PlayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string app_key = 1;</code>
     */
    private $app_key = '';
    /**
     * Generated from protobuf field <code>string open_id = 2;</code>
     */
    private $open_id = '';
    /**
     * Generated from protobuf field <code>string room_id = 3;</code>
     */
    private $room_id = '';

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
     * Generated from protobuf field <code>string open_id = 2;</code>
     * @return string
     */
    public function getOpenId()
    {
        return $this->open_id;
    }

    /**
     * Generated from protobuf field <code>string open_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->open_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string room_id = 3;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>string room_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_id = $var;

        return $this;
    }

}

