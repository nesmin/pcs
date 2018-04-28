<?php namespace Project\Controllers;

class Initialize extends Controller
{
    public function main(String $params = NULL)
    {
        Theme::active('Default');

        Masterpage::title(ucfirst(CURRENT_CONTROLLER) . " | PCS" )
                  ->headPage('sections/head')
                  ->bodyPage('sections/body')
                  ->meta([
                    'name:viewport' => 'width=device-width, initial-scale=1'
                  ]);

    }
}
