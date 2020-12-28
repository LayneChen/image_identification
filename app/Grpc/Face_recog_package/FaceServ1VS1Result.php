<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: face.proto

namespace App\Grpc\Face_recog_package;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 1:1验证结果
 *
 * Generated from protobuf message <code>face_recog_package.FaceServ1VS1Result</code>
 */
class FaceServ1VS1Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     */
    private $ret_code = 0;
    /**
     * Generated from protobuf field <code>float score = 3;</code>
     */
    private $score = 0.0;
    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 4;</code>
     */
    private $userID = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type int $ret_code
     *           返回码， 成功为0,其他为非0
     *     @type float $score
     *     @type string $userID
     *            用户ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Face::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     * @return int
     */
    public function getRetCode()
    {
        return $this->ret_code;
    }

    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->ret_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float score = 3;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>float score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 4;</code>
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkString($var, True);
        $this->userID = $var;

        return $this;
    }

}

