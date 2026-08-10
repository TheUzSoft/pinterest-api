# Pinterest API Endpoints

## 1. Download Pin Media
Extracts videos, carousel images, metadata, and creator details from any Pinterest Pin URL.

* **Path:** `/api/v1/download`
* **Method:** `GET`
* **Headers:**
  * `X-RapidAPI-Key` (Required): Your RapidAPI Subscription Key
  * `X-RapidAPI-Host` (Required): `pinterest-api-pinterest-scraper-fast.p.rapidapi.com`
* **Query Parameters:**
  * `url` (String, Required): Pinterest Pin link (e.g., `https://www.pinterest.com/pin/123/` or `https://pin.it/xyz`).

### Response Example (200 OK)
```json
{
  "status": "success",
  "source": "native",
  "time": 0.45,
  "data": {
    "success": true,
    "author": "creative_mind",
    "author_full_name": "John Smith",
    "author_followers": 52401,
    "title": "Cozy Living Room Design",
    "description": "Check out these cozy modern setup layout design suggestions...",
    "avatar": "https://...",
    "video_no_watermark": "https://...",
    "images": [
      "https://..."
    ],
    "statistics": {
      "like_count": 1420,
      "repin_count": 872,
      "comment_count": 45,
      "share_count": 120
    },
    "created_at": "2026-01-10T12:00:00"
  }
}
```
