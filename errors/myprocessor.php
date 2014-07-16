<?php
require_once 'processor.php';
class My_Error_Processor extends Error_Processor
{
    /**
     * Process 503 error
    */
    public function processHolding()
    {
        $this->pageTitle = 'Coming Soon!';
        $this->_sendHeaders(503);
        $this->_renderPage('holding.phtml');
    }

    /**
     * Render page
     */
    protected function _renderPage($template)
    {
        $baseTemplate = $this->_getTemplatePath('fullcontent.phtml');
        $contentTemplate = $this->_getTemplatePath($template);

        if ($baseTemplate && $contentTemplate) {
            require_once $baseTemplate;
        }
    }
}
