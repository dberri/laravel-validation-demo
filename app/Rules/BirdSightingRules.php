<?php

namespace App\Rules;

class BirdSightingRules
{
    public static function birdRules()
    {
        return [
            'common_name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'quantity' => 'nullable|integer|min:1',
        ];
    }

    public static function locationRules()
    {
        return [
            'sighted_at' => ['required', 'date', new SightedInMarch],
            'latitude' => 'required|numeric',
            'longitude' => ['required', 'numeric'],
        ];
    }

    public static function updateRules()
    {
        return [
            // 
        ];
    }
}
