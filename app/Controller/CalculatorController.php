<?php

declare(strict_types=1);
/**
 * 调试CalculatorService
 */
namespace App\Controller;

use Hyperf\Utils\ApplicationContext;
use App\JsonRpcClient\CalculatorServiceInterface;
use Hyperf\Di\Annotation\Inject;//注解依赖注入
//use App\JsonRpc\MathValue;

class CalculatorController extends AbstractController
{

    /**
     * Inject()
     * var CalculatorServiceInterface
     */
    //private $calculatorService;//依赖注入

    /**
     * 注解依赖注入的方式
     */
    /*function add2(){

        //$client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);

        $result = $this->calculatorService->add(1,2);

        var_dump($result);
    }*/

    /**
     * 官网的方式
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    function add(){

        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);
        //var_dump(CalculatorServiceInterface::class);die;

        $result = $client->add(1,2);

        var_dump($result);
    }


}

/**
 * root  root
 * ip address
 * 在项目根目录   php bin/hyperf.php start 或  nohup php bin/hyperf.php start &
 * 本机 curl 127.0.0.1:9501   宿主 nginx  192.168.1.109:80
 * CTRL + C 终止
 *
 *  curl 127.0.01:9501/Calculator/add
 *
 *{
"jsonrpc": "2.0",
"method": "/Calculator/add",
"params": {
"a" :1,
"b" : 2
},
"id":"1111",
"context":[]
}
 *
 * curl -X POST -H "Content-Type: application/json" --data "{\"jsonrpc\": \"2.0\", \"method\": \"/Calculator/add\", \"params\":[], \"id\":1,\"context\": []}" http://127.0.0.1:9504
 */
