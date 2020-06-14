# Keeno Test
[![](resources/badge/badge.license.svg)](https://opensource.org/licenses/MIT)
[![](resources/badge/badge.style.svg)](https://prettier.io/)

### Run Project
- run `composer install`
- run `php artisan migrate --seed`

## Backend Routes

| Method | URI                | Action                  | Return                                              |
| ------ | ------------------ | ----------------------- | --------------------------------------------------- |
| GET    | /                  | Closure                 | welcome.blade.php with categories            |
| GET    | /products          | ProductController@index | all products as json                         |
| GET    | /product/{product} | ProductController@view  | a single product with product/view.blade.php |

Along with Laravel Default Auth Routes.

Hey! I have written 4 Test Case to check if  
- login and Registration are working
- Products & Products View routes are working

So, Run test 
- `php artisan test` or
- `vendor\bin\phpunit`

## Frontend

- Laravel Default Bootstrap, jQuery, Vue.js
- The Repository has production build of JS & CSS.
- If Required run `npm run production`

#### Libraries & Third Party
- [Vue-Awesome-Swiper](https://github.com/surmon-china/vue-awesome-swiper)
- [Vue-Star-Rating](https://github.com/craigh411/vue-star-rating)
- [Lorem Picsum](https://picsum.photos/) 