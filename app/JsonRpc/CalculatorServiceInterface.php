<?php
declare(strict_types=1);
namespace App\JsonRpc;

/**
 * 定义一个 “契约”，即接口 CalculatorServiceInterface
 * Interface CalculatorServiceInterface
 * @package App\JsonRpc
 */
interface CalculatorServiceInterface{
    public function add(int $a, int $b): int;//返回int
}
/**
 * 服务有两种角色，一种是 服务提供者(ServiceProvider)，即为其它服务提供服务的服务，另一种是 服务消费者(ServiceConsumer)，即依赖其它服务的服务，一个服务既可能是 服务提供者(ServiceProvider)，同时又是 服务消费者(ServiceConsumer)。而两者直接可以通过 服务契约 来定义和约束接口的调用，在 Hyperf 里，可直接理解为就是一个 接口类(Interface)，通常来说这个接口类会同时出现在提供者和消费者下。
 */

