<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace CatchMe\Core\Greeter;

/**
 */
class GreeterClient extends \Grpc\BaseStub implements Greeter
{
  /**
   * @param string $hostname hostname
   * @param array $opts channel options
   * @param \Grpc\Channel $channel (optional) re-use channel object
   */
  public function __construct($hostname, $opts, $channel = null)
  {
    parent::__construct($hostname, $opts, $channel);
  }

  /**
   * Sends a greeting
   * @param \CatchMe\Core\Greeter\HelloRequest $argument input argument
   * @param array $metadata metadata
   * @param array $options call options
   */
  public function SayHello(\CatchMe\Core\Greeter\HelloRequest $argument, $metadata = [], $options = []) : \CatchMe\Core\Greeter\HelloReply
  {
    return $this->_simpleRequest('/CatchMe.Core.Greeter.Greeter/SayHello', $argument, ['\CatchMe\Core\Greeter\HelloReply', 'decode'], $metadata, $options);
  }

}
