<?php
/**
 * run with command
 * php start.php start
 */
require_once __DIR__."/yii_console.php";

ini_set('display_errors', 'on');
use Workerman\Worker;

if(strpos(strtolower(PHP_OS), 'win') === 0)  {
	exit("start.php not support windows, please use start_for_win.bat\n");
}

// 检查扩展
if(!extension_loaded('pcntl') )  {
	exit("Please install pcntl extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}

if(!extension_loaded('posix'))  {
	exit("Please install posix extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}

// 标记是全局启动
define('GLOBAL_START', 1);
$current_dir = __DIR__;

// 加载所有Applications/*/start.php，以便启动所有服务
$all_files = [ "register.php","gateway.php","busiwork.php" ];
foreach( $all_files  as $start_file)  {
	require_once __DIR__."/".$start_file;
}
// 运行所有服务
Worker::runAll();
