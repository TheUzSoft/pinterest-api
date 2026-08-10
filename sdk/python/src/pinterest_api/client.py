import requests

class PinterestClient:
    def __init__(self, api_key: str):
        self.api_key = api_key
        self.host = "pinterest-api-pinterest-scraper-fast.p.rapidapi.com"
        self.base_url = f"https://{self.host}"
        
    def download_pin(self, pin_url: str) -> dict:
        headers = {
            "X-RapidAPI-Key": self.api_key,
            "X-RapidAPI-Host": self.host
        }
        params = {"url": pin_url}
        response = requests.get(f"{self.base_url}/api/v1/download", headers=headers, params=params)
        response.raise_for_status()
        return response.json()
