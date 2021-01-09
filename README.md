<p align="center">
  <a href="" rel="noopener">
  <img width=175px height=175px src="public/svg/dove.svg" alt="Project logo"></a>
</p>

<h3 align="center">Food and Maybe Some Pigeons?</h3>

<div align="center">

  [![Status](https://img.shields.io/badge/status-active-success.svg)]() 
  [![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center">Quick food delivery right to your door.</p>
<br>

Restaurant Page             |  Checkout
:-------------------------:|:-------------------------:
![image](https://s3.amazonaws.com/poly-screenshots.angel.co/Project/c5/1243967/ccb8d92d47cff5c58a5549b927bda0e1-original.png)  |  ![image](https://s3.amazonaws.com/poly-screenshots.angel.co/Project/c5/1243967/52e64b5fa189d6bd67ac092838a2accf-original.png) 

Restaurant Dashboard - **Menu**             |  Restaurant Dashboard - **Feedback**
:-------------------------:|:-------------------------:
![image](https://s3.amazonaws.com/poly-screenshots.angel.co/Project/c5/1243967/9a2c9fad85dc63886ae09ba078f7bf94-original.png)  |  ![image](https://s3.amazonaws.com/poly-screenshots.angel.co/Project/c5/1243967/729789147b031847c7124a988cbea34e-original.png) 

## Installation

1. Clone the repo and `cd` into it
2. `composer install`
3. Create a `pigeon` sql database and set your database credentials in the `.env` file.
4. Set your `APP_URL` in your `.env` file.
5. `npm install`
6. `npm run dev`
7. `php artisan storage:link`
8. `php artisan migrate --seed`

## Built With Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. [documentation](https://laravel.com/docs)

## APIs
- Payments: https://stripe.com/docs/stripe-js<br> 
- Maps & Geocoding: https://docs.mapbox.com/mapbox-gl-js/api/ <br>
- Emails: https://mailtrap.io/

## Contributors
<a href="https://github.com/chr-ge/why-pigeons/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=chr-ge/why-pigeons" />
</a>

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
