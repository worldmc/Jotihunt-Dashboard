<?php

class NotifyController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function lastnotify()
    {
        //NotifyModel::lastNotify();
        $this->View->renderJSON(false);
    }

    public function history($limit, $rangeFrom, $rangeTo){
        //$this->View->renderJSON(NotifyModel::History($limit, $rangeFrom, $rangeTo));
    }

    public function read() {

    }
}
