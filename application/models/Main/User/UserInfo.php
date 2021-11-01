<?php
/**
 * @Copyright (C), 2013-, King.
 * @Name UserInfo.php
 * @Author King
 * @Version Beta 1.0 
 * @Date 2021年8月24日下午7:27:26
 * @Description mysql.user
 * @Class List 1.
 * @Function List 1.
 * @History King 2021年8月24日下午7:27:26 第一次建立该文件
 *                 King 2021年8月24日下午7:27:26 修改
 * 
 */
namespace App\Model\Main\User;

use Tiny\MVC\Model\Db;

/**
 * db model mysql.user
 * @package App.Model.Main.User
 *
 */
class UserInfo extends Db
{

    /**
     * dataid for db write
     * @var string
     */
    protected $_dataId = "default";
    
    /**
     * dataid for db read
     * @var string
     */
    protected $_readId = 'default_r';
    
    /**
     * get mysql users
     * @return array
     */
    public function getUsers()
    {
        return  $this->fetchall('SELECT host,user FROM :0t WHERE :1', 'user', "user='root'");
    }
}
?>