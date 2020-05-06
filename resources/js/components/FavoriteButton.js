import React, { useState, useRef, useLayoutEffect } from 'react';
import ReactDOM from "react-dom";
import axios from 'axios';
import { FaBookmark, FaRegBookmark } from 'react-icons/fa';

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
                type="button"
                className="btn btn-outline-info btn-sm"
                onClick={() => setFavorite(!favorite)}
            >
                { favorite ? <FaBookmark /> : <FaRegBookmark /> }
            </button>
    );
}

if (document.getElementById('favorite-button')) {
    const element = document.getElementById('favorite-button');
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<FavoriteButton {...props} />, element);
}
