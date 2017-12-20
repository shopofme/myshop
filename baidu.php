<?php
header("Content-Type:text/html;charser=UTF-8");

$path = urldecode("https://d11.baidupcs.com/file/145aedc431c471e0b1bb9c85581cd229?bkt=p3-000001860e7706bfd03a15a1c8f917a5e070&xcode=fbdf88839644ff9b26afcae02677360f0e0833deb84a96bc316128a2cdfcce4d&fid=3154975463-250528-72690423118188&time=1513064211&sign=FDTAXGERLQBHSK-DCb740ccc5511e5e8fedcff06b081203-dC7iD3LVhFb%2BX0Gs9A%2FbzvrZywY%3D&to=d11&size=67305472&sta_dx=67305472&sta_cs=19052&sta_ft=mp4&sta_ct=7&sta_mt=6&fm2=MH,Yangquan,Anywhere,,guangdong,ct&vuk=3154975463&iv=0&newver=1&newfm=1&secfm=1&flow_ver=3&pkey=000001860e7706bfd03a15a1c8f917a5e070&sl=79364174&expires=8h&rt=pr&r=732993373&mlogid=8016612833789136274&vbdid=1827161112&fin=demo%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E.mp4&fn=demo%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E.mp4&rtype=1&dp-logid=8016612833789136274&dp-callid=0.1.1&hps=1&tsl=100&csl=100&csign=nE%2Fc7R5bcdKW%2FaaHgFXSp81OHhE%3D&so=0&ut=6&uter=4&serv=1&uc=4236781674&ic=3674416526&ti=dc6499186391bbe4de03b421c407df81e17d3080282418b7&by=themis");
echo $path;exit;
$curl = curl_init(); 

curl_setopt($curl, CURLOPT_URL, 'https://pan.baidu.com/api/streaming?path=/视频/demo使用说明.mp4&app_id=250528&clienttype=0&type=M3U8_FLV_264_480&adToken=9cKXIvGvwglhMNcMoXQQJ8iEUa%2BY5b9VxWdHbg3%2B3JgEa%2BdC92U5CLsLeuu0jbMjmyAjppCQ5iFsQ5XUDeI2oYWf%2F3PMJlptst0ooI%2Bfx54bbhoMf9OoqJHEA9QKXftxNNHkjD%2BlWCS9CG%2BPqRyyg2WzWC%2BkoIzvFEJWVxaVw3A%3D'); 

$header[]= 'Cookie:BAIDUID=E5828486EE8BF3466C1A4486B5751FAB:FG=1; BIDUPSID=E5828486EE8BF3466C1A4486B5751FAB; PSTM=1512284500; panlogin_animate_showed=1; BDUSS=JnQm80RnBvbnRvYVZRRkFacmZWY2lLZGtwQ1RIeWdaTjQwMHR5QjhkR014RlphQVFBQUFBJCQAAAAAAAAAAAEAAABUvDgJbGVpY2hhbl9raW5nAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIw3L1qMNy9aOV; pan_login_way=1; PANWEB=1; STOKEN=43777dc975ebf9d8641341eff18e5f7a5f417495ade00d50717ffccbf5d44f63; SCRC=b2f01cf19a6a264aa6f386951370edf3; cflag=15%3A3; PSINO=7; H_PS_PSSID=1429_24565_21088_18559_17001_25177; BDORZ=B490B5EBF6F3CD402E515D22BCDA1598; Hm_lvt_7a3960b6f067eb0085b7f96ff5e660b0=1513043854,1513045764,1513061423,1513063306; Hm_lpvt_7a3960b6f067eb0085b7f96ff5e660b0=1513064208; PANPSC=13619193754175810338%3A5e7emfqPscJgJaD%2FM%2BG0mNwxnZzNwr1wKk5hzTiifJirsBbjugKP9xOAD5r1J1nbkuejjKnj3MGe9SyUjuthvlAhwWEiTCzx6bo%2FV5hMV76Czr5I%2F7Ky%2BJCp%2BCB0T%2FyWEwSGY4zSeKwDzLGxCF9yjchTKu%2BdwTb%2Fnr9yQoCeHI88g1PcRcrciMZ09rQO2Yg1vdvDG1Aevkc%3D';

curl_setopt($curl,CURLOPT_HTTPHEADER,$header); 

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$result = curl_exec($curl); 

curl_close($curl); 
print_r($result);exit;
//echo $result;
$url = "http://ubmcmms.baidu.com/media/v1/0f000AsdQWMkVLkX374w40.swf?file=".$result;
Header("Location: $url"); 
?>

