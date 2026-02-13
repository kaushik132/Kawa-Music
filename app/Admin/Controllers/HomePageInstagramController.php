<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\HomePageInstagram;

class HomePageInstagramController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomePageInstagram';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomePageInstagram());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('/uploads/', '70', '70');



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
        $show = new Show(HomePageInstagram::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('comments', __('Comments'));
        $show->field('likes', __('Likes'));
        $show->field('title', __('Title'));
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
        $form = new Form(new HomePageInstagram());

        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('comments', __('Comments'));
        $form->text('likes', __('Likes'));
        $form->text('title', __('Title'));

        return $form;
    }
}
