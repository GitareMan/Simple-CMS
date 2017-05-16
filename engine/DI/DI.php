<?php

namespace Engine\DI;

class DI
{
  /**
   * @var array
   */
    private $container = [];

  /**
   * @param $key
   * @param $value
   * @return $this
   */
    public function set($key,$value)
    {
        $this->container[$key] = $value;

        return $this;
    }

  /**
   * @param $key
   * @return mixed
   */
    public function get($key)
    {
         return $this->container[$key];
    }

    public function has($key)
    {
        return isset($tis->container[$key]) ? $this->container[$key] : null;
    }
}