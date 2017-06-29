<?php
phpinfo();
die;

$bIp = gethostbyname($_ENV['COMPUTERNAME']); //获取本机的局域网IP
echo "本机IP：",$bIp,"\n";die;

$info  = iconv("UTF-8", "GBK",'尊敬的神马小福友,您好!您的订单D150901000264已经整装待发,您只需完成支付.可爱的小包裹就会飞到您手里啦!马上去支付>>http://www.shenmafuli.com');
$encode = base64_encode($info);
echo $encode.'-------';
echo base64_decode($encode);die;
//

$array = '{"sku_97":"1504211080006","sku_23":"[1504211080006,1504211080009]","sku_12":"[1504211080006,1504211080009,1504211080008,1504211080004]","sku_94":"[1504211080006,1504211080009,1504211080008,1504211080004]"}';



$info = json_decode($array);

$info->sku_12 = ltrim($info->sku_12,'[');
$info->sku_12 = rtrim($info->sku_12,']');
var_dump(explode(',', $info->sku_12));


die;


http://www.ceshi.com/index.php?m=&c=Cart&a=getCartInfo

$url = 'http://101.200.233.77:8080/ws/shopping/addOrder';
    $ch = curl_init();
    // 设置URL和相应的选项
$data['order'] = '{"address":"北京市","consignee":"王鑫磊","member":"3"}';
$data['orderproducts'] = '[{"productid":1,"quantity":1},{"productid":2,"quantity":1}]';
    curl_setopt($ch, CURLOPT_URL, $url);//http://www.baidu.com/10004127
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST, 1);//指定post方式提交数据
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // 抓取URL并把它传递给浏览器
    $result=curl_exec($ch);
    var_dump($result);
    //关闭cURL资源，并且释放系统资源
    curl_close($ch);

    if(empty($result)){
      return false;
    }



            $ch = curl_init();
        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, 'http://182.92.175.74/sale/openAPI?param_json={"order_codes": "D150629000001", "page": 1, "page_size": 100 }&key=123456780233FA31AD94AA59CFA65305&method=sslog.order.receiveLogisticsByCode');//http://www.baidu.com/10004127
        curl_setopt($ch, CURLOPT_POST, 1);//指定post方式提交数据
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        // 抓取URL并把它传递给浏览器
        $resultinfo=curl_exec($ch);
        //关闭cURL资源，并且释放系统资源
        curl_close($ch);


        var_dump($resultinfo);die;


















$number = '10001a001';
$str = explode('a',$number);
var_dump($str[0]);die;
$numberarr = array(10001,10002,10003,10004,10005,10006,10007,10008,10009,10010,10011,10012,10013);
var_dump(in_array($number, $numberarr));die;

die;









/*测试的sku码值

1504091010001,1504091010009,1504091010006,1504091010004,1504092020001,1504092020009,1504092020006,1504092020004,1504092020002,1504092030009,1504092030008,1504091040000,1504092050008,1504092050001,1504091060009,1504092070009,1504092080004,1504092080008,1504092080009,1504092090005,1504092090008,1504092090011,1504092090001,1504092100003,1504092100006,1504092100009,1504092100004,1504091110011,1504092120009,1504092130009,1504091140000,1504092150000,1504092160008,1504092170000,1504091180000,1504091190002,1504091190003,1504091200000,1504091210000,1504091220000,1504092230009,1504092230003,1504091240009,1504091240008
*/


    $ch = curl_init();
    $name = "【神马福利】";
    $phone = "111111111111";
    $orderid = "D332232262";
    $province = "黑龙江";
    $city = "哈尔滨市";
    $area = "";
    $street = "哈尔滨市哈尔滨市";
    $address = "黑龙江省哈尔滨市南岗区";

    $date = urlencode('{"order_code": "'.$orderid.'", "phone": "'.$phone.'", "name": "'.$name.'", "province": "'.$province.'", "city": "'.$city.'", "area": "'.$area.'", "street": "'.$street.'", "address": "'.$address.'", "postage": "11.0", "price": "120.0", "pay_mode": "1", "order_products": [{"product_code": "1504091010001", "count": "1", "product_price": "25"}]}');
    // 设置URL和相应的选项
    curl_setopt($ch, CURLOPT_URL, '182.92.175.74:8088/sale/openAPI?key=c2414f9e88e2398aeeb5d702f794092d
&method=sslog.order.receiveOrder&param_json='.$date);//http://www.baidu.com/10004127
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST, 1);//指定post方式提交数据

    // 抓取URL并把它传递给浏览器
    $result=curl_exec($ch);
    var_dump($result);
    //关闭cURL资源，并且释放系统资源
    curl_close($ch);

    if(empty($result)){
      return false;
    }








