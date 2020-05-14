import React, { useState } from 'react';
import { render } from 'react-dom';
import axios from 'axios';
import StarRatingComponent from 'react-star-rating-component';

export const RestaurantReview = ({ order, restaurant }) => {
    const [ rating, setRating ] = useState(0);
    const [ comment, setComment ] = useState('');

    const onStarClick = (nextValue, prevValue, name) => {
        setRating(nextValue);
    };

    const handleChange = (event) => {
        setComment(event.target.value);
    }

    const handleFormSubmit = (event) => {
        event.preventDefault();
        const data = {
            'rating': rating,
            'comment': comment
        }
        axios
            .post(`http://localhost/why-pigeons/public/u/orders/${order}/review`, data)
            .then(window.location.reload())
            .catch((error) => {
                if (error.response.status === 401) {
                    window.location = 'http://localhost/why-pigeons/public/login';
                }
                console.log(error);
            });
    };

    return(
        <form onSubmit={handleFormSubmit}>
            <div style={{fontSize: 56,margin:'auto',width:'max-content'}}>
                <StarRatingComponent
                    name="rating"
                    starColor="#ffb400"
                    emptyStarColor="#cecece"
                    value={rating}
                    onStarClick={onStarClick}
                />
            </div>
            <div className='form-group'>
                <label htmlFor='comment' className='h5'>How was your experience with {restaurant}?</label>
                <input onChange={handleChange} id='comment' type='text' name='comment' className='form-control' placeholder='Leave Feedback' />
                <button
                    type='submit'
                    className='btn btn-primary mt-3 text-center float-right'
                    disabled={rating === 0}
                >
                    Submit
                </button>
            </div>
        </form>
    )
}

if (document.getElementById('restaurant-review')) {
    const element = document.getElementById('restaurant-review');
    const props = Object.assign({}, element.dataset)

    render(<RestaurantReview {...props} />, element);
}
