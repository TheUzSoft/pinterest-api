options = weboptions('HeaderFields', {'X-RapidAPI-Key' 'YOUR_RAPIDAPI_KEY'; 'X-RapidAPI-Host' 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com'});
response = webread('https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com', options);
disp(response);
