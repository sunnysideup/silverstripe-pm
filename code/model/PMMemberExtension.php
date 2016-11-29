<?php

class PMMemberExtension extends DataExtension
{
    private static $db = array(
        'IsDeveloper' => 'Boolean'
    );


    private static $has_one = array(
        'Client' => 'PMClient'
    );
}
