<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: face.proto

namespace App\Grpc\Face_recog_package;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;////////////////////////////////////////////////////////////  响应数据定义详情  ///////////////////////////////////////////////////////////////////////////
 * 检测结果
 *
 * Generated from protobuf message <code>face_recog_package.FaceServDetectResult</code>
 */
class FaceServDetectResult extends \Google\Protobuf\Internal\Message
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
     * 检测到的一个或者多人人脸
     *
     * Generated from protobuf field <code>repeated .face_recog_package.DetResult ret_dets = 3;</code>
     */
    private $ret_dets;
    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 6;</code>
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
     *     @type \Face_recog_package\DetResult[]|\Google\Protobuf\Internal\RepeatedField $ret_dets
     *           检测到的一个或者多人人脸
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
     * 检测到的一个或者多人人脸
     *
     * Generated from protobuf field <code>repeated .face_recog_package.DetResult ret_dets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRetDets()
    {
        return $this->ret_dets;
    }

    /**
     * 检测到的一个或者多人人脸
     *
     * Generated from protobuf field <code>repeated .face_recog_package.DetResult ret_dets = 3;</code>
     * @param \Face_recog_package\DetResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRetDets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Face_recog_package\DetResult::class);
        $this->ret_dets = $arr;

        return $this;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 6;</code>
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 6;</code>
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

