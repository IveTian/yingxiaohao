<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0,user-scalable=no,minimum-scale=1.0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>营销号文章生成器</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <div class="row" style="padding-top:20px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2 style="text-align: center;">营销号文章生成器</h2>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="padding-top:20px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <label for="notice">请填写相关内容</label>
            <form id="form1" name="form1" method="post" action="index.php">
                <div class="form-group">
                    <label for="mood">语气词</label>
                    <input type="text" class="form-control" name="mood" id="mood" placeholder="请输入语气词，比如“震惊”，不要带语气标点符号">
                </div>
                <div class="form-group">
                    <label for="mainThing">主体物</label>
                    <input type="text" class="form-control" name="mainThing" id="mainThing" placeholder="请输入主体物">
                </div>
                <div class="form-group">
                    <label for="event">事件</label>
                    <input type="text" class="form-control" name="event" id="event" placeholder="类似于：“混着一起吃”、“重复使用”等等">
                </div>
                <div class="form-group">
                    <label for="withWhat">与什么...（第二主体）</label>
                    <input type="text" class="form-control" name="withWhat" id="withWhat" placeholder="类似于：{主体物}不能与{与什么...}{事件}">
                </div>
                <div class="form-group">
                    <label for="adj">定语</label>
                    <input type="text" class="form-control" name="adj" id="adj" placeholder="类似于“千万不要”，“绝对不能”...">
                </div>
				<input type="submit" class="btn btn-primary" onClick="window.location.href='index.php'"></button>
            </form>
            <?php
            if ($_POST['mood'] == ""){
                echo "<script language='javascript'>;alert('请确认所有输入框不为空！');</script>";
            }else{
                if ($_POST['mainThing'] == ""){
                    echo "<script language='javascript'>;alert('请确认所有输入框不为空！');</script>";
                }else{
                    if ($_POST['event'] == ""){
                        echo "<script language='javascript'>;alert('请确认所有输入框不为空！');</script>";
                    }else{
                        if ($_POST['withWhat'] == ""){
                            echo "<script language='javascript'>;alert('请确认所有输入框不为空！');</script>";
                        }else{
                            if ($_POST['adj'] == ""){
                                echo "<script language='javascript'>;alert('请确认所有输入框不为空！');</script>";
                            }else{
                                if(isset($_POST['mood'])){
                                    $mood = $_POST['mood'];
                                    $mainThing = $_POST['mainThing'];
                                    $event = $_POST['event'];
                                    $withWhat = $_POST['withWhat'];
                                    $adj = $_POST['adj'];
                                    $contentTitle = $mood . '！' . $mainThing . $adj .  '和' . $withWhat . $event . '！' . "原因竟然是..."; 
                                    $content = $mainThing . '为什么不能与' . $withWhat . $event . '，' . '这究竟是怎么回事呢？' . $mainThing . '相信大家很熟悉吧，但是不能与' . $withWhat . $event . '是怎么回事呢？下面就让小编带着大家一起去了解吧。\n' . $mainThing . '不能与' . $withWhat . $event . '，其实就是' . $mainThing . '不能与' . $withWhat . $event . '。大家可能会感到很惊讶，' . $mainThing . '为什么' . $adj . '与' . $withWhat . $event . '。\n' . '这些就是' . $mainThing . '为什么' . $adj . '与' . $withWhat . $event . '的全部内容了。大家有什么想法呢，欢迎在评论区里与小编留言互动哦~我们下期再见！';
                                    //echo $contentTitle . "<br>" . $content;
                                    echo "<script>window.onload = function(){document.getElementById('resultTitle').value=\"$contentTitle\";document.getElementById('resultContent').value=\"$content\";};</script>";
                                }
                            }
                        }
                    }
                }
            }
            ?>
            <br />
            <br />
            <label for="resultText">生成结果</label>
            <br />
            <label for="resultTitle">标题</label>
            <input type="text" class="form-control" id="resultTitle">
            <label for="resultContent">内容</label>
            <textarea class="form-control" rows="3" id="resultContent"></textarea>
        </div>
        <div class="col-md-3"></div>
    </div>
  <div style="padding-top:20px; text-align: center;">
    <footer>前端采用Bootstrap v3框架。作者：<a href="https://tzih.top/">木辛恒同学</a>；协力：<a href="https://wsm.ink/">Rominwolf</a></footer>
   </div>
   

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>
