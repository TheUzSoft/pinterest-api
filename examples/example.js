fetch('https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com/api/v1/download?url=' + encodeURIComponent(pinUrl), {
  method: 'GET',
  headers: {
    'X-RapidAPI-Key': 'YOUR_RAPIDAPI_KEY',
    'X-RapidAPI-Host': 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com'
  }
})
.then(res => res.json())
.then(data => console.log(data));