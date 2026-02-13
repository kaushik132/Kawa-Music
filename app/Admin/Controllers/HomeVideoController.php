<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\HomeVideo;

class HomeVideoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'HomeVideo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomeVideo());

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
        $show = new Show(HomeVideo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('video_url', __('Video url'));
        $show->field('title', __('Title'));
        $show->field('views', __('Views'));
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
        $form = new Form(new HomeVideo());

        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->url('video_url', __('Video url'));
        $form->text('title', __('Title'));
        $form->text('views', __('Views'));

        return $form;
    }
}
