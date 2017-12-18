<?php

class homepagecontroller extends http\controller
{
    public static function show()
    {
        $templateData['site_name'] = 'Project 2';
        self::getTemplate('homepage', $templateData);
    }
    public static function create()
    {

        print_r($_POST);
    }
}
?>