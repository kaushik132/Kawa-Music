<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\VideoDetailsInsert;

class VideoDetailsInsertController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'VideoDetailsInsert';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VideoDetailsInsert());

        $grid->column('id', __('Id'));
        $grid->column('order_num', __('Order num'));
        $grid->column('video_image', __('Video image'));
        $grid->column('alt', __('Alt'));
        $grid->column('video_url', __('Video url'));
        $grid->column('artist_id', __('Artist id'));
        $grid->column('title', __('Title'));
        $grid->column('view', __('View'));
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
        $show = new Show(VideoDetailsInsert::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_num', __('Order num'));
        $show->field('video_image', __('Video image'));
        $show->field('alt', __('Alt'));
        $show->field('video_url', __('Video url'));
        $show->field('artist_id', __('Artist id'));
        $show->field('title', __('Title'));
        $show->field('view', __('View'));
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
        $form = new Form(new VideoDetailsInsert());

        $form->number('order_num', __('Order num'));
        $form->text('video_image', __('Video image'));
        $form->text('alt', __('Alt'));
        $form->text('video_url', __('Video url'));
        $form->number('artist_id', __('Artist id'));
        $form->text('title', __('Title'));
        $form->text('view', __('View'));

        return $form;
    }
}
