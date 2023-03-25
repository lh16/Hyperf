<?php
declare(strict_types=1);
namespace App\JsonRpcClient;

use Hyperf\RpcClient\AbstractServiceClient;
use Hyperf\RpcClient\Exception\RequestException;

class CalculatorServiceConsumer extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     */
    //protected string $serviceName = 'CalculatorService';//版本兼容
    protected  $serviceName = 'CalculatorService';

    /**
     * 定义对应服务提供者的服务协议
     */
    //protected string $protocol = 'jsonrpc-http';
    protected  $protocol = 'jsonrpc-http';

    public function add(int $a, int $b): int
    {

        $rt = $this->__request(__FUNCTION__, compact('a', 'b'));
        //throw new RequestException('debug:'.__FUNCTION__.json_encode($rt));
        return $rt;

    }
}