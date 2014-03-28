<?php


 Class SituationModel extends CActiveRecord // ��������� ������ � ������ ������
{
  public $Id; // порядковый номер
  public $Title; // заголовок ситуации
  public $Text; // содержание ситуации
  public $Roles; // роли и интересы
  public $Date; // дата
  
  public static function model($className=__CLASS__) /*��� ��������� �������, ������� ������ ���� ������ �� ���������*/
  {
  	return parent::model($className);
  }
  
  public function tableName()
  {
  	 return 'Situation'; /*���� ������������� ��� ������, ����� ������� ��*/
  }
  
}

?>
