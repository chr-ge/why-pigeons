import React, { Component } from 'react';
import { render } from 'react-dom';
import mapboxgl from 'mapbox-gl';

mapboxgl.accessToken = 'pk.eyJ1Ijoia25pZmVib3NzIiwiYSI6ImNrOWlyazllcTE1NmQzZXBuZXh5MHVpM3QifQ.eNaU-QnXEbcFzghOYUGVvA';

class MapBox extends Component {

    componentDidMount() {
        const map = new mapboxgl.Map({
            container: this.mapContainer,
            style: 'mapbox://styles/mapbox/light-v10',
            center: [this.props.lng, this.props.lat],
            zoom: 14.5
        });

        map.on('load', () => {
            const coords = {
                'type': 'FeatureCollection',
                'features': [
                    {
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [this.props.lng, this.props.lat]
                        }
                    }
                ]
            }

            map.loadImage(
                'http://localhost/why-pigeons/public/svg/dove.png',
                function(error, image) {
                    if (error) throw error;
                    map.addImage('pigeon', image);
                    map.addSource('point', {
                        'type': 'geojson',
                        'data': coords
                    });
                    map.addLayer({
                        'id': 'points',
                        'type': 'symbol',
                        'source': 'point',
                        'layout': {
                            'icon-image': 'pigeon',
                            'icon-size': 0.10
                        }
                    });
                }
            )
        });
    }

    render() {
        return (
            <div ref={el => this.mapContainer = el} className="mapContainer"/>
        )
    }
}

export default MapBox;

if (document.getElementById('mapbox')) {
    const element = document.getElementById('mapbox');
    const props = Object.assign({}, element.dataset)

    render(<MapBox {...props}/>, element);
}
