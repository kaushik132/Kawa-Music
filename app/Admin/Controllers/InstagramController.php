<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Instagram;

class InstagramController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Instagram';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Instagram());

        $grid->column('id', __('Id'));
        $grid->column('artistname_id', __('Artistname id'));
        $grid->column('image', __('Image'));
        $grid->column('alt', __('Alt'));
        $grid->column('likes_num', __('Likes num'));
        $grid->column('comment_num', __('Comment num'));
        $grid->column('post_title', __('Post title'));
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
        $show = new Show(Instagram::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('artistname_id', __('Artistname id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('likes_num', __('Likes num'));
        $show->field('comment_num', __('Comment num'));
        $show->field('post_title', __('Post title'));
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
        $form = new Form(new Instagram());

        $form->number('artistname_id', __('Artistname id'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('likes_num', __('Likes num'));
        $form->text('comment_num', __('Comment num'));
        $form->text('post_title', __('Post title'));

        return $form;
    }
}
