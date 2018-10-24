<?php
/**
 * Created by PhpStorm.
 * User: Maksimka
 * Date: 23.09.2018
 * Time: 21:38
 */

namespace App\Helpers;


class ConfigWrite
{

    private $pathToConfig;
    private $configArray;
    private $indexName;
    private $indexDesc;
    private $indexTimer;

    public function __construct()
    {
        $this->pathToConfig = $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
        $this->configArray = file($this->pathToConfig);

        foreach ($this->configArray as $key=>$value){
            if(strpos($value, '$siteName')){
                $this->indexName = $key;
            }
            if(strpos($value, '$siteDescription')){
                $this->indexDesc = $key;
            }
            if(strpos($value, '$timer')){
                $this->indexTimer = $key;
            }
        }
    }


    public function setSiteName($name){
        $this->configArray[$this->indexName] = "    static public \$siteName             = '$name';\n";
    }

    public function setSiteDesc($description){
        $this->configArray[$this->indexDesc] = "    static public \$siteDescription         = '$description';\n";
    }

    public function setTimer($day){
        $time = time() + $day*24*60*60;
        $this->configArray[$this->indexTimer] = "    static public \$timer                = '$time';\n";
    }

    public function write(){
        file_put_contents($this->pathToConfig, $this->configArray);
    }
}