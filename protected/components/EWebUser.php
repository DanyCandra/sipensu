<?php
class EWebUser extends CWebUser{
    protected $_model;
    protected function loadUser()
    {
        if($this->_model===null){
           $this->_model= Pengguna::model()->findByPk($this->id); 
        }
        return $this->_model;
    }

    function getNamagroups()
    {
        $user=$this->loadUser();
        if($user)
            return $user->iDGROUPS->NAMAGROUPS;
        return 100;
    }

    function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->IDGROUPS;
        return 100;
    }
    function getSuperAdmin()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==1;
    }   
    function getIsAdmin()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==2;
    }
    function getIsUser()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==3;
    }
    
     function getIsAdmind3()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==4;
    }
    
    function getIsDosen()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==5;
    }
    
    function getIsMahasiswa()
    {
        $user=$this->loadUser(Yii::app()->user->id);
        return intval($user->IDGROUPS)==6;
    }
    
    function getNama()
   {
       $user=  $this->loadUser();
       if($user)
           return $user->USERNAME;
       return 100;
   }
    
    
}