<?php

namespace App\Admin\Controllers;

use App\Models\GroupTour;
use App\Models\Tour;
use App\Models\TourType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class GroupTourController
 * @package App\Admin\Controllers
 */
class GroupTourController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.group_tours');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GroupTour());
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
        $form = new Form(new GroupTour());

        $form->tab( __('admin.main_info'), function (Form $form) {
            $form->multipleSelect('tours', __('admin.tours'))->options($this->getTours())->required();
            $form->text('title', __('admin.title'))->required();
            $form->hidden('alias')->required();
            $form->text('place', __('admin.place'))->required();
            $form->number('price_from', __('admin.price_from'))->required();
            $form->ckeditor('description', __('admin.description'))->required();
            $form->image('small_image', __('admin.small_image'))->help(__('admin.image_help', ['width' => 540, 'height' => 360]))->uniqueName()->required();
            $form->image('big_image', __('admin.big_image'))->help(__('admin.image_help', ['width' => 1920, 'height' => 450]))->uniqueName()->required();
            $form->switch('visible', __('admin.show'))->default(1);
            $form->number('order', __('admin.order'))->default(0);
        })->tab(__('admin.files'), function (Form $form) {
            $form->table('files', __('admin.files'), function ($table) {
                $table->text('title', __('admin.title'))->required();
                $table->url('file', __('admin.file_url'))->required();
            });
        })->tab(__('admin.faqs'), function (Form $form) {
            $form->table('faq', __('admin.faqs'), function ($table) {
                $table->text('question', __('admin.question'))->required();
                $table->textarea('answer', __('admin.answer'))->required();
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
    private function getTours(): array
    {
        return Tour::query()
            ->where('type', Tour::GROUP_TYPE)
            ->get()
            ->mapWithKeys(function (Tour $tour) {
                return [$tour->getKey() => $tour->title];
            })->all();
    }
}
