<?php

class CustomSession implements SessionHandlerInterface
{
    private $link;
    public function open($save_path, $name)
    {
        $this->link = mysqli_connect('localhost','root','');
        mysqli_set_charset($this->link,'utf8');
        mysql_select_db($this->link,'database');
        if($this->link){
            return true;
        }
    }

    public function close()
    {
        mysqli_close($this->link);
        return true;
    }

    public function read($session_id)
    {
        $id = mysqli_escape_string($session_id);
        $sql = "SELECT * FROM session WHERE session_id=`{$session_id}`";
        $result = mysqli_query($this->link,$sql);
        if(mysqli_num_rows($result)==1){
            return mysqli_fetch_assoc($result['session_data']);
        }
        return '';
    }

    public function write($session_id, $session_data)
    {
        $newExp = time() + $this->lifetime;
        $session_id = mysqli_escape_string($this->link,$session_id);
        $sql = "SELECT * FROM session WHERE session_id=`{$session_id}`";
        $result = mysqli_query($this->link,$sql);
        if(mysqli_num_rows($result)==1){
            $sql = "UPDATE sessions SET session_expire=`{$newExp}`,session_data=`{$session_id}`";
        }else{
            $sql = "INSERT sessions VALUES(`{$session_id}`,`{$session_data}`,`{$newExp}`)";
        }
        mysqli_query($this->link,$sql);
        return mysqli_affected_rows($this->link)==1;
    }

    public function destroy($session_id)
    {
        $session_id = mysqli_escape_string($this->link,$session_id);
        $sql = "DELETE FEOM session WHERE session_id=`{$session_id}`";
        mysqli_query($this->link,$sql);
        return mysqli_affected_rows($this->link)==1;
    }

    public function gc($maxlifetime)
    {
        $sql = "DELETE FROM sesssions WHERE session_expires<".time();
        mysqli_query($this->link,$sql);
        if(mysqli_affected_rows($this->link)>0){
            return true;
        }
        return false;
    }
}