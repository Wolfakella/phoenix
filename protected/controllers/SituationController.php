<?php

Yii::import('application.models.SituationModel'); // связь контроллера с уравнением с моделью

class SituationController extends CController
{
	
	public $defaultAction = 'List';
	public $outputTable;

 public function ActionIndex() // действие по умолчанию
 {
   echo 'Hello world!'; // проверка подключения контроллера: выводит сообщение или нет
 }
 
 public function ActionList() // действие просмотра списка ситуаций (реализует Инна)
 {
 		$tmp = new SituationModel();
 		$this->outputTable=SituationModel::model()->findAll();
 		$this -> render('viewList');
 }
 
 public function ActionDelete() // действие удаления ситуации (реализует Марина)
 {
 
 }
 
 public function ActionEdit() // действие редактирования ситуации (реализует Дима)
 {
 
 }
 
 public function ActionSave() // действие добавления ситуации в БД (реализует Дима)
 {
 
 }
 
 public function ActionShow() // действие ???
 {
 
 }
 
}

?>
