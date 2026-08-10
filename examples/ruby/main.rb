require 'uri'
require 'net/http'

url = URI("https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com")

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true

request = Net::HTTP::Get.new(url)
request["X-RapidAPI-Key"] = 'YOUR_RAPIDAPI_KEY'
request["X-RapidAPI-Host"] = 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com'

response = http.request(request)
puts response.read_body
