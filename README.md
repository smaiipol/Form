<h2>Html表单接入PHP验证发送邮件</h2>
<p>前端需要: jQuery, 后端需要php、主机支持 mail 函数</p>
<h4>前端思路:</h4>
<p>绑定表单发送按钮click事件，阻止默认表单事件，收集表单数据用post提交到form/form.php</p>
<p>当返回数据时将结果显示在 #result1 容器中</p>
<h4>后端思路:</h4>
<p>挨个验证post数据，只要有错误就退出并给出错误文字(也可以改成统一验证，例如一次性把不符合要求的DIV边框改成红色)</p>
<p>当数据全部无误的时候利用 mail 函数发送电子邮件，同时使用js跳转到新的页面.</p>