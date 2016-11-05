<?php

class PMToDo extends DataObject
{

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Description' => 'HTMLText',
        'EstimatedMinutes' => 'Int',
        'Priority' => 'Enum("Critical,Urgent,ASAP,Anytime Soon", "Anytime Soon")',
    );

}
