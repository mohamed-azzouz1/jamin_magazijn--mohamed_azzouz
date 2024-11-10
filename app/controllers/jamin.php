<?php

class jamin extends BaseController
{

    public function index()
    {
        /**
         * Met het $data-array geef ik informatie mee vanuit de controller
         * naar de view
         */
        $data = [
            'title' => 'Dit is de magazijn'
        ];

        /**
         * Met de view-method uit de BaseController-class roep je de
         * view aan en geef je de informatie uit het $data-array mee aan
         * de view
         */
        $this->view('jamin/index', $data);
    }

}