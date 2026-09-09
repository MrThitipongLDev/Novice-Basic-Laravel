install laravel composer ที่ไม่ใช่ glbalo
composer create-project laravel/laravel temp-laravel

ใช้ . ไม่ได้เลยใช้วิธีนี้
mv temp-laravel/* temp-laravel/.* . 2>/dev/null
rm -rf temp-laravel


Routing 101
routes/web.app

ทำ about,welcome link ไปกลับได้
ต้องใส่ใน routes/web.php ชี้ ไปหา ใน resources/views/..... 

Route::get('/about', function () {
    return view('about');   
});

//แบบย่อ
Route::view('/contact', 'contact');


Layout 101

views/components/layout.blade.php   สร้าง

ทำ prop

card.blade.php
attributes->merge([])   เอา class เก่าใหม่ที่เตรียมไว้ มารวมกันได้


Pass Data to Views
routes/web.php
// Route::view('/about', 'about', [
//     'abc' => 'ssss',
//     'name' => 'aek',
//     'pass' => request('pass'),
// ]);

Route::get('/about', function () {
    return view('about', [
    'abc' => 'ssss',
    'name' => 'aek',
    'pass' => request('pass'),
    ]);
});




Blade Directives
routes/web.php

Route::get('/', function () {
    return view('welcome', [
        'tasks' => [
            'abcd',
            'efgh',
            'ijkl'
        ],
    ]); 


views/welcome.blade.php

{{$tasks}}
<?php var_dump($tasks) ?>
<?php die(var_dump($tasks)) ?>

@dump($tasks);
@dd($tasks);

<?php if (count($tasks)) : ?>
<p>มีกี่ <?php echo count($tasks) ?>
<?php endif; ?>

@if(count($tasks))
<p>มีกี่ <?php echo count($tasks) ?>
@endif

@foreach ($tasks as $task)
    <li>{{ $task }}</li>
@endforeach


@unless( count($tasks))
    <p>ไม่มี task </p>
@endunless

@forelse($tasks as $task)
    <li>{{$task}}</li>
    @empty
    <p>ไม่มี task</p>
@endforelse
