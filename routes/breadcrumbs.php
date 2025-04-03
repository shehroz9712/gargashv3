<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Admins
Breadcrumbs::for('admin.admins.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Admins List', route('admin.admins.index'));
});

Breadcrumbs::for('admin.admins.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.admins.index');
    $trail->push('Add', route('admin.admins.create'));
});

Breadcrumbs::for('admin.admins.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.admins.index');
    $trail->push($data->title, route('admin.admins.show', $data->id));
});

Breadcrumbs::for('admin.admins.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.admins.index');
    $trail->push('Edit', route('admin.admins.edit', $data->id));
});

// Blogs
Breadcrumbs::for('admin.blogs.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Blogs List', route('admin.blogs.index'));
});

Breadcrumbs::for('admin.blogs.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.blogs.index');
    $trail->push('Add', route('admin.blogs.create'));
});

Breadcrumbs::for('admin.blogs.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.blogs.index');
    $trail->push($data->title, route('admin.blogs.show', $data->id));
});

Breadcrumbs::for('admin.blogs.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.blogs.index');
    $trail->push('Edit', route('admin.blogs.edit', $data->id));
});
