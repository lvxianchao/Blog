<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;

/**
 * Class SlugTranslateHandler
 *
 * @package App\Handlers
 */
class SlugTranslateHandler
{
    /**
     * HTTP 客户端
     *
     * @var Client
     */
    private $client;
    
    /**
     * 百度翻译 API
     *
     * @var string
     */
    private $api = 'https://fanyi-api.baidu.com/api/trans/vip/translate?';
    
    /**
     * APP ID
     *
     * @var \Illuminate\Config\Repository|mixed
     */
    private $appId;
    
    /**
     * KEY
     *
     * @var \Illuminate\Config\Repository|mixed
     */
    private $key;
    
    /**
     * @var int
     */
    private $salt;
    
    /**
     * SlugTranslateHandler constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
        $this->appId = config('services.baidu_translate.appid');
        $this->key = config('services.baidu_translate.key');
        $this->salt = time();
    }
    
    /**
     * 翻译
     *
     * @param string $text
     *
     * @return string
     */
    public function translate(string $text)
    {
        // 如果没有配置百度翻译，自动使用兼容的拼音方案
        if (empty($this->appId) || empty($this->key)) {
            return $this->pinyin($text);
        }
        
        // 生成查询参数
        $query = urldecode(http_build_query([
            'q' => $text,
            'from' => 'zh',
            'to' => 'en',
            'appid' => $this->appId,
            'salt' => $this->salt,
            'sign' => $this->sign($text),
        ]));
        
        // 发送请求并解析响应结果
        $response = $this->client->get($this->api . $query);
        $result = json_decode($response->getBody(), true);
        $dst = $result['trans_result'][0]['dst'];
        
        return $dst ? str_slug($dst) : $this->pinyin($text);
    }
    
    /**
     * 翻译成拼音
     *
     * @param $text
     *
     * @return string
     */
    private function pinyin($text)
    {
        return str_slug(app(Pinyin::class)->permalink($text));
    }
    
    /**
     * 生成签名
     *
     * @param string $text
     *
     * @return string
     */
    private function sign(string $text)
    {
        return md5($this->appId . $text . $this->salt . $this->key);
    }
}
