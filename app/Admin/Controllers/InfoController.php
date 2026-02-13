<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Info;

class InfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Info());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('call', __('Call'));
        $grid->column('address', __('Address'));
        $grid->column('business_hours', __('Business hours'));
        $grid->column('map', __('Map'));
        $grid->column('facebook_link', __('Facebook link'));
        $grid->column('instagram_link', __('Instagram link'));
        $grid->column('twitter_link', __('Twitter link'));
        $grid->column('youtube_link', __('Youtube link'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Info::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('call', __('Call'));
        $show->field('address', __('Address'));
        $show->field('business_hours', __('Business hours'));
        $show->field('map', __('Map'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('instagram_link', __('Instagram link'));
        $show->field('twitter_link', __('Twitter link'));
        $show->field('youtube_link', __('Youtube link'));
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
        $form = new Form(new Info());

        $form->email('email', __('Email'));
        $form->text('call', __('Call'));
        $form->text('address', __('Address'));
        $form->text('business_hours', __('Business hours'));
        $form->text('map', __('Map'));
        $form->text('facebook_link', __('Facebook link'));
        $form->text('instagram_link', __('Instagram link'));
        $form->text('twitter_link', __('Twitter link'));
        $form->text('youtube_link', __('Youtube link'));

        return $form;
    }
}
