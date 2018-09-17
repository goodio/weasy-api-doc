<?php

Route::group([
    'middleware' => ['web'],
], function() {

    Route::get('doc/api', function (){

        $filepath = storage_path()."/doc/doc.json";
        $json = file_get_contents($filepath);
        $array = json_decode($json, true);

        return view("doc::index", ['doc' => $array]);
    });

    Route::post('doc/test', function (){
        $params = request()->all();

        $host = $params["_host"];
        $uri = $params["_uri"];
        $method = $params["_method"];
        $port = $params["_port"];
        unset($params["_uri"], $params["_method"], $params["_host"], $params["_port"], $params["_token"]);

        $header = [];

        $client = new \GuzzleHttp\Client(['base_uri' => $host.":".$port]);
        $responce = $client->request($method, $uri,
            [
                'headers' => $header,
                'form_params' => $params,
            ]);
        return $responce->getBody()->getContents();
    });

});