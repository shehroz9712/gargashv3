<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Admins
Breadcrumbs::for('admin.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Users List', route('admin.users.index'));
});

Breadcrumbs::for('admin.users.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.users.index');
    $trail->push('Add', route('admin.users.create'));
});

Breadcrumbs::for('admin.users.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.users.index');
    $trail->push($data->title, route('admin.users.show', $data->id));
});

Breadcrumbs::for('admin.users.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.users.index');
    $trail->push('Edit', route('admin.users.edit', $data->id));
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


// Brands
Breadcrumbs::for('admin.brands.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Brands List', route('admin.brands.index'));
});

Breadcrumbs::for('admin.brands.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.brands.index');
    $trail->push('Add', route('admin.brands.create'));
});

Breadcrumbs::for('admin.brands.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.brands.index');
    $trail->push($data->name, route('admin.brands.show', $data->id));
});

Breadcrumbs::for('admin.brands.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.brands.index');
    $trail->push('Edit', route('admin.brands.edit', $data->id));
});

// Categories
Breadcrumbs::for('admin.categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories List', route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.categories.index');
    $trail->push('Add', route('admin.categories.create'));
});

Breadcrumbs::for('admin.categories.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.categories.index');
    $trail->push($data->title, route('admin.categories.show', $data->id));
});

Breadcrumbs::for('admin.categories.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.categories.index');
    $trail->push('Edit', route('admin.categories.edit', $data->id));
});

// service_requests
Breadcrumbs::for('admin.service_requests.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Service requests List', route('admin.service_requests.index'));
});

Breadcrumbs::for('admin.service_requests.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.service_requests.index');
    $trail->push('Add', route('admin.service_requests.create'));
});

Breadcrumbs::for('admin.service_requests.show', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.service_requests.index');
    $trail->push($data->user_name, route('admin.service_requests.show', $data->id));
});

Breadcrumbs::for('admin.service_requests.edit', function (BreadcrumbTrail $trail, $data) {
    $trail->parent('admin.service_requests.index');
    $trail->push('Edit', route('admin.service_requests.edit', $data->id));
});
