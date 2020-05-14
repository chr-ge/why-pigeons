import React, { useState, useRef, useLayoutEffect } from 'react';
import ReactDOM from "react-dom";
import axios from 'axios';
import { TiHeartFullOutline, TiHeartOutline } from 'react-icons/ti';

export const FavoriteButton = ({ restaurant, fav }) => {
    const [ favorite, setFavorite ] = useState(JSON.parse(fav));

    const firstUpdate = useRef(true);
    useLayoutEffect(() => {
        if (firstUpdate.current) {
            firstUpdate.current = false;
            return;
        }
        axios.post(`http://localhost/why-pigeons/public/r/${restaurant}/favorite`)
            .catch(errors => {
                if (errors.response.status === 401) {
                    window.location = 'http://localhost/why-pigeons/public/login';
                }
            });
    }, [favorite]);

    return (
            <button
                aria-label="Favorite this restaurant"
                type="button"
                style={{ color: '#E81224' }}
                className="btn btn-sm"
                onClick={() => setFavorite(!favorite)}
            >
                { favorite
                    ? <TiHeartFullOutline
                        size='2.3em'
                        title="Unfavorite this restaurant"
                        />
                    : <TiHeartOutline
                        size='2.3em'
                        title="Favorite this restaurant"
                    />
                }
            </button>
    );
}

if (document.getElementById('favorite-button')) {
    const element = document.getElementById('favorite-button');
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<FavoriteButton {...props} />, element);
}
