import java.io.IOException;
import java.net.URI;
import java.net.http.HttpClient;
import java.net.http.HttpRequest;
import java.net.http.HttpResponse;

public class Basic {
    public static void main(String[] args) throws IOException, InterruptedException {
        HttpRequest request = HttpRequest.newBuilder()
            .uri(URI.create("https://pinterest-api-pinterest-scraper-fast.p.rapidapi.com"))
            .header("X-RapidAPI-Key", "YOUR_RAPIDAPI_KEY")
            .header("X-RapidAPI-Host", "pinterest-api-pinterest-scraper-fast.p.rapidapi.com")
            .method("GET", HttpRequest.BodyPublishers.noBody())
            .build();
        HttpResponse<String> response = HttpClient.newHttpClient().send(request, HttpResponse.BodyHandlers.ofString());
        System.out.println(response.body());
    }
}
