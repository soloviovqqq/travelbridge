<?php

namespace App\Admin\Controllers;

use App\Models\Country;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Support\Str;

/**
 * Class CountryController
 * @package App\Admin\Controllers
 */
class CountryController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.countries');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Country());
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
        $form = new Form(new Country());
        $form->text('title',  __('admin.title'))->required();
        $form->hidden('alias')->required();
        $form->text('slogan',  __('admin.slogan'));
        $form->textarea('description',  __('admin.description'))->required();
        $form->text('currency',  __('admin.currency'))->required();
        $form->text('languages',  __('admin.languages'))->required();
        $form->image('small_image',  __('admin.small_image'))->help(__('admin.image_help', ['width' => 540, 'height' => 720]))->required();
        $form->image('big_image',  __('admin.big_image'))->help(__('admin.image_help', ['width' => 1440, 'height' => 400]))->required();
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
}
