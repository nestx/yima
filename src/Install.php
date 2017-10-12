<?php
/**
 * Created by PhpStorm.
 * User: 10000814
 * Date: 2017/10/12
 * Time: 16:05
 */
namespace Yima;

class Install
{

    static public function run($appPath)
    {
        self::createFolder($appPath);

        self::createGitignore($appPath);

        self::createIndex($appPath);

        echo 'success';
    }

    static public function createFolder($appPath)
    {
        $folderList = array(
            $appPath.'\application',
            $appPath.'\application\controller',
            $appPath.'\application\view',
            $appPath.'\public',
            $appPath.'\public\image',
            $appPath.'\public\js',
            $appPath.'\public\css',
            $appPath.'\include',
            $appPath.'\include\config',
            $appPath.'\include\library',
            $appPath.'\include\library\Model',
            $appPath.'\include\library\Logic',
        );

        foreach($folderList as $folder)
        {
            if(is_dir($folder)) continue;
            else mkdir($folder);
        }

    }

    static public function createGitignore($appPath)
    {
        $file = $appPath.'\.gitignore';
        $data  = <<<END
/vendor/
composer.lock
END;
        if(!is_file($file)) file_put_contents($file,$data);
    }

    static public function createIndex($appPath)
    {
        $file = $appPath.'\index.php';
        $data  = <<<END
<?PHP

define('APP_PATH',__DIR__);
define('INC_PATH',APP_PATH.DIRECTORY_SEPARATOR.'include');
define('CFG_PATH',INC_PATH.DIRECTORY_SEPARATOR.'config');
define('LIB_PATH',INC_PATH.DIRECTORY_SEPARATOR.'library');

\$loader = require 'vendor/autoload.php';
\$loader->addPsr4('Nestx\\\\', LIB_PATH);

use Yima\Application;

Application::getApp()->run();

END;
        if(!is_file($file)) file_put_contents($file,$data);
    }

}