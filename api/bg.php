<?php
$str = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1'); //��ȡ��Ӧapi�������Ӧ����
$str = json_decode($str,true);
$imgurl = 'http://cn.bing.com'.$str['images'][0]['url'];    //��ȡͼƬurl
header("Location: $imgurl");    //header��ת
?>