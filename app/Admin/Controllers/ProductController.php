<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Product;
use \App\Models\ProductCategory;
use \App\Models\ProductFilter;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('category.name', __('Product cat id'));
        $grid->column('title', __('Title'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_cat_id', __('Product cat id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('image', __('Image'));
        $show->field('alt', __('Alt'));
        $show->field('gallery', __('Gallery'));
        $show->field('rating', __('Rating'));
        $show->field('reviews', __('Reviews'));
        $show->field('description', __('Description'));
        $show->field('in_slock', __('In slock'));
        $show->field('key_features', __('Key features'));
        $show->field('specifications', __('Specifications'));
        $show->field('product_filter', __('Product filter'));
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
        $form = new Form(new Product());

        $form->select('product_cat_id', __('Product cat id'))->options(ProductCategory::pluck('name', 'id'))->default(null)->rules('required');
        $form->text('title', __('Title'));
       $form->hidden('slug');

        $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->title)));
        });
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->multipleImage('gallery', __('Gallery'));
        $form->text('rating', __('Rating'));
        $form->text('reviews', __('Reviews'));
        $form->textarea('description', __('Description'));
        $form->switch('in_slock', __('In slock'))->default(1);
        $form->textarea('key_features', __('Key features'));
        $form->textarea('specifications', __('Specifications'));
        $form->multipleSelect('product_filter', __('Product filter'))->options(ProductFilter::pluck('name', 'id'))->default(null)->rules('required');

        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_des', __('Seo des'));
        $form->textarea('seo_key', __('Seo key'));
        $form->switch('is_active', __('Is active'))->default(1);


        return $form;
    }
}
