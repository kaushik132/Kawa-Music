<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('email', __('Email'));
        $grid->column('country_code', __('Country code'));
        $grid->column('phone', __('Phone'));
        $grid->column('subject', __('Subject'));
        $grid->column('message', __('Message'));


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email', __('Email'));
        $show->field('country_code', __('Country code'));
        $show->field('phone', __('Phone'));
        $show->field('subject', __('Subject'));
        $show->field('message', __('Message'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Contact());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->email('email', __('Email'));
        $form->text('country_code', __('Country code'));
        $form->phonenumber('phone', __('Phone'));
        $form->textarea('subject', __('Subject'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
