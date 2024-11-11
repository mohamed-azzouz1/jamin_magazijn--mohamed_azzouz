<?php

class jamin extends BaseController
{
    private $JaminModel;

    public function __construct()
    {
        $this->JaminModel = $this->model('MagazijnModel');
    }

    public function index()
    {
        /**
         * Met het $data-array geef ik informatie mee vanuit de controller
         * naar de view
         */
        $data = [
            'title' => 'overzicht Magazijn Jamin'
            ,'dataRows' => ''
            ,'message' => ''
            ,'messageColor' => ''
            ,'messageVisibility' => ''
        ];

        $jamin = $this->JaminModel->getMagazijn();

        if (is_null($jamin)) {
            $data['message'] = "Er is een fout opgetreden";
            $data['messageColor'] = "danger";
            $data['messageVisibility'] = "flex";
            $data['dataRows'] = NULL;

            header('Refresh:3; ' . URLROOT . '/homepages/index');
        } else {
            $data['dataRows'] = $jamin;
        }
        /**
         * Met de view-method uit de BaseController-class roep je de
         * view aan en geef je de informatie uit het $data-array mee aan
         * de view
         */
        $this->view('jamin/index', $data);
    }

    public function Leverantieinfo()
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

        $Leverantieinfo = $this->JaminModel->getLeverantieinfo();


        if (is_null($Leverantieinfo)) {
            $data['message'] = "Er is een fout opgetreden";
            $data['messageColor'] = "danger";
            $data['messageVisibility'] = "flex";
            $data['dataRows'] = NULL;

            header('Refresh:3; ' . URLROOT . '/homepages/index');
        } else {
            $data['dataRows'] = $Leverantieinfo;
        }

        /**
         * Met de view-method uit de BaseController-class wordt de view
         * aangeroepen met de informatie uit het $data-array
         */
        $this->view('jamin/Leverantieinfo', $data);
    }

}