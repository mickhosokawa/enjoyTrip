<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Tour</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
  @vite(['resources/js/searchPost.js'])
</head>
<body class="bg-blue-500">

  <!-- トップナビゲーション -->
  <nav class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <div class="font-bold text-xl"><a href="/top">Local Tour</a></div>
      <div class="space-x-4">
        <a href="/post" class="hover:underline">Post</a>
        {{-- <a href="#" class="hover:underline">お得情報</a> --}}
        <!-- その他のナビゲーションリンク -->
      </div>
    </div>
  </nav>

  <!-- 検索セクション -->
  <section class="container mx-auto mt-12 p-8 bg-white rounded-lg shadow-lg max-w-2xl">
    <form class="space-y-4" id="search-button" method="POST" action="{{ route('top.index') }}">
      @csrf
      <div>
        <input type="text" placeholder="Let's explore your destination." class="w-full px-4 py-2 border rounded-lg" />
      </div>
      {{-- <div class="flex space-x-4">
        <input type="date" class="w-full px-4 py-2 border rounded-lg" />
        <input type="date" class="w-full px-4 py-2 border rounded-lg" />
      </div> --}}
      <div>
        <button class="w-full bg-red-400 text-white px-4 py-2 rounded-lg">Dive!!</button>
      </div>
    </form>
  </section>

  <!-- 検索結果表示セクション  -->
  <section>
    @if($posts)
    @foreach ($posts as $post)
      <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-5">
        <div class="md:flex">
          <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $post->user->name }}</div>
            <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $post->title }}</a>
            <p class="mt-2 text-gray-500">{{ Str::limit($post->body, 100) }}</p>
          </div>
        </div>
      </div>
    @endforeach
    @endif
  </section>
  <!-- プロモーションセクション -->
  <section class="container mx-auto mt-8">
    <!-- プロモーションコンテンツ -->
    <!-- ここにプロモーションバナーやコンテンツを配置 -->
  </section>

  <!-- Tailwind CSSのスクリプトを読み込み -->
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.js"></script>
</body>
</html>
