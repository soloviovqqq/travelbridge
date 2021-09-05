<?php

namespace App\Admin\Controllers;

use App\Models\MainInfo;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Controllers\AdminController;

/**
 * Class GalleryController
 * @package App\Admin\Controllers
 */
class GalleryController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.images');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MainInfo());
        $grid->column('gallery', __('admin.images'))->display(function () {
            return ($this->gallery ? count($this->gallery) : 0) . ' фото';
        });
        $grid->disableFilter();
        $grid->disableExport();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->actions(function (Actions $action) {
            $action->disableView();
            $action->disableDelete();
        });

        return $grid;
    }

    /**
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MainInfo());
        $form->multipleImage('gallery', __('admin.images'))->removable()->required();
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
