<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['hotels']='home/hotels-list';
$route['hotel/(:any)']='home/hotel-details/$1';
$route['hotels/book-your-room']='home/book_your_room';
$route['search']='home/search';
$route['confirm/(:num)']='home/confirm/$1';
$route['booking/cancelled']='home/cancelled';
$route['thank-you']='home/thank-you';
$route['signin']='home/signin';
$route['signup']='home/signup';
$route['signout']='home/signout';
$route['my-bookings']='home/my-bookings';