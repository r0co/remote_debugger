# Remote debugger

用于配合Vscode进行php远程调试

# 使用方法

1.配置远程调试
---

在`conf/php.ini`中将`xdebug.remote_host`改为你自己的ip

将`launch_demo.json`中的内容复制到vscode中的`launch.json`

2.将代码放入`app`目录中
---

3.配置数据库连接（可选）
---

详见`app/index.php`中`mysqli_connect('mysql', $uname, $passwd, $dbname);`，注意`host`为`mysql`，默认用户为`root`，密码为`root`

更改mysql中用户名和密码、创建默认数据库详见`docker-compose.yaml`

4.启动
---

`docker-compose up -d --build`

---

完成上述步骤即可开始调试