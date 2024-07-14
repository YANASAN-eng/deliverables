<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function showProduct()
    {
        $server_ip = $_SERVER['SERVER_ADDR'];
        $url = "http://". $server_ip . "/wordpress/index.php?rest_route=/wp/v2/product";

        // cURLセッションを初期化
        $curl = curl_init();

        // cURLオプションを設定
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false, // ヘッダーを含まない
        ]);

        // cURL実行
        $response = curl_exec($curl);

        // エラーチェックとクローズ
        if ($response === false) {
            $error_message = curl_error($curl);
            curl_close($curl);
            return "cURL Error: " . $error_message;
        }

        // cURLセッションをクローズ
        curl_close($curl);

        // JSONデコード
        $products = json_decode($response, true);

        // ビューにデータを渡す
        return view('product', ['products' => $products]);
    }
}
