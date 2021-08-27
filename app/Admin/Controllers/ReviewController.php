<?php

namespace App\Admin\Controllers;

use App\Models\Review;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Illuminate\Support\Str;

/**
 * Class ReviewController
 * @package App\Admin\Controllers
 */
class ReviewController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.reviews');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Review());
        $grid->column('name', __('admin.name'));
        $grid->column('text', __('admin.texts'))->display(function () {
            return Str::limit($this->text);
        });
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
        $form = new Form(new Review());
        $form->text('name', __('admin.name'))->required();
        $form->textarea('text', __('admin.texts'))->required();
        $form->image('image', __('admin.image'))->required();
        $form->switch('visible', __('admin.show'))->default(1);
        $form->number('order', __('admin.order'))->default(0);
        $form->disableReset();
        $form->disableViewCheck();
        $form->disableCreatingCheck();
        $form->disableEditingCheck();
        $form->tools(function (Tools $tools) {
            $tools->disableView();
        });

        return $form;
    }
}