die;



$ipaddr = $_SERVER["REMOTE_ADDR"];
echo 233+119+65+0+34+49+108+187+258+297;die;
die(urlencode('http://www.shenmafuli.com/Connect/example/oauth/callback.php'));

    $ch = curl_init();
    // 设置URL和相应的选项
    curl_setopt($ch, CURLOPT_URL, 'http://chaxun.1616.net/s.php?type=ip&output=json&callback=?&_=');//http://www.baidu.com/10004127
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST, 0);//指定post方式提交数据

    // 抓取URL并把它传递给浏览器
    $result=curl_exec($ch);
    $result = rtrim($result,')');
    $result = ltrim($result,'?(');
    $result = json_decode($result);
    var_dump($result);die;
    //关闭cURL资源，并且释放系统资源
    curl_close($ch);
    if(empty($result)){
      return false;
    }
die;





die;

//多维数组排序
$sum = array();
foreach ($yourarray as $array) {
    $sum[] = $array['orderid']+strtotime($array['addtime']);
}
 
array_multisort($sum, SORT_ASC, $yourarray);

var_dump($yourarray);  




die;
$url = 'http://61.145.229.29:9003/MWGate/wmgw.asmx/MongateSendSubmit';
        $ch = curl_init ();
        $header = array(
            'Content-Type: application/x-www-form-urlencoded',
            'charset = utf-8'
        );
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, 1);
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'userId=JC2273&password=362105&pszMobis=18311125327&pszMsg=员工您好，感谢您对此次测试的配合。&iMobiCount=1&pszSubPort=*&MsgId=0');
        $return = curl_exec ( $ch );
        curl_close ( $ch );
var_dump($return);die;


















function xml_to_array( $xml )
{
    $reg = "/<(\\w+)[^>]*?>([\\x00-\\xFF]*?)<\\/\\1>/";
    if(preg_match_all($reg, $xml, $matches))
    {
        $count = count($matches[0]);
        $arr = array();
        for($i = 0; $i < $count; $i++)
        {
            $key= $matches[1][$i];
            $val = xml_to_array( $matches[2][$i] );  // 递归
            if(array_key_exists($key, $arr))
            {
                if(is_array($arr[$key]))
                {
                    if(!array_key_exists(0,$arr[$key]))
                    {
                        $arr[$key] = array($arr[$key]);
                    }
                }else{
                    $arr[$key] = array($arr[$key]);
                }
                $arr[$key][] = $val;
            }else{
                $arr[$key] = $val;
            }
        }
        return $arr;
    }else{
        return $xml;
    }
}
// Xml 转 数组, 不包括根键
function xmltoarray( $xml )
{
    $arr = xml_to_array($xml);
    $key = array_keys($arr);
    return $arr[$key[0]];
}
$xmlinfo = '<?xml version="1.0" encoding="utf-8"?><string xmlns="http://tempuri.org/">7327742249641071759
</string>';
$info = xmltoarray($xmlinfo);
var_dump($info);die;


