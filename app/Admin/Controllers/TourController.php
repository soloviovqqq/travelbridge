<?php

namespace App\Admin\Controllers;

use App\Models\Tour;
use App\Models\TourType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Support\Str;

/**
 * Class TourController
 * @package App\Admin\Controllers
 */
class TourController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.tours');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tour());
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
        $form = new Form(new Tour());

        $form->tab( __('admin.main_info'), function (Form $form) {
            $form->select('tour_type_id', __('admin.tour_type'))->options($this->getTourTypes())->required();
            $form->radio('type', __('admin.type'))->options([Tour::PUBLIC_TYPE => __('admin.public_type'), Tour::GROUP_TYPE => __('admin.group_type')]);
            $form->text('title',  __('admin.title'))->required();
            $form->hidden('alias')->required();
            $form->text('place', __('admin.place'))->required();
            $form->number('symbol_price', __('admin.symbol_price'))->default(2)->min(1)->max(4);
            $form->text('dates', __('admin.dates'))->required();
            $form->textarea('small_description', __('admin.small_description'))->required();
            $form->textarea('description', __('admin.description'))->required();
            $form->url('video_link', __('admin.video_link'));
            $form->image('small_image', __('admin.small_image'))->help(__('admin.image_help', ['width' => 500, 'height' => 420]))->uniqueName()->required();
            $form->switch('hot', __('admin.hot'))->default(0);
            $form->switch('visible', __('admin.show'))->default(1);
            $form->number('order', __('admin.order'))->default(0);
        })->tab(__('admin.info_block'), function (Form $form) {
            $form->text('info_dates', __('admin.info_dates'));
            $form->text('info_places', __('admin.info_places'));
            $form->text('info_meals', __('admin.info_meals'));
            $form->text('info_medical', __('admin.info_medical'));
            $form->text('info_kids', __('admin.info_kids'));
            $form->text('info_price', __('admin.info_price'));

            $form->table('additional_info', __('admin.additional_info'), function ($table) {
                $table->text('title', __('admin.title'));
                $table->textarea('text', __('admin.texts'));
            });
        })->tab(__('admin.images'), function (Form $form) {
            $form->multipleImage('images', __('admin.images'))->removable();
        })->tab(__('admin.schedule'), function (Form $form) {
            $form->table('schedule', __('admin.schedule'), function ($table) {
                $table->text('title', __('admin.title'));
                $table->text('dates', __('admin.dates'));
                $table->text('amount', __('admin.amount'));
            });
        })->tab(__('admin.program'), function (Form $form) {
            $form->table('program', __('admin.program'), function ($table) {
                $table->text('title', __('admin.title'));
                $table->textarea('description', __('admin.description'));
            });
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
    private function getTourTypes(): array
    {
        return TourType::all()->mapWithKeys(function (TourType $country) {
            return [$country->getKey() => $country->title];
        })->all();
    }

}
