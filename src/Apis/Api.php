<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 19-2-20
 * Time: 上午11:16
 */

namespace Kurisu\ExinCore\Apis;

use ExinOne\MixinSDK\MixinSDK;
use GuzzleHttp\Client;
use MessagePack\MessagePack;
use Ramsey\Uuid\Uuid;

class Api
{
    protected $httpClient;
    protected $config;
    protected $mixinSDK;


    /**
     * Api constructor.
     *
     * @param Client   $httpClient
     * @param array    $config
     * @param MixinSDK $mixinSDK
     */
    public function __construct(Client $httpClient, array $config, MixinSDK $mixinSDK)
    {
        $this->httpClient = $httpClient;
        $this->config     = $config;
        $this->mixinSDK   = $mixinSDK;
    }

    /**
     * @param $baseAsset
     * @param $exchangeAsset
     * @param $amount
     *
     * @return array
     */
    public function createOrder($baseAsset, $exchangeAsset, $amount): array
    {
        $memo = base64_encode(MessagePack::pack([
            'A' => Uuid::fromString($exchangeAsset)->getBytes(),
        ]));

        $res = $this->mixinSDK->wallet()->transfer($baseAsset, EXINCORE, null, $amount, $memo);

        return $res;
    }

    /**
     * @param null $baseAsset
     * @param null $exchangeAsset
     *
     * @return array
     */
    public function readExchangeList($baseAsset = null, $exchangeAsset = null): array
    {
        $response = $this->httpClient->get('?' . http_build_query([
                'base_asset'     => $baseAsset,
                'exchange_asset' => $exchangeAsset,
            ]));

        $content = $response->getBody()->getContents();

        return json_decode($content, true);
    }
}