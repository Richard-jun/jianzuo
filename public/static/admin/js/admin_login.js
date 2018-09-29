// 后台登录js
$(function(){
	$('button.submit-btn').on('click',function(){
		$username = $(".login-input[name='username']").val();
		$password = $(".login-input[name='password']").val();
		$code = $(".login-input[name='code']").val();
		// 判断字段是否为空
		if($username=='' || $password=='' || $code==''){
			layer.alert('必填字段不能为空',{
				'icon' : 7,
				'offset' : 100,
			});
		}else if($code.length!=4){
			// 判断验证码是否是4位
			layer.alert('验证码必须是4位字符',{
				'icon' : 7,
				'offset' : 100,
			});
		}else{
			// 如果验证都通过就发起Ajax请求
			$.post('/login/login',{'username':$username,'password':$password,'code':$code},function($result){
				if ($result.status=='0') {
					layer.alert($result.message,{
						'icon' : 5,
						'offset' : 100,
					});
				}else{
					// 如果登录成功就弹窗提示并跳转
					layer.confirm($result.message,{
						'icon'   : 6,
						'offset' : 100,
						'btn'    : ['确定'],
						'yes'    : function(){
							location='/admin/index';
						}
					});
				}
			},"json");
		}
	});
});