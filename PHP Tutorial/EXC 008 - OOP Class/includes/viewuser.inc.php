<?php

class ViewUser extends User 
{
    public function showAllUsers()
    {
        $datas = $this->getAllUsers();
        foreach($datas as $data)
        {
            echo "User ID  : ".$data['user_uid']."<br>";
            echo "Password : ".$data['user_pwd']."<br>";
        }
    }
}
