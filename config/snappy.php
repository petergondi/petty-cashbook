<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => 'C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe',
         //'binary' => 'C:\Users\user\Downloads\Programs\wkhtmltox-0.12.5-1.msvc2015-win64',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => '/usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
