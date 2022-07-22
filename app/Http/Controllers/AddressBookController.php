<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;

class AddressBookController extends Controller
{

    public function listAll() {

        // $addressBook = new AddressBook;
        $data = AddressBook::findAll();
        print("<pre>".print_r($data,true)."</pre>");

    }
}
