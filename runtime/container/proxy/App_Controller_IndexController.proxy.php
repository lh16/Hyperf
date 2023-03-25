<?php

declare (strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

class IndexController extends AbstractController
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
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf by lh');
        $method = $this->request->getMethod();
        return ['method' => $method, 'message' => "Hello {$user}."];
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