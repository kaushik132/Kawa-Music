<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Seo;

class SeoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Seo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Seo());

        $grid->column('id', __('Id'));
        $grid->column('seo_title_home', __('Seo title home'));
        $grid->column('seo_des_home', __('Seo des home'));
        $grid->column('seo_key_home', __('Seo key home'));
      

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
        $show = new Show(Seo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seo_title_home', __('Seo title home'));
        $show->field('seo_des_home', __('Seo des home'));
        $show->field('seo_key_home', __('Seo key home'));
        $show->field('seo_title_product', __('Seo title product'));
        $show->field('seo_des_product', __('Seo des product'));
        $show->field('seo_key_product', __('Seo key product'));
        $show->field('seo_title_blog', __('Seo title blog'));
        $show->field('seo_des_blog', __('Seo des blog'));
        $show->field('seo_key_blog', __('Seo key blog'));
        $show->field('seo_title_contact', __('Seo title contact'));
        $show->field('seo_des_contact', __('Seo des contact'));
        $show->field('seo_key_contact', __('Seo key contact'));
        $show->field('seo_title_privacy', __('Seo title privacy'));
        $show->field('seo_des_privacy', __('Seo des privacy'));
        $show->field('seo_key_privacy', __('Seo key privacy'));
        $show->field('seo_title_term', __('Seo title term'));
        $show->field('seo_des_term', __('Seo des term'));
        $show->field('seo_key_term', __('Seo key term'));
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
        $form = new Form(new Seo());

        $form->text('seo_title_home', __('Seo title home'));
        $form->textarea('seo_des_home', __('Seo des home'));
        $form->textarea('seo_key_home', __('Seo key home'));
        $form->text('seo_title_product', __('Seo title product'));
        $form->textarea('seo_des_product', __('Seo des product'));
        $form->textarea('seo_key_product', __('Seo key product'));
        $form->text('seo_title_blog', __('Seo title blog'));
        $form->textarea('seo_des_blog', __('Seo des blog'));
        $form->textarea('seo_key_blog', __('Seo key blog'));
        $form->text('seo_title_contact', __('Seo title contact'));
        $form->textarea('seo_des_contact', __('Seo des contact'));
        $form->textarea('seo_key_contact', __('Seo key contact'));
        $form->text('seo_title_privacy', __('Seo title privacy'));
        $form->textarea('seo_des_privacy', __('Seo des privacy'));
        $form->textarea('seo_key_privacy', __('Seo key privacy'));
        $form->text('seo_title_term', __('Seo title term'));
        $form->textarea('seo_des_term', __('Seo des term'));
        $form->textarea('seo_key_term', __('Seo key term'));

        return $form;
    }
}
