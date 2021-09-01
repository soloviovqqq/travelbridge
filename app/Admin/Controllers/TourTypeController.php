<?php

namespace App\Admin\Controllers;

use App\Models\TourType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Support\Str;

/**
 * Class CategoryController
 * @package App\Admin\Controllers
 */
class TourTypeController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.tour_types');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TourType());
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
        $form = new Form(new TourType());
        $form->text('icon', __('admin.icon'))->help(__('admin.icon_help'))->required();
        $form->select('color', __('admin.color'))->options($this->getColors())->help($this->getColorHelp())->required();
        $form->text('title',  __('admin.title'))->required();
        $form->hidden('alias')->required();
        $form->ckeditor('description', __('admin.description'))->required();
        $form->image('small_image', __('admin.small_image'))->help(__('admin.image_help', ['width' => 540, 'height' => 360]))->uniqueName()->required();
        $form->image('big_image', __('admin.big_image'))->help(__('admin.image_help', ['width' => 1920, 'height' => 450]))->uniqueName()->required();
        $form->switch('visible', __('admin.show'))->default(1);
        $form->number('order', __('admin.order'))->default(0);
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
    private function getColors(): array
    {
        return collect(TourType::COLORS)->mapWithKeys(function ($color) {
            return [$color => $color];
        })->toArray();
    }

    /**
     * @return string
     */
    private function getColorHelp(): string
    {
        return '<style> span.tour-label { color: white; padding: 1px 8px; border-radius: 5px}</style> ' .
            '<span class="tour-label" style="background-color: #f0626c;">rosy-pink</span> ' .
            '<span class="tour-label" style="background-color: #d763d7;">purple</span> ' .
            '<span class="tour-label" style="background-color: #5b5ff9;">blue</span> ' .
            '<span class="tour-label" style="background-color: #ffb44f;">orange</span> ' .
            '<span class="tour-label" style="background-color: #846fcd;">charcoal-purple</span> ' .
            '<span class="tour-label" style="background-color: #78cc58;">green</span>';
    }
}
