<?php

namespace App\Admin\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Support\Str;

/**
 * Class HotelController
 * @package App\Admin\Controllers
 */
class HotelController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.hotels');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hotel());
        $grid->column('title', __('admin.title'));
        $grid->column('visible', __('admin.show'))->switch();
        $grid->column('created_at', __('admin.created_at'))->display(function () {
            return $this->created_at->toDateTimeString();
        });
        $grid->disableFilter();
        $grid->disableExport();
        $grid->actions(function (Actions $action) {
            $action->disableView();
        });

        return $grid;
    }

    /**
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Hotel());

        $form->tab( __('admin.main_info'), function (Form $form) {
            $form->select('country_id', __('admin.country'))->options($this->getCountries())->required();
            $form->text('title',  __('admin.title'))->required();
            $form->hidden('alias')->required();
            $form->text('place', __('admin.place'))->required();
            $form->number('rating', __('admin.rating'))->default(5)->min(1)->max(5);
            $form->number('symbol_price', __('admin.symbol_price'))->default(2)->min(1)->max(4);
            $form->textarea('description', __('admin.description'))->required();
            $form->url('video_link', __('admin.video_link'));
            $form->image('small_image', __('admin.small_image'))->help(__('admin.image_help', ['width' => 540, 'height' => 500]))->required();
            $form->switch('visible', __('admin.show'))->default(1);
            $form->number('order', __('admin.order'))->default(0);
        })->tab(__('admin.info_block'), function (Form $form) {
            $form->text('info_rating', __('admin.info_rating'));
            $form->text('info_meals', __('admin.info_meals'));
            $form->text('info_medical', __('admin.info_medical'));
            $form->text('info_kids', __('admin.info_kids'));
            $form->text('info_price', __('admin.info_price'));
        })->tab(__('admin.amenities'), function (Form $form) {
            $form->switch('wifi', __('admin.wifi'))->default(1);
            $form->switch('reservations', __('admin.reservations'))->default(1);
            $form->switch('credit_cards', __('admin.credit_cards'))->default(1);
            $form->switch('non_smoking', __('admin.non_smoking'))->default(1);
            $form->switch('air_conditioner', __('admin.air_conditioner'))->default(1);
            $form->switch('car_parking', __('admin.car_parking'))->default(1);
            $form->switch('cocktails', __('admin.cocktails'))->default(1);
            $form->switch('pool', __('admin.pool'))->default(1);
        })->tab(__('admin.faqs'), function (Form $form) {
            $form->table('faq', __('admin.faqs'), function ($table) {
                $table->text('question', __('admin.question'));
                $table->textarea('answer', __('admin.answer'));
            });
        });
        $form->disableReset();
        $form->disableViewCheck();
        $form->disableCreatingCheck();
        $form->disableEditingCheck();
        $form->tools(function (Tools $tools) {
            $tools->disableView();
        });
        $form->saving(function ($form) {
            $form->alias = Str::slug($form->title);
        });

        return $form;
    }

    /**
     * @return array
     */
    private function getCountries(): array
    {
        return Country::all()->mapWithKeys(function (Country $country) {
            return [$country->getKey() => $country->title];
        })->all();
    }
}