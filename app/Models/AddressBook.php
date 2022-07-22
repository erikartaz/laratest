<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    use HasFactory;

    protected $table = 'address_books';

    public static function findAll() {
        foreach (AddressBook::all() as $item) {
            $data[] = [
                'name' => $item->name, 
                'surname' => $item->surname, 
                'telephone' => $item->telephone
            ];
        }

        return $data;
    }

}
