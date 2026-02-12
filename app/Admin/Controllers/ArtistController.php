<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Artist;
use \App\Models\VideoDetailsInsert;

class ArtistController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Artist';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Artist());

        $grid->column('id', __('Id'));
        $grid->column('banner_image', __('Banner image'))->image('/uploads/', '70', '70');
        $grid->column('image', __('Image'))->image('/uploads/', '70', '70');

        $grid->column('artist_name', __('Artist name'));
        $grid->column('slug', __('Slug'));



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
        $show = new Show(Artist::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('banner_image', __('Banner image'));
        $show->field('banner_alt', __('Banner alt'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('rating', __('Rating'));
        $show->field('performances', __('Performances'));
        $show->field('artist_name', __('Artist name'));
        $show->field('slug', __('Slug'));

        $show->field('artist_role', __('Artist role'));
        $show->field('location', __('Location'));
        $show->field('experience', __('Experience'));
        $show->field('watch_performance', __('Watch performance'));
        $show->field('live_performance', __('Live performance'));
        $show->field('awards', __('Awards'));
        $show->field('stage_shows', __('Stage shows'));
        $show->field('description', __('Description'));
        $show->field('achievements', __('Achievements'));
        $show->field('videos_itinary', __('Videos itinary'));
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
        $form = new Form(new Artist());
        $form->tab('Info', function ($form) {
            $form->image('banner_image', __('Banner image'));
            $form->text('banner_alt', __('Banner alt'));
            $form->image('image', __('Image'));
            $form->text('alt', __('Alt'));
            $form->text('rating', __('Rating'));
            $form->text('performances', __('Performances'));
            $form->text('artist_name', __('Artist name'));
            $form->hidden('slug', __('Slug'));

            $form->saving(function (Form $form) {

                $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($form->artist_name)));
            });

            $form->text('artist_role', __('Artist role'));
            $form->text('aritist_instaid', __('Artist Instagram ID'));
            $form->text('location', __('Location'));
            $form->text('experience', __('Experience'));
            $form->url('watch_performance', __('Watch performance'));
            $form->text('live_performance', __('Live performance'));
            $form->text('awards', __('Awards'));
            $form->text('stage_shows', __('Stage shows'));
            $form->ckeditor('description', __('Description'));
            $form->textarea('achievements', __('Achievements'));
        });
        $form->tab('Videos', function ($form) {
            // $form->text('videos_itinary', __('Videos itinary'));
            $form->hasMany('videositinary', 'PackageItinerary', function (Form\NestedForm $form) {
                $form->text('order_num', __('Order Num'));
                $form->image('video_image', __('Video image'));
                $form->text('alt', __('Alt'));
                $form->url('video_url', __('Video url'));

                $form->text('title', __('Title'));
                $form->text('view', __('View'));
            });
        });
        $form->tab('Seo Setting', function ($form) {


                $form->textarea('seo_title', __('Seo title'));
                $form->textarea('seo_des', __('Seo des'));
                $form->textarea('seo_key', __('Seo key'));
                $form->switch('is_active', __('Is active'))->default(1);


        });
        $form->tab('Instagram Post', function ($form) {
            // $form->text('videos_itinary', __('Videos itinary'));
            $form->hasMany('instagramitinary', 'Instagram Posts', function (Form\NestedForm $form) {
                $form->text('order_num', __('Order Num'));

                $form->image('image', __('Image'));
                $form->text('alt', __('Alt'));
                $form->text('likes_num', __('Likes num'));
                $form->text('comment_num', __('Comment num'));
                $form->text('post_title', __('Post title'));
            });
        });


        return $form;
    }
}
