<?php
declare(strict_types=1);
namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * Class CalculatorService
 * @package App\JsonRpc
 * @RpcService(name="CaculatorService", protocol="jsonrpc-http", server="jsonrpc-http")
 */
#[RpcService(name:"CalculatorService",protocol:"jsonrpc-http",server:"jsonrpc-http")]
class CalculatorService implements CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function add(int $a, int $b): int
    {   //这里的server值 与server 文件内的值  服务名称对应，意为使用该服务类 支撑服务逻辑
        // 这里是服务方法的具体实现
        return $a + $b;
    }
}

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性（目前仅支持 jsonrpc 和 jsonrpc-http 协议发布到服务中心去，其它协议尚未实现服务注册）
 *
 * 使用配置中心要自己先安装，官方文档并未说明。如安装consul  https://www.jianshu.com/p/591ff69fe5e7
 * publishTo: "consul"
 *
 * 其他微服务基础支撑参考：https://blog.csdn.net/weixin_40670060/article/details/109582821
 */