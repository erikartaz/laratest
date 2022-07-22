<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;

class AddressBookController extends Controller
{

    public function listAll() {

        $data = AddressBook::findAll();
        print("<pre>".print_r($data,true)."</pre>");

    }

    public function showtestpage()
    {
        return view('showtestpage');
    }
}
