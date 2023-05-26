<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Fitness;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request as GuzzleRequest;

class FitController extends Controller
{
    public function Fit()
    {

       if(session('stepCountData') == null)
       {
           $client = new Client();
           $client->setApplicationName(env('GOOGLE_APP_NAME'));
           $client->setClientId(env('GOOGLE_CLIENT_ID'));
           $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
           $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
           $client->setAccessType('offline');
           $client->setIncludeGrantedScopes(true);

           $accessToken = session()->get('access_token');
           $client->setAccessToken($accessToken);

           // Set up the request parameters
           $url = 'https://www.googleapis.com/fitness/v1/users/me/dataset:aggregate';
           $data_source_id = 'derived:com.google.step_count.delta:com.google.android.gms:estimated_steps';
           $end_time = strtotime('tomorrow');
           $start_time = strtotime('-1 week', $end_time);

           $data_request = array(
               'aggregateBy' => array(
                   array('dataTypeName' => 'com.google.step_count.delta')
               ),
               'bucketByTime' => array(
                   'durationMillis' => 86400000
               ),
               'startTimeMillis' => $start_time * 1000,
               'endTimeMillis' => $end_time * 1000,
               'dataSourceId' => $data_source_id,
           );

           $headers = [
               'Content-Type' => 'application/json',
               'Authorization' => 'Bearer ' . $accessToken,
           ];

           $request = new GuzzleRequest('POST', $url, [
               'Authorization' => 'Bearer ' . $accessToken,
               'Content-Type' => 'application/json',
           ], json_encode($data_request));
           $client = new GuzzleClient();
           $response = $client->send($request);

           $data = json_decode($response->getBody()->getContents(), true);


           foreach ($data['bucket'] as $bucket) {
               $startTimeMillis = $bucket['startTimeMillis'];
               $endTimeMillis = $bucket['endTimeMillis'];
               $stepCount = $bucket['dataset'][0]['point'][0]['value'][0]['intVal'];
               $dateTime = date('d-m', $startTimeMillis / 1000); // Convert milliseconds to seconds and format as date
               $stepCountData[] = [
                   'date' => $dateTime,
                   'stepCount' => $stepCount,
               ];
           }

           session(['stepCountData' => $stepCountData]);
       }
        return view("dashboard");
    }

}
