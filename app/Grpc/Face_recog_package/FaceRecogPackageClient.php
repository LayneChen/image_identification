<?php
namespace App\Grpc\Face_recog_package;

class FaceRecogPackageClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     *
     * 方法名尽量和 (gprc 定义 Face_recog 服务)的方法一样
     * 用于请求和响应该服务
     */
    public function FaceServDetect(\Face_recog_package\FaceServRequestMsg $argument, $metadata=[], $options=[]){
        // (/FaceRecogService/FaceServDetct) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Face_recog_package\FaceServ1VS1Result) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/face_recog_package.FaceRecogService/FaceServDetect',
            $argument,
            ['\Face_recog_package\FaceServReplyMsg', 'decode'],
            $metadata, $options);
    }

    public function FaceServ1VS1(\Face_recog_package\FaceServRequestMsg $argument, $metadata=[], $options=[]){
        // (/FaceRecogService/FaceServDetct) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Face_recog_package\FaceServ1VS1Result) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/face_recog_package.FaceRecogService/FaceServ1VS1',
            $argument,
            ['\Face_recog_package\FaceServReplyMsg', 'decode'],
            $metadata, $options);
    }


    public function FaceServRegister(\Face_recog_package\FaceServRequestMsg $argument, $metadata=[], $options=[]){
        // (/FaceRecogService/FaceServDetct) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Face_recog_package\FaceServ1VS1Result) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/face_recog_package.FaceRecogService/FaceServRegister',
            $argument,
            ['\Face_recog_package\FaceServReplyMsg', 'decode'],
            $metadata, $options);
    }

    public function FaceServ1VSN(\Face_recog_package\FaceServRequestMsg $argument, $metadata=[], $options=[]){
        // (/FaceRecogService/FaceServDetct) 是请求服务端那个服务和方法，基本和 proto 文件定义一样
        // (\Face_recog_package\FaceServ1VS1Result) 是响应信息（那个类），基本和 proto 文件定义一样
        return $this->_simpleRequest('/face_recog_package.FaceRecogService/FaceServ1VSN',
            $argument,
            ['\Face_recog_package\FaceServReplyMsg', 'decode'],
            $metadata, $options);
    }



}
