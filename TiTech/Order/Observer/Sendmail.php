<?php
 
namespace TiTech\Order\Observer;
 
use Magento\Framework\ObjectManager\ObjectManager;
 
class Sendmail implements \Magento\Framework\Event\ObserverInterface {
 
    /** @var \Magento\Framework\Logger\Monolog */
    protected $_logger;
    
    /**
     * @var \Magento\Framework\ObjectManager\ObjectManager
     */
    protected $_objectManager;
    protected $_orderFactory;    
    protected $_checkoutSession;
    protected $_orderSender;
    
    public function __construct(        
        \Psr\Log\LoggerInterface $loggerInterface,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender,
        \Magento\Framework\ObjectManager\ObjectManager $objectManager
    ) {
        $this->_logger = $loggerInterface;
        $this->_objectManager = $objectManager;        
        $this->_orderFactory = $orderFactory;
        $this->_checkoutSession = $checkoutSession;      
        $this->_orderSender = $orderSender;  
    }
 
    /**
     * This is the method that fires when the event runs.
     *
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer ) {        
        
        // $orderIds = $observer->getEvent()->getOrderIds();

        //   $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/logfile.log');
        //     $logger = new \Zend\Log\Logger();
        //     $logger->addWriter($writer);
        //     $logger->info('Simple Text Log'); // Simple Text Log
            //$logger->info('Array Log'.print_r($myArrayVar, true)); // Array Log

        // exit;

        echo "<p style='color:green;'>checkout success observer triggered</p>";

         exit;
        
        
        // if (count($orderIds)) {
        //     $this->_checkoutSession->setForceOrderMailSentOnSuccess(true);
        //     $order = $this->_orderFactory->create()->load($orderIds[0]);
        //     $this->_orderSender->send($order, true);
            
        // }
    }
}