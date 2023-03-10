<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'descrition' => 'akjsdbasjdnaskdnaskjdnaskjdnaskjdnaksjdnaskjdnjkasdn'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'descrition' => 'akjsdbasjdnaskdnaskjdnaskjdnaskjdnaksjdnaskjdnjkasdn'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id)
                return $listing;
        }
    }
}
