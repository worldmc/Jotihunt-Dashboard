<?php

class OpdrachtController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View->render('opdracht/index');
    }

    public function latest() {
        $this->View->render('opdracht/opdracht', array(
            'data' => false,
        ));
    }

    public function id($id){
        $this->View->render('opdracht/opdracht', array(
            'data' => false,
        ));
    }
}
