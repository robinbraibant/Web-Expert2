<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use TdTrung\Chalk\Chalk;

class Activity
{
    private Client $client;
    private Chalk $chalk;

    public function __construct()
    {
        $this->client = new Client();
        $this->chalk = new Chalk();
    }

    public function getActivity() : string
    {
        try {
            $response = $this->client->request('GET', 'https://www.boredapi.com/api/activity')->getBody();
            $data = json_decode($response, true);
            if (isset($data['activity'])) {
                return $this->chalk->green($data['activity']);
            }
            return $this->chalk->underscore->blue("No activity available");
        } catch (GuzzleException $e) {
            return $this->chalk->bold->red("Something went wrong: exception {$e->getMessage()}");
        }
    }
}