<?php

namespace Database\Seeders;

use App\Models\MainInfo;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\AdminTablesSeeder;
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
        MainInfo::query()->firstOrCreate([
            'agency_text' => '',
            'gallery' => '[]',
        ]);
        $this->call(AdminTablesSeeder::class);
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
            'order' => 0,
            'title' => 'admin.tours',
            'icon' => 'fa-suitcase',
            'uri' => '/tours'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 0,
            'title' => 'admin.group_tours',
            'icon' => 'fa-plane',
            'uri' => '/group-tours'
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
            'order' => 1,
            'title' => 'admin.hotels',
            'icon' => 'fa-building',
            'uri' => '/hotels'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 2,
            'title' => 'admin.reviews',
            'icon' => 'fa-commenting-o',
            'uri' => '/reviews'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 3,
            'title' => 'admin.faqs',
            'icon' => 'fa-question',
            'uri' => '/faqs'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 4,
            'title' => 'admin.contact_messages',
            'icon' => 'fa-envelope',
            'uri' => '/contact-messages'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 5,
            'title' => 'admin.agency_text',
            'icon' => 'fa-font',
            'uri' => '/agency-text'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 6,
            'title' => 'admin.files',
            'icon' => 'fa-files-o',
            'uri' => '/files'
        ]);
        $menuModel::query()->create([
            'parent_id' => 0,
            'order' => 7,
            'title' => 'admin.exchange_rates',
            'icon' => 'fa-money',
            'uri' => '/exchange-rates'
        ]);
    }
}
