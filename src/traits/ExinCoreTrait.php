<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 19-2-27
 * Time: 下午3:51
 */

namespace Kurisu\ExinCore\traits;
use MessagePack\MessagePack;


trait ExinCoreTrait
{
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