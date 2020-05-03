mapboxgl.accessToken = 'pk.eyJ1Ijoia25pZmVib3NzIiwiYSI6ImNrOWlyazllcTE1NmQzZXBuZXh5MHVpM3QifQ.eNaU-QnXEb' +
    'cFzghOYUGVvA';
if (!mapboxgl.supported()) {
    alert('Your browser does not support Mapbox GL')
} else {
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        placeholder: 'Enter your address',
        countries: 'ca',
        types: 'address,poi',
        bbox: [-74.0917, 45.3579, -73.2711, 45.7378],
        proximity: [-73.65, 45.5087],
        // applies a client side filter to further limit results to those strictly within the Quebec region
        filter: function(item) {
            return item.context
                .map(function(i) {
                    return (
                        i.id.split('.').shift() === 'region' &&
                        i.text === 'Quebec'
                    );
                })
                .reduce(function(acc, cur) {
                    return acc || cur;
                });
        },
    });
    geocoder.on('result', function (e) {
        const coords = {
            coordinates: e.result.center,
            context: {
                city: e.result.context[e.result.context.length - 3]['text'],
                province: e.result.context[e.result.context.length - 2]['text'],
                country: e.result.context[e.result.context.length - 1]['text']
            },
            short: e.result.properties.address,
            place_name: e.result.place_name,
            place_type: e.result.place_type[0]
        };
        makePostRequest(coords).then(() => window.location.reload())
    });
    async function makePostRequest(req) {
        var token = document.head.querySelector('meta[name="csrf-token"]');
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        await axios.post('http://localhost/public/home', req);
    }
    geocoder.addTo('#geocoder')
}
