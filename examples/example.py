import requests

url = "https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com/api/v1/download"
querystring = {"url": "YOUR_PIN_URL"}
headers = {
    "X-RapidAPI-Key": "YOUR_RAPIDAPI_KEY",
    "X-RapidAPI-Host": "pinterest-api-pinterest-scraper-fast.p.rapidapi.com"
}

response = requests.get(url, headers=headers, params=querystring)
print(response.json())