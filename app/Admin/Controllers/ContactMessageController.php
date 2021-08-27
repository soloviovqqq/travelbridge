<?php

namespace App\Admin\Controllers;

use App\Models\ContactMessage;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Widgets\Table;


/**
 * Class ContactMessageController
 * @package App\Admin\Controllers
 */
class ContactMessageController extends AdminController
{
    /**
     * @return string|null
     */
    protected function title()
    {
        return __('admin.contact_messages');
    }

    /**
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactMessage());
        $grid->column('name', __('admin.name'));
        $grid->column('email', __('Email'))->expand(function (ContactMessage $message) {
            return new Table([__('admin.message')], [$message->message => '']);
        });
        $grid->column('phone', __('admin.phone'));
        $grid->column('created_at', __('admin.created_at'))->display(function () {
            return $this->created_at->toDateTimeString();
        });
        $grid->column('shown', __('admin.shown'))->switch();
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->disableExport();
        $grid->disableActions();

        return $grid;
    }

    /**
     * Make a form builder.
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ContactMessage());
        $form->switch('shown', __('admin.show'));
        return $form;
    }
}
