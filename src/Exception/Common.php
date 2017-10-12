<?php
/**
 * Created by PhpStorm.
 * User: 10000814
 * Date: 2017/10/12
 * Time: 18:11
 */
namespace Yima\Exception;

class Common extends \Exception
{

    public function __construct($code=0,$message='')
    {
        parent::__construct($message,$code);

        if(substr($this->file,0,strlen(LIB_PATH))==LIB_PATH)
        {
            $this->file = DIRECTORY_SEPARATOR.'library'.substr($this->file,strlen(LIB_PATH));
        }
        else if(substr($this->file,0,strlen(CFG_PATH))==CFG_PATH)
        {
            $this->file = DIRECTORY_SEPARATOR.'config'.substr($this->file,strlen(CFG_PATH));
        }
        else if(substr($this->file,0,strlen(INC_PATH))==INC_PATH)
        {
            $this->file = DIRECTORY_SEPARATOR.'include'.substr($this->file,strlen(INC_PATH));
        }
        else if(substr($this->file,0,strlen(APP_PATH))==APP_PATH)
        {
            $this->file = substr($this->file,strlen(APP_PATH));
        }


    }

}
