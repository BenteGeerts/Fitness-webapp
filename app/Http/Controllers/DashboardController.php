<?php

namespace App\Http\Controllers;

use App\Models\TrainingProgram;
use App\Models\User;
use App\Models\UserData;
use App\Traits\DiamondTrait;
use App\Traits\StreakTrait;
use App\Traits\TrainingTrait;
use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Fitness;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use StreakTrait;
    use DiamondTrait;
    use TrainingTrait;

    public function Fit()
    {

        if (session('stepCountData') == null) {
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
                $dateTime = date('d-m', $startTimeMillis / 1000);
                $stepCountData[] = [
                    'date' => $dateTime,
                    'stepCount' => $stepCount,
                ];
            }

            session(['stepCountData' => $stepCountData]);
        }

        $user = User::find(auth()->id());
        $friends = $user->friends;

        $userData = UserData::where('user_id', Auth::id())->first();
        $recommendedPrograms = TrainingProgram::where("level_id", "=", $userData->level_id)->orWhere([
            ['level_id', 4],
            ['user_id', auth()->id()]])->get();

        $streakLength = StreakTrait::retreiveLength(auth()->id());
        $diamonds = DiamondTrait::getDiamonds();
        $lastLiftedWeight = TrainingTrait::getLastTrainingWeight();


        return view("dashboard",
            [
                'friends' => $friends,
                'programs' => $recommendedPrograms,
                'streakLength' => $streakLength,
                'diamonds' => $diamonds,
                'lastLiftedWeight' => $lastLiftedWeight,
            ]);
    }

}
