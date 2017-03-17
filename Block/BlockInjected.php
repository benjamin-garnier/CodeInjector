<?php
namespace Ethos\CodeInjector\Block;

use Magento\Framework\View\Element\Template;


class BlockInjected extends \Magento\Framework\View\Element\Template
{
    private $_config = array();

    /**
     * @return mixed
     */
    public function getConfig()
    {
        $enable =$this->_scopeConfig->getValue('codeinjector/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $code = $this->_scopeConfig->getValue('codeinjector/general/code', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $position =$this->_scopeConfig->getValue('codeinjector/general/position', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        $this->_config += ["enable" => $enable];
        $this->_config += ["code" => $code];
        $this->_config += ["position" => $position];

        return $this->_config;
    }

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\ResourceConnection $resource,
        array $data = []
    )
    {
        $this->_resource = $resource;

        parent::__construct(
            $context,
            $data
        );
    }

}