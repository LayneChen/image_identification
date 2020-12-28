<?php

namespace App\Http\Service;

use App\Grpc\Face_recog_package\FaceRecogPackageClient;
use App\Grpc\Face_recog_package\FaceServ1VS1Request;
use App\Grpc\Face_recog_package\FaceServ1VSNRequest;
use App\Grpc\Face_recog_package\FaceServDetectRequest;
use App\Grpc\Face_recog_package\FaceServRegisterRequest;
use App\Grpc\Face_recog_package\FaceServRequestMsg;
use Grpc\ChannelCredentials;

class GrpcService{

    private $client;

    public function __construct()
    {
        $this->client = new FaceRecogPackageClient(env('GRPC_SERVER_URL','127.0.0.1:8787'), [
            'credentials' => ChannelCredentials::createInsecure()
        ]);
    }

    /**
     * 检测
     * @param $requestData
     * @return mixed
     */
    public function FaceServDetect($requestData){
        $request = new FaceServDetectRequest();
        $request->setUserID($requestData['userId']);
        $request->setMessage($requestData['message']);
        $request->setImage($requestData['image']);
        $requestMsg = new FaceServRequestMsg();
        $requestMsg->setType('1');
        $requestMsg->setReqDet($request);
        $get =  $this->client->FaceServDetect($requestMsg)->wait();
        list($reply, $status) = $get;
        $data['type'] = $reply->getType();
        $data['message'] = $reply->getRetDet()->getMessage();
        $data['retCode'] = $reply->getRetDet()->getRetCode();
        $data['userId'] = $reply->getRetDet()->getUserID();
        return $data;
    }

    /**
     * 1:1验证
     * @param $requestData
     * @return mixed
     */
    public function FaceServ1VS1($requestData){
        $request = new FaceServ1VS1Request();
        $request->setUserID($requestData['userId']);
        $request->setMessage($requestData['message']);
        $request->setImage1($requestData['image1']);
        $request->setImage2($requestData['image2']);
        $requestMsg = new FaceServRequestMsg();
        $requestMsg->setType('2');
        $requestMsg->setReq1Vs1($request);
        $get = $this->client->FaceServ1VS1($requestMsg)->wait();
        list($reply, $status) = $get;
        $data['type'] = $reply->getType();
        $data['message'] = $reply->getRet1Vs1()->getMessage();
        $data['retCode'] = $reply->getRet1Vs1()->getRetCode();
        $data['userId'] = $reply->getRet1Vs1()->getUserID();
        return $data;
    }

    /**
     * 注册
     * @param $requestData
     * @return mixed
     */
    public function FaceServRegister($requestData){
        $request = new FaceServRegisterRequest();
        $request->setUserID($requestData['userId']);
        $request->setMessage($requestData['message']);
        $request->setImage($requestData['image']);
        $requestMsg = new FaceServRequestMsg();
        $requestMsg->setType('3');
        $requestMsg->setReqRegister($request);
        $get = $this->client->FaceServRegister($requestMsg)->wait();
        list($reply, $status) = $get;
        $data['type'] = $reply->getType();
        $data['message'] = $reply->getRetRegister()->getMessage();
        $data['retCode'] = $reply->getRetRegister()->getRetCode();
        $data['userId'] = $reply->getRetRegister()->getUserID();
        return $data;
    }

    /**
     * 1:N
     * @param $requestData
     * @return mixed
     */
    public function FaceServ1VSN($requestData){
        $request = new FaceServ1VSNRequest();
        $request->setUserID($requestData['userId']);
        $request->setMessage($requestData['message']);
        $request->setImage($requestData['image']);
        $request->setGroupID($requestData['groupId']);
        $requestMsg = new FaceServRequestMsg();
        $requestMsg->setType('4');
        $requestMsg->setReq1VsN($request);
        $get = $this->client->FaceServ1VSN($requestMsg)->wait();
        list($reply, $status) = $get;
        $data['type'] = $reply->getType();
        $data['message'] = $reply->getRet1VsN()->getMessage();
        $data['retCode'] = $reply->getRet1VsN()->getRetCode();
        $data['userId'] = $reply->getRet1VsN()->getUserID();
        $data['groupID'] = $reply->getRet1VsN()->getGroupID();
        return $data;

    }

}
