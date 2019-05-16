<?php
include './Man.php';
include './woman.php';
include './Monster.php';
/**
 * 人类工厂 用来生产人
 */
class Manfactory
{
	/***
	$flage 是一个标识 标识当前要执行的是那个实例化对象
	使用匿名的方式来创建不同种类的人类对象
	修改类名的时候  不需要修改使用者的调用代码
	直接改instantiation这个方法就行
	**/
	static function instantiation($flage)
	{
		if($flage=='m'){
			return new Man();
		}elseif ($flage=='w') {
			return new Woman();
		}

	}
	/***
	实名的这种使用者要知道类的名字
	修改类名的时候  要修改使用者的调用代码
	**/
	static function instantshi($classname)
	{
		return new $classname;
	}
}
/***
下面这段代码可能会有很多类要复用，如果类名Man、Woman改变的时候那使用instantiation 匿名的工程类创建对象会更好，
不用改下面的代码 就直接改instantiation方法就行
***/
$man=Manfactory::instantiation('m');
$man->eat();
$woman=Manfactory::instantiation('w');
$woman->eat();
/***
要改下面的代码 把Man换成改后的  
这样要改的量就会很大
***/
$man1=Manfactory::instantshi('Man');
$man1->eat();