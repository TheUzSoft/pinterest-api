import 'package:http/http.dart' as http;

void main() async {
  var url = Uri.parse('https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com');
  var response = await http.get(url, headers: {
    'X-RapidAPI-Key': 'YOUR_RAPIDAPI_KEY',
    'X-RapidAPI-Host': 'pinterest-api-pinterest-scraper-fast.p.rapidapi.com',
  });
  print('Response status: ${response.statusCode}');
  print('Response body: ${response.body}');
}
