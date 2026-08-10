import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;

fun main() {
    val request = HttpRequest.newBuilder()
        .uri(URI.create("https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com"))
        .header("X-RapidAPI-Key", "YOUR_RAPIDAPI_KEY")
        .header("X-RapidAPI-Host", "pinterest-api-pinterest-scraper-fast.p.rapidapi.com")
        .method("GET", HttpRequest.BodyPublishers.noBody())
        .build()
    val response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString())
    println(response.body())
}
