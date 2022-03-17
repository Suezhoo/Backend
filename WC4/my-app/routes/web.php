<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GENERIC ROUTES
Route::prefix('')->group(function () {
	Route::get('/', function () {
		return view('content.index');
	})->name('index');

	Route::get('/about', function () {
		return view('other.about');
	})->name('about');

	Route::get('/ad/{id}', function ($id) {
		$data = match ($id) {
			'1' => [
				'title'       => 'Calisthenics',
				'description' => 'Workout with your own body weight',
			],
			'2' => [
				'title'       => 'Cycling',
				'description' => 'Rather casual cycling. Good way to get fit!',
			],
			'3' => [
				'title'       => 'Functional threshold power',
				'description' => 'This is basically how hard you can cycle for 1 hour',
			],
		};

		return view('content.item', ['info' => $data]);
	})->name('ad');
});

// CREATE ADVERT ROUTES
Route::post('ad/create', function (\Illuminate\Http\Request $request, Illuminate\Validation\Factory $validator) {
	//	Validate date
	$validation = $validator->make($request->all(), [
		'title'   => 'required|max:20|min:4',
		'content' => 'required|max:20|min:4',
	]);

	if($validation->fails()) {
		return redirect()->back()->withErrors($validation);
	} else {
		$title = $request->input('title');
		$content = $request->input('content');
		return redirect('admin')->with('formTitle', $title, 'formContent', $content);
	}
})->name('ad-create');

Route::post('ad/edit', function () {
	return redirect()->route('admin-index');
})->name('ad-edit');

// ADMIN ROUTES
Route::prefix('admin')->group(function () {
	Route::get("/", function () {
		return view('admin.index');
	})->name('admin-index');

	// CREATE ROUTE
	Route::get('/create', function () {
		return view('admin.create');
	})->name('admin-create');

	// EDIT ROUTE
	Route::get('edit', function () {
		return view('admin.edit');
	})->name('admin-edit');
});

