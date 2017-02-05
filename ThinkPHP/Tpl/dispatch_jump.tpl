<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>404错误</title>
<style>
html, body { height: 100%; }
body {
    margin: 0;
    padding: 0;
    font-family:"Microsoft YaHei";
    width: 100%;
    display: table;
}
.container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
}
.content {
    text-align: center;
    display: inline-block;
}
.emoji{
    font-size:40px;
}
.success,.error{
    font-size: 26px;
    margin-top:-8px;
}
.jump{
    margin-top:-5px;
    font-size:15px;
}
</style>
</head>
<body>
        <div class="container">
            <div class="content">
                <?php if(isset($message)) {?>
                <p class="emoji">^_^</p>
                <p class="success"><?php echo($message); ?></p>
                <?php }else{?>
                <p class="emoji">U_U</p>
                <p class="error"><?php echo($error); ?></p>
                <?php }?>
                <p class="detail"></p>
                <p class="jump">
                页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
                </p>
            </div>
        </div>
</body>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
 var time = --wait.innerHTML;
 if(time <= 0) {
     location.href = href;
     clearInterval(interval);
 };
}, 1000);
})();
</script>
</html>