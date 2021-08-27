<?php

namespace Database\Seeders;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Class AdminSeeder
 * @package Database\Seeders
 */
class AdminSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $this->updateAdmin();
        $this->createMenu();
    }

    /**
     * @return void
     */
    private function updateAdmin(): void
    {
        Administrator::query()->updateOrCreate([
            'username' => 'admin',
        ], [
            'password' => Hash::make('@ZEEpL{6BRrjm~kW'),
            'name' => 'Administrator'
        ]);
    }

    /**
     * @return void
     */
    private function createMenu(): void
    {
        $menuModel = config('admin.database.menu_model');
        $menuModel::query()->truncate();
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 0,
            'title' => 'admin.tour_types',
            'icon' => 'fa-sitemap',
            'uri' => '/tour-types'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 1,
            'title' => 'admin.countries',
            'icon' => 'fa-globe',
            'uri' => '/countries'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 2,
            'title' => 'admin.reviews',
            'icon' => ' fa-commenting-o',
            'uri' => '/reviews'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 3,
            'title' => 'admin.faqs',
            'icon' => ' fa-question',
            'uri' => '/faqs'
        ]);
    }
}
