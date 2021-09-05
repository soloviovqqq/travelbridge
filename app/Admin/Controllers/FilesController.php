<?php

namespace App\Admin\Controllers;

use App\Models\File;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Controllers\AdminController;

/**
 * Class FilesController
 * @package App\Admin\Controllers
 */
class FilesController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.files');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new File());
        $grid->column('file', __('admin.file'))->display(function () {
            return $this->file_link;
        });
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
        $form = new Form(new File());
        $form->file('file', __('admin.file'))->required();
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
