<?php
class database {
    private $link=null;
    public function database(){
        if(!$this->link){
            $db_host='localhost';
            $db_username='root';
            $db_name='test';
            $db_password='';
            
            if($_SERVER['HTTP_HOST']=='192.168.1.11'){
                $db_host=$_SERVER['HTTP_HOST'];
                $db_username='dima';
                $db_password='dima123';                
            }           
            $this->link=mysql_connect($db_host,$db_username,$db_password) or die(mysql_error());
            mysql_select_db($sql,$this->link) or die(mysql_error());
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