<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 19-2-19
 * Time: 下午5:40
 */

namespace Kurisu\ExinCore;


use ExinOne\MixinSDK\MixinSDK;
use GuzzleHttp\Client;
use Kurisu\ExinCore\Apis\Api;
use Kurisu\ExinCore\Exceptions\ExinCoreExceptions;
use MessagePack\MessagePack;
use Ramsey\Uuid\Uuid;

/**
 * @see \ExinCore\Apis\Api
 * @method array createOrder($baseAsset, $exchangeAsset, $amount): array
 * @method array readExchangeList($baseAssetUuid = null, $exchangeAssetUuid = null): array
 */
class ExinCore
{

    public $httpClient;
    protected $config;

    protected $switches;
    public $api;
    protected $mixinAccountConfig;
    protected $mixinSDK;


    /**
     * ExinCore constructor.
     *
     * @param array $mixinAccountConfig
     */
    public function __construct(array $mixinAccountConfig)
    {
        $this->config             = require(__DIR__ . '/../config/config.php');
        $this->httpClient         = new Client([
            'base_uri' => $this->config['base_uri'],
            'timeout'  => $this->config['switches']['timeout'],
            'version'  => 1.3
        ]);
        $this->switches           = &$this->config['switches'];
        $this->mixinAccountConfig = $mixinAccountConfig;
        $this->mixinSDK           = new MixinSDK($this->mixinAccountConfig);

        $this->api = new Api($this->httpClient, $this->config, $this->mixinSDK);
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     * @throws ExinCoreExceptions
     */
    public function __call($name, $arguments)
    {
        // 请求 Exincore/Apis/Api 中的方法
        $res = call_user_func_array([$this->api, $name], $arguments);

        // 如果失败则根据 switches 中的配置进行

        if (!$this->switches['boom'] || $this->switches['raw']) {
            return $res;
        } else {
            $this->boomRoom($res);
            return $res['data'];
        }

    }

    /**
     * @param $res
     *
     * @throws ExinCoreExceptions
     */
    protected function boomRoom($res)
    {
        if (($res['message'] ?? 'a') != '' && ($res['code'] ?? 'a') != 0) {
            throw new ExinCoreExceptions($res['message'], $res['code']);
        }
    }

    /**
     * @param bool $isRaw
     *
     * @return bool
     */
    public function setRaw(bool $isRaw)
    {
        $this->switches['raw'] = $isRaw;
        return true;
    }

    /**
     * @param bool $isBoom
     *
     * @return bool
     */
    public function setBoom(bool $isBoom)
    {
        $this->switches['boom'] = $isBoom;
        return true;
    }

    /**
     * @param int $timeout
     *
     * @return bool
     */
    public function setTimeout(int $timeout)
    {
        $this->switches['timeout'] = $timeout;
        return true;
    }

    /**
     * @return mixed
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @return array
     */
    public function getMixinAccountConfig(): array
    {
        return $this->mixinAccountConfig;
    }

    /**
     * @return MixinSDK
     */
    public function getMixinSDK(): MixinSDK
    {
        return $this->mixinSDK;
    }

    /**
     * @param string $memo
     *
     * @return mixed
     */
    public function decodeExinCoreMemo(string $memo)
    {
        return MessagePack::unpack(base64_decode($memo));
    }

}
