<?php

namespace App\Admin\Controllers;

use App\Models\File;
use App\Models\MainInfo;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Controllers\AdminController;
use Illuminate\Support\Str;

/**
 * Class AgencyTextController
 * @package App\Admin\Controllers
 */
class AgencyTextController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.agency_text');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MainInfo());
        $grid->column('agency_text', __('admin.texts'))->display(function () {
            return Str::limit(strip_tags($this->agency_text));
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
        $form->ckeditor('agency_text', __('admin.agency_text'))->required();
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
