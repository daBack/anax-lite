<?php

namespace back\Navbar;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */
class Navbar implements \Anax\Common\ConfigureInterface, \Anax\Common\AppInjectableInterface
{
     use \Anax\Common\ConfigureTrait, \Anax\Common\AppInjectableTrait;

    public function aLoop()
    {
        var_dump($this->config);
    }

    public function getHTML()
    {
        $navbar = $this->config;
        foreach ($navbar as $key => $value) {
            echo "<a class='navA' href=" . $key . ">" . $value . "</a>";
        }
    }
}
