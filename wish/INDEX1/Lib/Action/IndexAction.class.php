<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	// 
    public function index(){
    	//p($_GET);die;
	   	//print_r($_GET);die;
	   	//echo U('show',array('uid' => 1),'', 0, true);die;//使用Url合成函数，最后指定扩展名，''为空无扩展名
	   	//可以用U方法生成链接地址如：<a href='{:U('')}'></a>
	   	//$wish = M('wish')->select();
	   	//p($wish);
	   	//$this->a=111;
	   	$this->assign('wish',M('wish')->select())->display('wish');//查询数据并赋值给wish变量，用assign方法对模板wish.html中的变量赋值
    }
    public function show(){
    	//echo I('uid');//安全获取系统变量
    	//p (I('get.'));
    	//echo U('show',array('uid' => 1),'', 0, true);die;//使用Url合成函数，最后指定扩展名，''为空无扩展名
    }
    public function handle(){
    	//p(I('post.'));//I方法接收post传递的参数
    	//echo I('content');//接收username
    	//echo $this->_post('content');
    	if(!IS_POST) _404('页面不存在', U('index'));//防止直接从地址提交

    	$data = array(
    		'username' => I('username'),
    		'content' => I('content'),
    		'time' => time()
    		);
    	if (M('wish')->data($data)->add()) {
    		$this->success('发布成功','index');
    	}else{
    		$this->error('发布失败，请重试...');
    	}
    	// $id = M('wish')->data($data)->add();
    	// 	echo $id;
    	// $result = M('wish')->where(array('id' => array('gt', 0)))->delete();
    	// var_dump($result);//删除id大于0的记录，成功返回int(条数)

    }
}
?>