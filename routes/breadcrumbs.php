<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard

// Admin Dashboard
Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
	$trail->push('Dashboard', route('admin.dashboard'));
});

// User Dashboard
Breadcrumbs::for('users.dashboard', function (BreadcrumbTrail $trail) {
	$trail->push('Dashboard', route('users.dashboard'));
});

Breadcrumbs::for('admin.profile', function (BreadcrumbTrail $trail) {
	$trail->push('Admin Profile', route('admin.profile'));
});

// Products
Breadcrumbs::for('admin.products.index', function (BreadcrumbTrail $trail) {
	$trail->push('Products', route('admin.products.index'));
});

Breadcrumbs::for('admin.products.create', function (BreadcrumbTrail $trail) {
	$trail->parent('admin.products.index');
	$trail->push('Create', route('admin.products.create'));
});

Breadcrumbs::for('admin.products.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.products.index');
	$trail->push('Edit', route('admin.products.edit', $id));
});

Breadcrumbs::for('admin.products.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.products.index');
	$trail->push('Product Details', route('admin.products.show', $id));
});

// Categories
Breadcrumbs::for('admin.categories.index', function (BreadcrumbTrail $trail) {
	$trail->push('Categories', route('admin.categories.index'));
});

Breadcrumbs::for('admin.categories.create', function (BreadcrumbTrail $trail) {
	$trail->parent('admin.categories.index');
	$trail->push('Create', route('admin.categories.create'));
});

Breadcrumbs::for('admin.categories.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.categories.index');
	$trail->push('Edit', route('admin.categories.edit', $id));
});

Breadcrumbs::for('admin.categories.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.categories.index');
	$trail->push('Category Details', route('admin.categories.show', $id));
});

// Collections
Breadcrumbs::for('admin.collections.index', function (BreadcrumbTrail $trail) {
	$trail->push('Collections', route('admin.collections.index'));
});

Breadcrumbs::for('admin.collections.create', function (BreadcrumbTrail $trail) {
	$trail->parent('admin.collections.index');
	$trail->push('Create', route('admin.collections.create'));
});

Breadcrumbs::for('admin.collections.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.collections.index');
	$trail->push('Edit', route('admin.collections.edit', $id));
});

Breadcrumbs::for('admin.collections.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('admin.collections.index');
	$trail->push('Collection Details', route('admin.collections.show', $id));
});


// testing
Breadcrumbs::for('test', function (BreadcrumbTrail $trail) {
	$trail->push('Test', route('test'));
});