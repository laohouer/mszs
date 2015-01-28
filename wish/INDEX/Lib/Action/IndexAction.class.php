<?php

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
	   	$this->assign('wish',M('wish')->select())->display('index');//查询数据并赋值给wish变量，用assign方法对模板wish.html中的变量赋值
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
    // $id = M('wish')->data($data)->add();
        //  echo $id;
        // $result = M('wish')->where(array('id' => array('gt', 0)))->delete();
        // var_dump($result);//删除id大于0的记录，成功返回int(条数)
    	// if(!IS_POST) _404('页面不存在', U('index'));//防止直接从地址提交

    	// $data = array(
    	// 	'username' => I('username'),
    	// 	'content' => I('content'),
    	// 	'time' => time()
    	// 	);
    	// if (M('wish')->data($data)->add()) {
    	// 	$this->success('发布成功','index');
    	// }else{
    	//$this->error('发布失败，请重试...');
        if (!IS_AJAX) halt('页面不存在y');
        $data = array(
            'username' => I('username'),
            'content' => I('content'),
            'time' => time()
            );
        //p($data);
        /*$phiz = array(
            'zhuakuang' => '抓狂',
            'baobao' => '抱抱',
            'haixiu' =>'害羞',
            'ku' => '酷',
            'xixi' => '嘻嘻',
            'taikaixin' => '太开心',
            'touxiao' => '偷笑',
            'qian' => '钱',
            'huaxin' => '花心',
            'jiyan' => '挤眼'
            );
        $str="<?php return " . var_export($phiz,true) . ';?>';
        file_put_contents('./data/phiz.php', $str);//将数组变量存入文件的过程*/
        /*用F函数写没有时间限制的缓存到文件的方法
        $phiz = array(
            'zhuakuang' => '抓狂',
            'baobao' => '抱抱',
            'haixiu' =>'害羞',
            'ku' => '酷',
            'xixi' => '嘻嘻',
            'taikaixin' => '太开心',
            'touxiao' => '偷笑',
            'qian' => '钱',
            'huaxin' => '花心',
            'jiyan' => '挤眼'
            );
        F('phiz',$phiz,'./Data/');
        */
        //$phiz = include './data/phiz.php';//读文件内数组第一方法
        $phiz = F('phiz','','./data/');//读文件内数组第二方法，缓存方法
        p($phiz);
        //p(I('post.'));
        //echo C('DEFAULT_FILTER');//显示默认过滤器
        //$this->error('发布失败，请重试...');
    
    }
}
?>