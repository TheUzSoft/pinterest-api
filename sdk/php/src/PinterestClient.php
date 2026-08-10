<?php

namespace TheUzSoft\Pinterest;

class PinterestClient
{
    protected $apiKey;
    protected $host = 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com';
    protected $baseUrl = 'https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function downloadPin(string $pinUrl): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->baseUrl . '/api/v1/download?' . http_build_query(['url' => $pinUrl]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-RapidAPI-Key: ' . $this->apiKey,
            'X-RapidAPI-Host: ' . $this->host,
            'Accept: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new \Exception("API returned error code " . $httpCode . ": " . $response);
        }

        return json_decode($response, true);
    }
}
