<?php
namespace Namluu\Helloadmin\Block\Adminhtml;
class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Namluu_Helloadmin';
        $this->_controller = 'adminhtml_helloadmin';
        parent::_construct();
    }
}
