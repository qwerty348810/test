<?php
class database {
    private $link=null;
    
    public function database(){
        if(!$this->link){
            $db_host='localhost';
            $db_username='root';
            $db_name='test';
            $db_password='';
            
            if($_SERVER['HTTP_HOST']=='198.162.1.11'){
                $db_host=$_SERVER['HTTP_HOST'];
                $db_username='diam';
                $db_password='dima123';
            }
            $this->link=mysql_conect($db_host,$db_username,$db_password) or die(mysql_error());
            mysqk_select_db($db_name,$this->link);
        }
    }
    public function save($sql){
        mysql_query($sql,$this->link);
    }
     public function query($sql){
        $result=mysql_query($sql,$this->link);
        return $result;
    }
    
}
?>