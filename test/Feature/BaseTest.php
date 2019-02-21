<?php

namespace Tests\Feature;


use Kurisu\ExinCore\ExinCore;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public $exincore;

    public function __construct()
    {
        parent::__construct();
        $this->exincore = new ExinCore(require(__DIR__ . '/../key.php'));
    }

    public function test_it_can_test_api_createOrder()
    {


    }

    public function test_it_can_test_api_readExchangeList()
    {
        dd(
//            $this->exincore->readExchangeList(),
            $this->exincore->readExchangeList('c94ac88f-4671-3976-b60a-09064f1811e8'),
            $this->exincore->readExchangeList('c94ac88f-4671-3976-b60a-09064f1811e8', '815b0b1a-2764-3736-8faa-42d694fa620a')
        );
    }
}
