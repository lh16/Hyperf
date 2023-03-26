<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [//注解依赖注入
    'InnerHttp' => Hyperf\HttpServer\Server::class,
    //App\JsonRpcClient\CalculatorServiceInterface::class => App\JsonRpc\CalculatorService::class,
    App\JsonRpcClient\CalculatorServiceInterface::class => App\JsonRpcClient\CalculatorServiceConsumer::class,
    //App\JsonRpc\CalculatorServiceInterface::class => App\JsonRpc\CalculatorServiceConsumer::class,//支撑消费者类，这样便可以通过注解依赖注入的方式 注入 CalculatorServiceInterface 接口来使用客户端了。
];
