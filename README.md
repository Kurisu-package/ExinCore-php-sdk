# ExinCore-php-sdk

![](https://img.shields.io/badge/Mixin-Network-2995f2.svg?style=for-the-badge&colorA=1cc2fd&longCache=true&logo=data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI0NSAyNDAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDI0NSAyNDA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDojRkZGRkZGO30KPC9zdHlsZT4KPGc+Cgk8Zz4KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjI3LjEsMzMuM2wtMzYuMywxNi4xYy0yLjIsMS4yLTMuNSwzLjUtMy41LDUuOXYxMjkuOGMwLDIuNSwxLjQsNC44LDMuNiw1LjlsMzYuMywxNS43YzIuMywxLjIsNS0wLjQsNS0zJiMxMDsmIzk7JiM5OyYjOTtWMzYuM0MyMzIuMSwzMy43LDIyOS4zLDMyLjEsMjI3LjEsMzMuM3ogTTUzLjMsNDkuMmwtMzUuMi0xNmMtMi4zLTEuMi01LDAuNC01LDN2MTY3LjRjMCwyLjcsMyw0LjMsNS4yLDIuOWwzNS40LTE4LjcmIzEwOyYjOTsmIzk7JiM5O2MyLTEuMiwzLjItMy40LDMuMi01Ljd2LTEyN0M1Ni44LDUyLjcsNTUuNSw1MC40LDUzLjMsNDkuMnogTTE2My43LDkzLjVsLTM3LjktMjEuN2MtMi4xLTEuMi00LjctMS4yLTYuNywwTDgwLjUsOTMuMyYjMTA7JiM5OyYjOTsmIzk7Yy0yLjEsMS4yLTMuNCwzLjUtMy40LDUuOXY0NGMwLDIuNCwxLjMsNC43LDMuNCw1LjlsMzguNiwyMi4yYzIuMSwxLjIsNC43LDEuMiw2LjcsMGwzNy45LTIyYzIuMS0xLjIsMy40LTMuNSwzLjQtNS45di00NCYjMTA7JiM5OyYjOTsmIzk7QzE2Ny4xLDk2LjksMTY1LjgsOTQuNywxNjMuNyw5My41eiIvPgoJPC9nPgo8L2c+Cjwvc3ZnPg==)

------

![](https://img.shields.io/badge/php-~7.0.0-green.svg?longCache=true&style=flat-square&colorA=333333)
![](https://img.shields.io/github/languages/code-size/Kurisu-package/exincore-php-sdk.svg?style=flat-square&colorA=333333)
![](https://img.shields.io/github/license/Kurisu-package/exincore-php-sdk.svg?style=flat-square&colorA=333333)
![](https://img.shields.io/github/tag/Kurisu-package/exincore-php-sdk.svg?style=flat-square&colorA=333333)


## Requirement
1. `Composer`
2. `PHP` >= 7.0

## Installation

```bash
$ composer require kurisu/exincore-php-sdk -vvv
```

## 使用

### 例示

```php
// 配置文件格式例示
$config = [
    'mixin_id'      => '7000101633',
    'client_id'     => '982afd4e-92dd-4430-98cf-d308442ea04d',
    'client_secret' => 'b0a9adf1b358501b1fb6065c6292b09dbc675d5734225f86e0ec14a71d0fd38a',
    'pin'           => '125334',
    'pin_token'     => 'RzgyepFhLbMx+zLw6ogYzZ5k+kmlo8gQ2f4+1uwGMi1HgvMexGdFdeny0ffuBl7gXgPqi1GpUDPWPNrgAIjwGIFu+rHSre1G7JA5ET6tgIYoC+OI2dF0PmNK0qtkjK+qpGpSCt8nFbTfgyHjFENAp4hLZEIhuhzSPPmkkhXGlAU=',
    'session_id'    => '8a70b414-bdef-46f3-9738-186c1095da61',
    'private_key'   => <<<EOF
-----BEGIN RSA PRIVATE KEY-----
MIICXQIBAAKBgQCZAkpYA7eH38GbzIX653dxBAEanrSSdYbzQYIV/kKbULYSB43X
5hWfCFpNJ6FoIUjHAzrNyqJMvSS6LwAA+R4w5GYv8en1Ga1blKbziCMvZsRJ65bP
F2cPbPQUYNWZpZRsyFlMZCjVVytA1a+HWba5FzGBXiEEzd5BVo9truxGKQIDAQAB
AoGBAJHpVj4ipUWEgtvxKR9A1m1G9UqOaAJ2409cfBI/GwOD72y4GXL2rk2vKHYF
Qe3MN9vY353aC/YENV77bRSAfGF+lAuw3hQOFfMvKfRUmVaB5V4kEaF1+z9jPHwh
QcSpqyAsMClEnyMxbNrFih4tQGlGUydHI3xv1wK+53MjncwBAkEA98GvzldsLW7E
dhwXLba3KN/GvLZLcljLyHjctUxCU8EywD73UM1lJuayWvYdLfzFe0p9cDjvS8Gx
sbYg3eE2qQJBAJ4ZkqVbdCAyUBpjaIO9QzxsL77zCgayrQTvWv0QQgJputO7S2rs
i/iCmt1bZ3IAnfVnDUJfAaxSL6VU1T6Fw4ECQQCtUvrCx7YOMqeOWSh9+o04MxS9
gGpXnHcz0BnXW3orTcVLaMFr7cUN6eZsbDENswAUuI/4qlv+C4tcX6Wuk5fBAkA+
EggzB37GDTrJwXGNF0dId6kfLMgo7QlkwJxWcoWX8O66pfPsHMavYIdwlKw+Y+Og
Lz9TaX18rB+sp2u5SkcBAkBIsC/AJNhf1xILLAkkpycJ7rc864Y1JbmKk+I5fXid
vA4vKPqu2ZnD0O4YbGmciuTRPgeJqAt8bbHq/xOfL0lE
-----END RSA PRIVATE KEY-----
EOF
            ,  //import your private_key
];

$exincoreSdk = new \Kurisu\ExinCore\ExinCore($config);

// 1. 查询指定交易对的行情
$baseAsset     = 'c94ac88f-4671-3976-b60a-09064f1811e8';     // uuid
$exchangeAsset = '815b0b1a-2764-3736-8faa-42d694fa620a'; // uuid

$exincoreSdk->readExchangeList();                            // 查询全部交易对的行情
$exincoreSdk->readExchangeList($baseAsset);                  // 查询 baseAsset 为 $baseAsset 的交易对的行情
$exincoreSdk->readExchangeList($baseAsset, $exchangeAsset);  // 查询 baseAsset 为 $baseAsset , exchangeAsset 为 $exchangeAsset 的交易对的行情


// 2. 创建订单
$exincoreSdk->createOrder($baseAsset, $exchangeAsset, 1);
```

### 调用
|code|description
|---|---
|`MixinSDK::readExchangeList($baseAsset = null, $exchangeAsset = null)`| 查询指定交易对的行情
|`MixinSDK::createOrder($baseAsset, $exchangeAsset, $amount)`| 创建订单

## WARNING
有三个不太重要的可配置项
1. 是否需要返回原始响应体
    ```php
    $exincoreSdk = new \Kurisu\ExinCore\ExinCore($config);
    $exincoreSdk->setRaw(true);  // or false , 默认为 false
    ```

1. 如果 Mixin Network Api 返回错误码，是否抛出异常
    ```php
    $exincoreSdk = new \Kurisu\ExinCore\ExinCore($config);
    $exincoreSdk->setBoom(false);  // or true , 默认为 true
    ```

1. 设置网络请求超时时间
    ```php
    $exincoreSdk = new \Kurisu\ExinCore\ExinCore($config);
    $exincoreSdk->setTimeout(6);  //  默认为 10
    ```

## Alternatives

[[kurisu/laravel-exincore-sdk](https://github.com/Kurisu-package/laravel-exincore-sdk)]

## LICENSE

**MIT**
