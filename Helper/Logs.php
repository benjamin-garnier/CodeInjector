<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 13/02/2017
 * Time: 15:59
 */

namespace Ethos\CodeInjector\Helper;

class Logs extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @param object $array
     */
    public function info($array, $_file = "devel_toutelapeche_Ethos.log")
    {
        $writer = new \Zend\Log\Writer\Stream(BP . "/var/log/" . $_file);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(gettype($array) == "string" ? $array : print_r($array, true));
    }

    /**
     * @param object $array
     */
    public function error($array, $_file = "devel_toutelapeche_Ethos.log")
    {
        $writer = new \Zend\Log\Writer\Stream(BP . "/var/log/" . $_file);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->error(gettype($array) == "string" ? $array : print_r($array, true));
    }
}