<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\Tea\Model;

class StopGatewayRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dg-nmz841r7b681****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example dg-node-hvsGB7qVCaaW****-v-0
     *
     * @var string
     */
    public $gatewayInstanceId;
    protected $_name = [
        'gatewayId'         => 'GatewayId',
        'gatewayInstanceId' => 'GatewayInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayInstanceId) {
            $res['GatewayInstanceId'] = $this->gatewayInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayInstanceId'])) {
            $model->gatewayInstanceId = $map['GatewayInstanceId'];
        }

        return $model;
    }
}
