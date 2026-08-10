const axios = require('axios');

class PinterestClient {
    constructor(apiKey) {
        this.apiKey = apiKey;
        this.host = "pinterest-api-pinterest-scraper-fast.p.rapidapi.com";
        this.baseUrl = `https://${this.host}`;
    }

    async downloadPin(pinUrl) {
        const response = await axios.get(`${this.baseUrl}/api/v1/download`, {
            params: { url: pinUrl },
            headers: {
                'X-RapidAPI-Key': this.apiKey,
                'X-RapidAPI-Host': this.host
            }
        });
        return response.data;
    }
}

module.exports = PinterestClient;
