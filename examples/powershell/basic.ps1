$headers = @{
    "X-RapidAPI-Key" = "YOUR_RAPIDAPI_KEY"
    "X-RapidAPI-Host" = "pinterest-api-pinterest-scraper-fast.p.rapidapi.com"
}
$response = Invoke-RestMethod -Uri "https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com" -Headers $headers -Method Get
Write-Output $response
