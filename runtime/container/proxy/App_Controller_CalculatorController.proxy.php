<?php

declare (strict_types=1);
/**
 * 调试CalculatorService
 */
namespace App\Controller;

use Hyperf\Utils\ApplicationContext;
use App\JsonRpcClient\CalculatorServiceInterface;
use Hyperf\Di\Annotation\Inject;
//注解依赖注入
//use App\JsonRpc\MathValue;
class CalculatorController extends AbstractController
{
    use \Hyperf\Di\Aop\ProxyTrait;
    use \Hyperf\Di\Aop\PropertyHandlerTrait;
    function __construct()
    {
        if (method_exists(parent::class, '__construct')) {
            parent::__construct(...func_get_args());
        }
        $this->__handlePropertyHandler(__CLASS__);
    }
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
    function add()
    {
        $client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);
        //var_dump(CalculatorServiceInterface::class);die;
        $result = $client->add(1, 2);
        var_dump($result);
    }
}