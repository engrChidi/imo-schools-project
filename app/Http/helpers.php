<?php
    /**
     * Created by PhpStorm.
     * User: Oluyemi
     * Date: 5/17/17
     * Time: 1:13 PM
     */
    /**
     * Function to format date
     *
     * @param $date
     * @return bool|string
     */
    function formatDate($date){
        return date('jS M Y', strtotime($date));
    }

    /**
     *  Format date for human being
     * @param $date
     * @return string
     */
    function dateForHumans($date){
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }