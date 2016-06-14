<?php
if (!defined('BASEPATH')) exit('no direct script access allowed');
class C_index extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this ->load ->helper(array('form','url'));//加载辅助函数
		$this ->load ->model('m_mes');//加载数据层
		$this ->load ->library('form_validation');
		$this ->load ->library("session");
	}
	function index() {
		$this ->load ->view("index");
	}
	function index_add(){// 留言板信息存贮
		header('content-type:text/html;charset=utf-8');
		$this ->form_validation ->set_rules("u_name","u_name","required|trim|min_length[1]|max_length[20]|xss_clean");
		$this ->form_validation ->set_rules("b_Professional","b_Professional","required|trim|max_length[20]|xss_clean");
		$this ->form_validation ->set_rules("b_email","b_email","required|trim|min_length[5]|max_length[32]|xss_clean");
		$this ->form_validation ->set_rules("b_message","b_message","required|trim|min_length[5]|xss_clean");

		$this ->load ->model('m_mes'); 
		$time = date('Y-m-d H:i:s');
		$array = array('b_user'=>$_POST['u_name'],'b_Professional'=>$_POST['u_Professional'],'b_email'=>$_POST['u_email'],'b_message'=>$_POST['u_message'],'b_time'=>$time);
		$this->m_mes->add_message($array);
		redirect(base_url());
	}
	public function login_in(){// 登录验证
		$this ->load ->library("form_validation");
		$this ->form_validation ->set_rules("lg_name","Lg_name","required|trim|min_length[5]|max_length[20]|xss_clean");
		$this ->form_validation ->set_rules("password","Password","required|trim|min_length[5]|max_length[20]|xss_clean");
		$session_data = $this ->session ->userdata("username");
		if (!empty($session_data) || $session_data == SHA1("huang*jiami*yixia_*yebucuo")) {
			$this ->login();// 登录成功
		}else{
			if ($this ->form_validation ->run() == FALSE) {
				$this ->load ->view("login_in");
			}else{
				$username = $this ->input ->post("lg_name");// 用户名
				$userpwd = $this ->input ->post("password");
				$userpwd = SHA1($userpwd."jiami*yixia_*yebucuo");
				if ($username != "admin") {
					echo "用户名出错";
					$this ->load ->view("login_in");
				}else{
					$pwd = SHA1("bit_workshop"."jiami*yixia_*yebucuo");
					if ($userpwd != $pwd) {
						echo "密码出错";
						$this ->load ->view("login_in");
					}else{
						$session_id = SHA1("huang*jiami*yixia_*yebucuo");
						$session_data = array(
							"username"	=>$session_id,
							"email"		=>"sunhhjay@gmail.com"
						);
						$this ->session ->set_userdata($session_data);
						$this ->login();
					}
				}
			}
		}
	}
	public function delete($id){
		$result = $this ->m_mes ->delete_message($id);
		redirect(base_url().'index.php/c_index/login');
	}
	public function login(){// 登录成功后
		$this ->load ->library("pagination");
		$config['base_url'] = base_url()."index.php/c_index/login_in";
		$config['total_rows'] = $this ->db ->count_all("bit_message");//从数据库中获取总的条数
		$config['per_page'] = 10;//每一页的记录条数
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = '首页';//首页标签显示
		$config['last_link'] = '尾页';//尾页的标签显示
		$config['first_tag_open'] = '<span>';//第一连接打开
		$config['first_tag_close'] = '</span>';
		$config['last_tag_open'] = '<span>';//最后一个连接打开
		$config['last_tag_close'] = '</span>';
		$config['next_link'] = '>';//下一页打开
		$config['next_tag_open'] = '<span>';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = '<';//上一页打开
		$config['prev_tag_open'] = '<span>';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<b>';//自定义当前样式
		$config['cur_tag_close'] = '</b>';
		$config['num_tag_open'] = '<a>';//自定义其他的页面样式
		$config['num_tag_close'] = '</a>';
		$config["uri_segment"] = 3;
		$num = $config['per_page'];
		$offset = $this ->uri ->segment(3);
		$this->pagination->initialize($config);
		$data_a = $this ->m_mes ->getall($num,($offset && $offset>=0 ? $offset : 0));
		$data = array(
			"page"		=>$this ->pagination ->create_links(),
			"result_row"=>$data_a
		);
		$this ->load ->view('show',$data);
	}
	public function logout() {// 退出登录
		$this ->session ->sess_destroy();
		redirect(base_url());
	}
} 
?>