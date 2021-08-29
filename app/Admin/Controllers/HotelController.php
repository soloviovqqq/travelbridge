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
            $form->image('small_image', __('admin.small_image'))->help(__('admin.image_help', ['width' => 540, 'height' => 500]))->uniqueName()->required();
            $form->multipleSelect('amenities', __('admin.amenities'))->options($this->getAmenities());
            $form->switch('visible', __('admin.show'))->default(1);
            $form->number('order', __('admin.order'))->default(0);
        })->tab(__('admin.info_block'), function (Form $form) {
            $form->text('info_rating', __('admin.info_rating'));
            $form->text('info_meals', __('admin.info_meals'));
            $form->text('info_medical', __('admin.info_medical'));
            $form->text('info_kids', __('admin.info_kids'));
            $form->text('info_price', __('admin.info_price'));

            $form->table('additional_info', __('admin.additional_info'), function ($table) {
                $table->text('title', __('admin.title'));
                $table->textarea('text', __('admin.texts'));
            });
        })->tab(__('admin.images'), function (Form $form) {
            $form->multipleImage('images', __('admin.images'))->help(__('admin.image_help', ['width' => 1440, 'height' => 400]))->uniqueName()->removable();
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

    /**
     * @return array
     */
    private function getAmenities(): array
    {
        return collect(Hotel::AMENITIES)->mapWithKeys(function ($amenity) {
            return [$amenity['key'] => $amenity['text']];
        })->toArray();
    }
}
