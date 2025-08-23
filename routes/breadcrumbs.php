<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
	$trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
	$trail->push('Profile', route('profile'));
});

// Products
Breadcrumbs::for('products.index', function (BreadcrumbTrail $trail) {
	$trail->push('Products', route('products.index'));
});

Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
	$trail->parent('products.index');
	$trail->push('Create', route('products.create'));
});

Breadcrumbs::for('products.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('products.index');
	$trail->push('Edit', route('products.edit', $id));
});

Breadcrumbs::for('products.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('products.index');
	$trail->push('Product Details', route('products.show', $id));
});

// Categories
Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
	$trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
	$trail->parent('categories.index');
	$trail->push('Create', route('categories.create'));
});

Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('categories.index');
	$trail->push('Edit', route('categories.edit', $id));
});

Breadcrumbs::for('categories.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('categories.index');
	$trail->push('Category Details', route('categories.show', $id));
});

// Collections
Breadcrumbs::for('collections.index', function (BreadcrumbTrail $trail) {
	$trail->push('Collections', route('collections.index'));
});

Breadcrumbs::for('collections.create', function (BreadcrumbTrail $trail) {
	$trail->parent('collections.index');
	$trail->push('Create', route('collections.create'));
});

Breadcrumbs::for('collections.edit', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('collections.index');
	$trail->push('Edit', route('collections.edit', $id));
});

Breadcrumbs::for('collections.show', function (BreadcrumbTrail $trail, $id) {
	$trail->parent('collections.index');
	$trail->push('Collection Details', route('collections.show', $id));
});


// testing
Breadcrumbs::for('test', function (BreadcrumbTrail $trail) {
	$trail->push('Test', route('test'));
});