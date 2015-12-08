<?php

interface DarwinPricing_Client_CacheInterface {

    /**
     * @param string $key
     * @return mixed|false
     */
    public function get($key);

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value);
}
