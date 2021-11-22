@extends('layouts.main')

@section('container')

<article>
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By: Lintang Bima in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>

    {!! $post->body !!}
</article>

<a href="/blog">Back to Posts</a>
@endsection

<!-- Post::create([
'title' => 'Judul Ketiga',
'category_id' => 3,
'slug' => 'judul-ketiga',
'excerpt' => 'Lorem ipsum ketiga',
'body' => '<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt dolor nemo autem repellat in dolorum molestias quae odio incidunt non deleniti, hic temporibus esse ratione tempora consequatur nostrum facere possimus id dolores modi accusantium? </p><p>Facilis officiis sed ab pariatur velit, doloremque, consectetur magni qui temporibus labore delectus veritatis vel totam quidem officia nam illum fugit. Accusamus velit deserunt vero. Sit excepturi distinctio vero ex! Unde corporis, soluta quisquam at recusandae et quo omnis facilis quaerat,</p><p> porro voluptate dignissimos id dolore expedita provident suscipit totam hic, odit molestias pariatur magni dicta odio quis vel. Debitis, unde alias non illo at illum quaerat velit aut reprehenderit facilis consequuntur itaque odit nesciunt adipisci maiores accusantium repellendus, facere voluptas voluptates magni nobis dignissimos. Unde.</p>'
]) -->