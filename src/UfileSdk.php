<?php
namespace Omuigix\LaravelUcloudStorage;

use Illuminate\Support\Facades\Log;

require "./Library/proxy.php";

class UfileSdk {
    protected $httpClient;
    protected $bucket;
    protected $pub_key;
    protected $sec_key;
    protected $host;

    public function __construct($bucket, $pub_key, $sec_key, $suffix = '.ufile.ucloud.cn', $https = false, $debug = false) {

    }

    public function put($key_name, $contents, $headers = array()) {
        list($data, $err) = UCloud_PutFile('idusx17', $key_name, '/Users/xiongxin/Downloads/dev-course-79-67-dev-course-72-60-rBCaalmuF4yAOKssAGoGxe3vxhI789.mp4');
        if ($err) {
            Log::debug("error: " . $err->ErrMsg . "\n");
            Log::debug("code: " . $err->Code . "\n");
            exit;
        }
        Log::debug("ETag: " . $data['ETag'] . "\n");
    }

}
