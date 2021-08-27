<?php

namespace App\Admin\Controllers;

use App\Models\Faq;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Support\Str;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Controllers\AdminController;

/**
 * Class FaqController
 * @package App\Admin\Controllers
 */
class FaqController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.faqs');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Faq());
        $grid->column('question', __('admin.question'));
        $grid->column('answer', __('admin.answer'))->display(function () {
            return Str::limit($this->answer);
        });
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
        $form = new Form(new Faq());
        $form->text('question')->required();
        $form->textarea('answer')->required();
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
