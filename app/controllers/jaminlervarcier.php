
<?php

class jaminlervarcier extends BaseController
{

    public function index()
    {
        /**
         * Het $data-array geeft informatie mee aan de view-pagina
         */
        $data = [
            'title' => 'overzicht Magazijn Jamin'
            ,'dataRows' => ''
            ,'message' => ''
            ,'messageColor' => ''
            ,'messageVisibility' => ''
        ];

        /**
         * Met de view-method uit de BaseController-class wordt de view
         * aangeroepen met de informatie uit het $data-array
         */
        $this->view('jamin/Leverantieinfo', $data);
    }
}