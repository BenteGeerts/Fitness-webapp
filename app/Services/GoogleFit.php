<?php


namespace App\Services;

use Google_Client;
use Google_Service_Fitness;

class GoogleFit
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setAuthConfig(config_path('google-api.php'));
        $this->client->addScope(config('google-api.scopes'));
        $this->client->setAccessType(config('google-api.access_type'));
        $this->client->setApprovalPrompt(config('google-api.approval_prompt'));
        $this->client->setPrompt(config('google-api.prompt'));

        $this->service = new Google_Service_Fitness($this->client);
    }

    public function getActivities()
    {
        dd("here0");
    }

    public function addActivity()
    {
        // Add code here to add an activity to the Google Fit API
    }

    // Add other methods here as needed

}
