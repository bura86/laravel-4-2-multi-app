<?php

namespace Admin;

use View;
use Model;
use Classes;

class HomeController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  | Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function showWelcome() {
    return View::make('hello');
  }

  public function showTest() {
    return View::make('test');
  }

  public function showClass() {
    $test_class = new Classes\testClass();
    return $test_class->toString();
  }

  public function showModel() {
    $test_model = new Model\testModel();
    return $test_model->toString();
  }

}
