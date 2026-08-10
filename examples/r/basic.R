library(httr)

url <- "https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com"
headers <- c(
  `X-RapidAPI-Key` = 'YOUR_RAPIDAPI_KEY',
  `X-RapidAPI-Host` = 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com'
)

res <- GET(url, add_headers(.headers=headers))
content(res, "text")