die;
echo $orderid;die;
    $ch = curl_init();
    $date = urlencode('{"order_code": "33223223", "phone": "111111111111", "name": "测试", "province": "黑龙江", "city": "哈尔滨市", "area": "昌平区", "street": "哈尔滨市哈尔滨市", "address": "黑龙江省哈尔滨市南岗区", "postage": "11.0", "price": "120.0", "pay_mode": "1", "order_products": [{"product_code": "10006389", "count": "1", "product_price": "25"}]}');
    // 设置URL和相应的选项
    curl_setopt($ch, CURLOPT_URL, '182.92.175.74:80/sale/openAPI?key=123456780233FA31AD94AA59CFA65305&method=sslog.order.receiveOrder&param_json='.$date);//http://www.baidu.com/
    curl_setopt($ch, CURLOPT_POST, 1);//指定post方式提交数据

    // 抓取URL并把它传递给浏览器
    $result=curl_exec($ch);
    //关闭cURL资源，并且释放系统资源
    curl_close($ch);
    

    if(empty($result)){
      return false;
    }



die;
      $ch = curl_init();
      // 设置URL和相应的选项
      $url = 'http://182.92.175.74:8088/sale/openAPI?key=123456780233FA31AD94AA59CFA65305&method=sslog.order.receiveOrder';
      curl_setopt($ch, CURLOPT_URL, $url);//http://www.baidu.com/
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回  
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回

      // 抓取URL并把它传递给浏览器
      $result=curl_exec($ch);
      //关闭cURL资源，并且释放系统资源
      curl_close($ch);
      var_dump(json_decode($result));die;


 die;
$file = "C:\\robots.txt";
$exist = file_exists($file);
$stream = fopen($file, "a");
fwrite($stream, "channelnumber\tnumber\ttime\tprice\tname\tphone\taddress\tstatus\r\n");










die;
header( "Content-type: image/jpeg");
$PSize = filesize('2140.jpg');
$picturedata = fread(fopen('2140.jpg', "r"), $PSize);
echo $picturedata;die;



//$file = file_get_contents("./2140.jpg");
$fileName="2140.jpg";

$handle=fopen($fileName,"r");//使用打开模式为r

$content=fread($handle,filesize($fileName));//读为二进制
echo $content;
die;
var_dump(base64_encode('./2140.jpg'));die;



showDir("123/");die;
$url = 'http://myu.5dcar.com/webapp/index.php?r=Api/Register&username=123&password=123';
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, 0);
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POSTFIELDS, array());
        $return = curl_exec ( $ch );
        curl_close ( $ch );
var_dump($return);die;






















exit;


//$pattern='/^[^`~!@#$%^&*()+=|\\\][\]\{\}:;\'\,.<>\/?]/;';
$goodname = '阿斯达';

    if(!preg_match("/[\x{4e00}-\x{9fa5}\w]+$/u", $goodname)){
      $res['msg']='商品名称包含特殊字符！';
      print(json_encode($res));
      exit();
    }
    die;
$sale = array(array("innid"=>1,"goodsid"=>17,"salecount"=>4),array("innid"=>1,"goodsid"=>18,"salecount"=>5));
$good = array(
array("id"=>17,"innid"=>1,"goodname"=>test123,"marketprice"=>4,"saleprice"=>123),
array("id"=>18,"innid"=>1,"goodname"=>qwe,"marketprice"=>4,"saleprice"=>123),
array("id"=>19,"innid"=>1,"goodname"=>asdf,"marketprice"=>4,"saleprice"=>123));

foreach($good as $k=>$v){
  foreach($sale as $ks=>$vs){
    if($v["id"] == $vs["goodsid"]){
      $good[$k]["salecount"] = $vs["salecount"];
    }else{
      if(!isset($good[$k]["salecount"])){
        $good[$k]["salecount"] = 0;
      }
    }
  }
}

var_dump($good);die;


