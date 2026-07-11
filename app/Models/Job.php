<?php

namespace App\Models;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'teacher',
                'salary' => '$30000'
            ],
            [
                'id' => 3,
                'title' => 'developer',
                'salary' => '$10000'
            ],
        ];
    }
}