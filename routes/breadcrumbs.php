<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
	$trail->push('Home', route('home'));
});

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

Breadcrumbs::for('products.show', function (BreadcrumbTrail $trail, $id) {
	$trail->push('Product Details', route('products.show', $id));
});

Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
	$trail->push('Create', route('products.create'));
});

// Categories
Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
	$trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categories.show', function (BreadcrumbTrail $trail, $id) {
	$trail->push('Category Details', route('categories.show', $id));
});

// Collections
Breadcrumbs::for('collections.index', function (BreadcrumbTrail $trail) {
	$trail->push('Collections', route('collections.index'));
});

Breadcrumbs::for('collections.show', function (BreadcrumbTrail $trail, $id) {
	$trail->push('Collection Details', route('collections.show', $id));
});
