<?php
if(!empty($_GET['url'])){
	$urls=@$_GET['url'];
}else{
	Header("Location:https://www.qpgyy.net");
}
?>
<!DOCTYPE html>
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>智能解析系统</title>
    <script src="jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<style type="text/css">
    body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
</style>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<body style="overflow-y:hidden;">
<div style="margin:0px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="" width="100%" height="100%"></iframe>
</div>

<script>
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");   
     var r = window.location.search.substr(1).match(reg);
        if (r != null)return unescape(r[2]);
        return null;
    }
 
   function play(url) {
        $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
    }   
 var url_adress = (GetQueryString("url"));  
  if (url_adress.indexOf(".m3u8") > 0){  
      play('index1.php?url=<?php echo $_GET["url"]; ?>');	 
   }else if(url_adress.indexOf("/share/") > 0){  
      play('<?php echo $_GET["url"]; ?>');	  
    }
else
{
        play('?url=<?php echo $_GET["url"]; ?>');  
  }
</script>
</body>


