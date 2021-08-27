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
        $grid->column('created_at', __('admin.created_at'));
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
        $iconHelp = 'Иконки нужно брать лишь <a href="https://icons8.com/line-awesome" target="_blank">тут</a> и сохранять в формате las la-fish';
        $form = new Form(new TourType());
        $form->text('icon')->help($iconHelp)->required();
        $form->text('title')->required();
        $form->hidden('alias')->required();
        $form->textarea('description')->required();
        $form->image('small_image')->required();
        $form->image('big_image')->required();
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
