<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KikoDataHandlerController extends Controller {

    private $validationRules = [
        'email' => 'required|email'
    ];

    private $validationMessages = [
        'email.required' => 'The email field is required.',
        'email.email' => 'The email must be a valid email address.'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() { }

    //

    public function run(Request $request) {
        $validatedData = $request->validate($this->validationRules, $this->validationMessages);
        Session::put('kikoUserData', $request->all());
        return redirect('/clientela-form');
    }
}