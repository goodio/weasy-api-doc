<?php

Route::group([
    'middleware' => ['web'],
], function() {

    Route::get('doc/api', function (){

        $filepath = storage_path()."/doc/doc.json";
        $json = file_get_contents($filepath);

        //print_r($json);die;

        $doc = json_decode($json, true);

        return view("doc::index", compact('doc', 'access_token'));
    });

    Route::post('doc/test', function (){
        $params = request()->all();

        $uri = $params["_uri"];
        $method = $params["_method"];

        unset($params["_uri"], $params["_method"], $params["_host"], $params["_port"], $params["_token"]);

        request()->request->add($params);

        $request = request()->create($uri, $method);

        $request->headers->set('Accept', "application/json");
        $request->headers->set('X-CSRF-TOKEN', "window.Laravel.csrfToken");

        $access_token = cache("api_access_token");

        if(!empty($access_token)){
            $request->headers->set("Authorization", "Bearer ".$access_token["access_token"]);
        }

        //print_r($request);die;

        return Route::dispatch($request);
    });

});