function showDir( $filedir ) {
//打开目录  
$dir = @ dir($filedir);
//列出目录中的文件  
$filename = 1;
while (($file = $dir->read())!==false)
  {
     if(is_dir($filedir."/".$file) AND ($file!=".") AND ($file!="..")) {
           showDir($filedir."/".$file);
      } else {
          if ($file != "." and $file != ".."){
              $oldname = $filedir."/".$file;
              echo "oldname: ".$oldname;
              echo "<br />";
              $end = strrpos($oldname, ".");
              $file = substr_replace($oldname,$filename,0,$end); 
              $newfile = $filedir."/".$file;
              echo "newfile :".$newfile;
              rename($oldname,$newfile);
              $filename++;
              echo "<br />";
         }
      }
 }
$dir->close();
}
showDir("123/"); die;


$info = json_decode($citylist);var_dump($info);die;
/*require("class.phpmailer.php");

$mail = new PHPMailer(); //建立邮件发送类
$address = "guolulu0223@163.com";
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->Host = "smtp.qq.com"; // 您的企业邮局域名
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Username = "2236876348@qq.com"; // 邮局用户名(请填写完整的email地址)
$mail->Password = "guolu@123.qwe"; // 邮局密码

$mail->From = "15100422389@qq.com"; //邮件发送者email地址
$mail->FromName = "peterlee";
$mail->AddAddress($address, "郭路路");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式

$mail->Subject = "验证邮件"; //邮件标题
$mail->Body = "Hello,这是测试邮件"; //邮件内容
$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略

$mail->Send();





die;
$scoredescarr=array(
           "1"=>array('啥都别说了，赶紧拉黑吧','再也不能愉快的撩菜了','勾搭得看清对象','结果不准？是你不敢信吧'),
           "2"=>array('以后勾搭也要看清楚对象哈','以后最好不要再一起愉快的玩耍了！','萌萌~不哭~萌萌~加油~'),
           "3"=>array('约么？','人家都说，真爱是不分性别的','彼此重新相识，从对方的名字开始'),
           "4"=>array('约么？赶紧的','我的世界，只有你最懂','有人说，真爱是不分性别的。现在信了','你俩都来自火星吧'),
           "5"=>array('世界那么大，二货和二货的相遇并不纯属偶然','有人说，真爱是不分性别的。现在信了','我知道，你要的相逢不只是理解')
         );
$score = rand(0,100);

if($score == 0){
	$scorednum=array_rand($scoredescarr[1]);
	$scoredesc= $scoredescarr[1][$scorednum];
}
if(1<=$score && $score<=33){
	$scorednum=array_rand($scoredescarr[2]);
	$scoredesc= $scoredescarr[2][$scorednum];
}
if(34<$score && $score<=66){
	$scorednum=array_rand($scoredescarr[3]);
	$scoredesc= $scoredescarr[3][$scorednum];
}
if(67<$score && $score<=99){
	$scorednum=array_rand($scoredescarr[4]);
	$scoredesc= $scoredescarr[4][$scorednum];
}
if($score && $score==100){
	$scorednum=array_rand($scoredescarr[5]);
	$scoredesc= $scoredescarr[5][$scorednum];
}

var_dump($scoredesc);die;

die;
header('Content-type: application/image/pjpeg');//输出的类型
header('Content-Disposition: attachment; filename="downloaded.jpg"'); //下载显示的名字,注意格式
readfile('http://www.ncmem.com/images/ico-ftp.jpg');
// 并将这个文件以前面header发送信息设定的类型输出,从而会弹出一个下载框
// 就是把服务器上的my.jpg下载下来,下载显示和保存的名字默认是downloaded.jpg


die;
$arr=array('name' => 18311125327,'passwd' => 2222222,'olsid' => 2,'isremember'=>0);
$info = json_encode($arr);var_dump($info);die;









die;

$url = "http://guolulu.duapp.com"; //目标站
$fp = @fopen($url, "r") or die("超时");

$content=file_get_contents($url);
 $mode = "#<title>(.*)</title>#";
 if(preg_match_all($mode,$content,$arr)){
  //print_r($arr);
  echo $arr[1][0];
 }
 die;



//$filedir = "upload";
function showDir( $filedir ) {
//打开目录  
$dir = @ dir($filedir);
//列出目录中的文件  
$filename = 1;
while (($file = $dir->read())!==false)
  {
     if(is_dir($filedir."/".$file) AND ($file!=".") AND ($file!="..")) {
           showDir($filedir."/".$file);
      } else {
          if ($file != "." and $file != ".."){
              $oldname = $filedir."/".$file;
              echo "oldname: ".$oldname;
              echo "<br />";
              $end = strrpos($oldname, ".");
              $file = substr_replace($oldname,$filename,0,$end); 
              $newfile = $filedir."/".$file;
              echo "newfile :".$newfile;
              rename($oldname,$newfile); 
              $filename++;
              echo "<br />";
         }  
      }  
 }  
$dir->close();
}  
showDir("123/");



die;
$mobile = "18311125327";//要查询的电话号码
$content = get_mobile_area($mobile); 
print_r($content); 
 
function get_mobile_area($mobile){ 
    $sms = array('province'=>'', 'supplier'=>'');  //初始化变量 
    //根据淘宝的数据库调用返回值
    $url = "http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$mobile."&t=".time(); 
 
    $content = file_get_contents($url); 
    $sms['province'] = substr($content, "56", "4");//截取字符串 
    $sms['supplier'] = substr($content, "81", "4"); 
    return $sms; 
}


die;
////Tk8ykBgIAEVsbOfNyyVLKjpWkdyzkIIGjVEy0MACe6I=
$time=time();
$str=encrypt("asdfghjk".$time."10097838");
echo $str."<br>";
echo "<a target='aa' href='http://www.baidu.com'>百度</a><br>";
echo "<a target='aa' href='http://www.sina.com.cn'>新浪</a><br>";
$token=decrypt($str);
$timeout=(substr($token,8,10)-3600);
$UserId=substr($token,18);
echo $timeout."<br>";
echo $UserId;

//加密函数：encrypt
function encrypt($encrypt,$key="") {
            $iv = mcrypt_create_iv ( mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND );
            $passcrypt = mcrypt_encrypt ( MCRYPT_RIJNDAEL_256, $key, $encrypt, MCRYPT_MODE_ECB, $iv );
            $encode = base64_encode ( $passcrypt );
            return $encode;
}

//解密函数：decrypt
function decrypt($decrypt,$key="") {
            $decoded = base64_decode ( $decrypt);
            $iv = mcrypt_create_iv ( mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND );
            $decrypted = mcrypt_decrypt ( MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_ECB, $iv );
            return $decrypted;
}
die();
$today=date('Y-m-d',time());
$beginToday=strtotime($today);
$endToday=$beginToday+24*3600;
 
//php获取昨日起始时间戳和结束时间戳
 
$beginYesterday=$beginToday-24*3600;
 
$endYesterday=$beginToday;






var_dump($beginToday);

die;
require './tool/Tool.php';
mb_internal_encoding('gb2312'); // 这里的gb2312是你网站原来的编码
mb_http_output('HTML-ENTITIES');
ob_start('mb_output_handler');

//支付请求
$Tool=new Tool();
date_default_timezone_set('PRC');

/**订单支付请求参数**/
$pay=date('YmdHis');
$transData=new StdClass();
$transData->MerID="590";							//平台号
$transData->MerName='链家I生活';           			//商户名称
$transData->MerchantID='590001040100011';      	//商户ID
$transData->PayID='test120140528112452';                 	//订单号
$transData->OrderAmount='1.00';					//交易金额
$transData->TransDate=date('Ymd');					//交易日期
$transData->TransTime=date('His');						//交易时间
$transData->MerHomeUrl='http://www.merhomeurl.com';	//支付完成回调地址
$transData->MerBackUrl='http://www.homelink.com';	//未支付回调地址
$transData->Description="链家I生活订单";					//订单详情

