<?php
 return array( // çàäàåò íàñòðîéêè â êëàññå CWebApplication
       'name' => 'Проект Феникс',
       'defaultController' => 'Situation' ,
       'import' => array(
       		'application.models.SituationModel'
       		),
    'components'=>array(
        'db'=>array(
            'class'=>'CDbConnection',
            'connectionString'=>'mysql:host=localhost;dbname=phoenix',
            'username'=>'root',
            'password'=>'',
	    'charset'=>'utf8',
            'emulatePrepare'=>true,  // needed by some MySQL installations
        ),
    )
              );

?>
