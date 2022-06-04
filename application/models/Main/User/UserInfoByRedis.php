<?php 
/**
 * @Copyright (C), 2013-, King.
 * @Name Login.php
 * @Author King
 * @Version Beta 1.0 
 * @Date 2021年8月24日下午7:30:41
 * @Description redis model
 * @Class List 1.
 * @Function List 1.
 * @History King 2021年8月24日下午7:30:41 第一次建立该文件
 *                 King 2021年8月24日下午7:30:41 修改
 * 
 */
namespace App\Model\Main\User;

use Tiny\MVC\Model\Redis;
use App\Model\Main\UserInfo;

/**
 * 
 * @author macbookpro
 *
 */
class UserInfoByRedis extends Redis
{
    /**
     * hashtable id for userinfo
     * @var string
     */
   const HAST_USERINFO_ID = 'h:userinfo:login';
   
    /**
     * dataId of redis
     * @var string
     */
    protected $dataId = 'redis';
    
    /**
     * @autowired
     * 
     * @var UserInfo
     */
    protected UserInfo $userinfoModel;
    
    /**
     * get userinfo
     * @return mixed
     */
    public function getUsers()
    {
        $users = $this->userinfoModel->getUsers();
        $ht = $this->createHashTable(self::HAST_USERINFO_ID);
        $ht->set($users);
        return $ht->getAll();
    }
}
?>