/**加解密**/
$resflag=$Tool->sendOrderRequest($transData);
if(strcmp($resflag,'1')==0){
	/**加解密成功显示明文**/
	echo 'LastResult: '.$Tool->LastResult.'<br/>';
	//重定向:   ($Tool->LastResult)http://183.238.57.52:18081/sjzf_html5/receive.action?EncryptMsg=str;
}else{
	/**加解密失败显示错误信息**/
	echo 'LastErrMsg: '.$Tool->LastErrMsg.'<br/>';
}























die;
/**
  * wechat php test
  */


//define your token
define("TOKEN", "aipinbao");
$wechatObj = new wechatCallbackapiTest();
if(isset($_GET["echostr"])){ #验证过token，成为开发者之后，可以直接$wechatObj->responseMsg();
$wechatObj->valid();
}else{
$wechatObj->responseMsg();
}




class wechatCallbackapiTest
{
public function valid()
    {
        $echoStr = $_GET["echostr"];


        //valid signature , option
        if($this->checkSignature()){
        echo $echoStr;
        exit;
        }
    }


    public function responseMsg()
    {
//get post data, May be due to the different environments
$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];


      //extract post data
if (!empty($postStr)){
                
              $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA); #这里有从用户通过公众平台接收过来的数据，具体是什么类型的数据，开发者文档上写的很清楚，可以去上面查。
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
				$keyarr=explode('+',$keyword);
$msgType = $postObj->MsgType;
                $time = time();
switch( $msgType ){
case "text": #这个xml格式的数据是你服务器上的数据，是要传回公众平台的。我在这刚开始有点糊涂了
$textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Content><![CDATA[%s]]></Content>
<FuncFlag>0</FuncFlag>

</xml>";

#这里是我自己写的，关于时间的自动回复     
if( $keyword =='时间' || $keyword =='time' || $keyword =="shijian"){
$contentStr = date("Y-m-d H:i:s",time());
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if($keyword=='1'){
$contentStr ="《融通资本-融通宝3号专项资产管理计划C类份额》
【年化收益率】市场认购金额：100万起  收益率：7.5%/年  爱拼用户认购金额：5万人民币起
【资金投向】标准化债权资产、流动性管理工具、非标准化债权资产等
【收益分配】到期一次性分配本金及收益
融通基金旗下基金子公司产品。投资于低风险，高流动性产品，搭配经过筛选的信托和资管产品，只有6个月期，非常安全可靠，且收益不错（7.5%）裂墙推荐之。";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if($keyword=='2'){
$contentStr ="《四川信托-2014核工业西南建设集团流动资金贷款集合资金信托计划》
【年化收益率】市场认购金额：100万起  收益率：9%/年  爱拼用户认购金额：5万人民币起
【资金使用】信托资金以信托贷款的方式向核工业西南建设集团有限公司（简称“核工业西南建设集团”）发放流动资金贷款，用于补充其日常经营的营运资金。
【收益分配】到期一次性付息
这款产品融资方实力十分强大：
1）核工业部下属国有性质企业，具有多项国家壹级施工总承包资格，行业内有核心竞争优势，具有一定垄断性。
2）根据公司当前在建项目及新承建项目情况，预计其2014年全年收入将达到40亿元，偿还8000万一年期贷款不是问题。
3）违约成本极高，安全可靠。1年期，9%，必须抢购，一周后必然卖光。";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if($keyword=='3'){
$contentStr ="《浪漫满屋》限量内部额度众筹  导演：陈嘉上（《画皮》《四大名捕》《画壁》）
主演：金宇彬、Angela baby等
投资预约截止时间：5月15日下午17:00?
实际入款时间：6月中旬?      
最小投资额：5万元人民币?
 预期收益：47.3%--147%（高风险高收益）
预期分账时间： 2015年6月?
投资方式：众筹，爱拼宝代持?";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if($keyword=='4'){
$contentStr =" 拼人才，爱拼宝技术支持，欧德思团队恳请拼｛PHP开发工程师、Java开发工程师、android开发工程师、前段开发工程师、高级产品经理｝，有人才资源的请拼给我们吧。详细资料：http://company.zhaopin.com/CC600256820.htm";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if($keyword =='能拼' || $keyword =='nengpin'){
$contentStr = "回复：“1“、”2”、“3“，“4”，了解正在拼的事情详情
          1、融通资本-融通宝3号专项资产管理计划C类份额
          2、四川信托-2014核工业西南建设集团流动资金贷款集合资金信托计划
          3、《浪漫满屋》限量内部额度众筹
		  4、拼人才，爱拼宝技术支持
         回复：“要拼+能拼的序号+联系方式”——客服随后将和你联系 ";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if( intval($keyarr[2]>0) && $keyarr[0]=='要拼'){
$contentStr = "客服将随后和你联系";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else if( $keyarr[0]=='想拼'){
$contentStr ="审核ok后，下周你相拼的事情将在“能拼”里提供给大家";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;

}else{
$msgType = "text";
$contentStr = "感谢您联系爱拼宝！我们将尽快回复您：）

您也可以联系爱拼宝微信客服获得更及时的帮助。（爱拼小蜜微信号ipinbao009）

也欢迎您参与爱拼投资小调查，回答几个短短小问，指导我们为您做的更好。
http://www.sojump.com/jq/3054626.aspx";
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;
}

break;

case "event": #这个是事件的操作，当关注的时候自动回复
$textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Content><![CDATA[%s]]></Content>
<FuncFlag>0</FuncFlag>
</xml>";
$event = $postObj->Event;
$msgType = "text";
if( $event =='subscribe'){
$contentStr = '欢迎关注爱拼宝！
爱拼，拼出未来！用互联网金融创新，砸碎投资门槛，自由享受投资机会！
爱拼宝上线半年来，爱拼不二狼和很多拼友成为了莫逆之交。
当不二狼想做材料时，拼出了设计师，拼出了一个性价比极高的宣传展台；当不二狼想扩大规模时，拼出了几个志同道合的合作者；独乐乐不如众乐乐，不二狼邀请邀请大家一起把最近想拼的事情发到微信，将每周把上一周要拼的东西发出来，供咱们爱拼粉丝一起来拼。
游戏规则：

回复关键词：
回复：“能拼”——微信回复：最近正在拼的事情
回复：“要拼+能拼的序号+联系方式”——客服随后将和你联系
回复：“想拼+相拼的事情”——审核ok后，下周你相拼的事情将在“能拼”里提供给大家';
$statusinfo=$this->ifregister($fromUsername);
if($statusinfo!='2'){
    $aa=$this->subscribeuser($fromUsername);
}
$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
echo $resultStr;
break;
}elseif ($event=='CLICK'){//点击菜单
  $product=$this->getNews();
  $product=json_decode($product);
  $info='';
  $num=2;
  foreach($product as $key=>$val){
    $num=$num+1;
    $info.="<item>
<Title>".$val->prName."</Title> 
<PicUrl>http://www.ipinbao.com/Public/Uploads/".$val->logoUrl."</PicUrl>
<Url>http://www.ipinbao.com/index.php?s=/Index/preferdetail/prId/".$val->prId."</Url>
</item>";
  }
$newsTpl="<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<ArticleCount>".$num."</ArticleCount>
<Articles>
<item>
<Title><![CDATA[%s]]></Title> 
<Description><![CDATA[%s]]></Description>
<PicUrl><![CDATA[%s]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>
$info
<item>
<Title>查看更多>>></Title> 
<Url>http://www.ipinbao.com</Url>
</item>
</Articles>
</xml>";
$msgType = "news";
$form_PicUrl = "http://www.ipinbao.com/web/Public/Images/showimg360_220.png";
$msgType = "news";
$title = "";
$desription = "爱拼优选是由.....";
$turl = "http://www.ipinbao.com";
$resultStr = sprintf($newsTpl, $fromUsername, $toUsername, time(), $msgType,$title, $desription,$form_PicUrl,$turl);
echo $resultStr;
break;
}
}

        }else {
        echo "";
        exit;
        }
    }
///----------------------------------------------------------------------------------
  //判断用户是否已经授权
  	public function ifregister($openid){
		// 创建一个新cURL资源
		$ch = curl_init();
		// 设置URL和相应的选项
		curl_setopt($ch, CURLOPT_URL, "http://www.ipinbao.com/index.php?c=index&a=ifregister&openid=$openid");//http://www.baidu.com/
		curl_setopt($ch, CURLOPT_POST, 0);//指定post方式提交数据
		curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 抓取URL并把它传递给浏览器
		$result=curl_exec($ch);
		//关闭cURL资源，并且释放系统资源
		curl_close($ch);
		if(empty($result)){
			return false;
		}
		return $result;
	}
	//获取原始的access_token
	public function getaccess_token(){
		// 创建一个新cURL资源
		$ch = curl_init();
		// 设置URL和相应的选项
		curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxffecb9e80995ead2&secret=812e3c73e941ddb253b2a937e7f9a5e8 ");//http://www.baidu.com/
		curl_setopt($ch, CURLOPT_POST, 0);//指定post方式提交数据
		curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 抓取URL并把它传递给浏览器
		$result=curl_exec($ch);
		//关闭cURL资源，并且释放系统资源
		curl_close($ch);
		if(empty($result)){
			return false;
		}
		return $result;
	}

	public function subscribeuser($fromUsername){
		$subscribeuser=$this->getaccess_token();
		$access_tokeninfo=json_decode($subscribeuser);
		$userinfo=$this->getuserinfo($access_tokeninfo->access_token,$fromUsername);
		$userinfoarr=json_decode($userinfo);
		$openid=$userinfoarr->openid;
		$nickname=$userinfoarr->nickname;
		$headimgurl=$userinfoarr->headimgurl;
		// 创建一个新cURL资源
		$ch = curl_init();
		// 设置URL和相应的选项
		curl_setopt($ch, CURLOPT_URL, "http://www.ipinbao.com/index.php?c=index&a=useradd&openid=$openid&nickname=$nickname&headimgurl=$headimgurl");//http://www.baidu.com/
		curl_setopt($ch, CURLOPT_POST, 1);//指定post方式提交数据
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 抓取URL并把它传递给浏览器
		$result=curl_exec($ch);
		//关闭cURL资源，并且释放系统资源
		curl_close($ch);
		if(empty($result)){
			return false;
		}
		return $result;
	}

	//获取关注用户信息
	public function getuserinfo($access_token,$openid){
		// 创建一个新cURL资源
		$ch = curl_init();
		// 设置URL和相应的选项
		curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid");//http://www.baidu.com/
		curl_setopt($ch, CURLOPT_POST, 0);//指定post方式提交数据
		curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 抓取URL并把它传递给浏览器
		$result=curl_exec($ch);
		//关闭cURL资源，并且释放系统资源
		curl_close($ch);
		if(empty($result)){
			return false;
		}
		return $result;
	
	}
  public function getNews()
  {
		// 创建一个新cURL资源
		$ch = curl_init();
		// 设置URL和相应的选项
		curl_setopt($ch, CURLOPT_URL, "http://www.ipinbao.com/index.php?c=index&a=getNews");//http://www.baidu.com/
		curl_setopt($ch, CURLOPT_POST, 0);//指定post方式提交数据
		curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// 抓取URL并把它传递给浏览器
		$result=curl_exec($ch);
		//关闭cURL资源，并且释放系统资源
		curl_close($ch);
		if(empty($result)){
			return false;
		}
		return $result;
  }
///----------------------------------------------------------------------------------

private function checkSignature() #这个函数验证过之后就可以删除了
{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
       
$token = TOKEN;
$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr);
$tmpStr = implode( $tmpArr );
$tmpStr = sha1( $tmpStr );

if( $tmpStr == $signature ){
return true;
}else{
return false;
}
}
}


?> 