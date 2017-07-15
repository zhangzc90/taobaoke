<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $c = new TopClient;
    $c->appkey = '23813322';
    $c->secretKey = 'c62c9204e3f39870d5ab9d9e20adb13d';
    $c->format='json';
    $c->checkRequest=false;

    // 好券清单
    // $req = new TbkDgItemCouponGetRequest;
    // $req->setAdzoneId("109572411");
    // $req->setPlatform("2");
    // // $req->setCat("16,18");
    // // $req->setQ("男装");
    // $req->setPageSize("100");
    // $req->setPageNo("3");
    // $resp = $c->execute($req);
    // var_dump($resp->total_results);
    // foreach($resp as $item){
    //    var_dump($item);
    // }


    // 淘口令生成
    // $req = new WirelessShareTpwdCreateRequest;
    // $tpwd_param = new GenPwdIsvParamDto;
    // $tpwd_param->ext="{\"xx\":\"xx\"}";
    // $tpwd_param->logo="http://img4.tbcdn.cn/tfscom/i2/TB1LKvdJFXXXXb2XXXXXXXXXXXX_!!0-item_pic.jpg";
    // $tpwd_param->url="http://uland.taobao.com/coupon/edetail?e=iRdI9KQt26s8Clx5mXPEKvAT32j6iY%2BkecgVdnYcif%2Fj0QWraiDy%2FKTDKYPojXjFp4AeIGqcErCGIYeiZsUMUNZgyJNTe9l249IpuNimzZ2YySKBMXi31xAj%2F9bQxoOYB5ghe2ozI83u%2BWKvn3CrMLIwRrUZkzhC1xJA98i9dH3NWdzmw3WZLg%3D%3D&piad=mm_44012812_24986639_109572411&itemId=44230956639";
    // $tpwd_param->text="德育习题册:与德育 第2版本 **册 道德法律与人生 配套(修订版) 新华书店正版畅销图书籍  紫图图书";
    // // $tpwd_param->user_id="24234234234";
    // $req->setTpwdParam(json_encode($tpwd_param));
    // $resp = $c->execute($req);
    // var_dump($resp);

    // 检索有优惠券的单品
    $req = new TbkItemGetRequest;
    $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
    $req->setQ("女装");
    /*$req->setCat("16,18");
    $req->setItemloc("杭州");
    $req->setSort("tk_rate_des");
    $req->setIsTmall("false");
    $req->setIsOverseas("false");
    $req->setStartPrice("10");
    $req->setEndPrice("10");
    $req->setStartTkRate("123");
    $req->setEndTkRate("123");*/
    $req->setPlatform("1");
    $req->setPageNo("123");
    $req->setPageSize("100");
    $resp = $c->execute($req);
    foreach($resp as $item){
       var_dump($item);
    }
?>