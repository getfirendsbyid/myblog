<?php
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('主页', route('home'));
});

// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('博客', route('blog'));
});

Breadcrumbs::register('article', function($breadcrumbs)
{

    $breadcrumbs->parent('home');
    $breadcrumbs->push('文章', route('article'));

});
