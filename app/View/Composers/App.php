<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * Views that receive this data
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data passed to all views
     */
    public function with(): array
    {
        return [
            'site' => [
                'name' => get_bloginfo('name'),
                'description' => get_bloginfo('description'),
                'url' => home_url(),
            ],

            // Homepage roles for Blade
            'roles' => $this->roles(),
        ];
    }

    /**
     * Homepage roles data
     */
    protected function roles(): array
    {
        return [
            [
                'title' => get_field('role_1_title'),
                'image' => get_field('role_1_image')['url'] ?? '',
            ],
            [
                'title' => get_field('role_2_title'),
                'image' => get_field('role_2_image')['url'] ?? '',
            ],
            [
                'title' => get_field('role_3_title'),
                'image' => get_field('role_3_image')['url'] ?? '',
            ],
            [
                'title' => get_field('role_4_title'),
                'image' => get_field('role_4_image')['url'] ?? '',
            ],
            [
                'title' => get_field('role_5_title'),
                'image' => get_field('role_5_image')['url'] ?? '',
            ],
        ];
    }
}