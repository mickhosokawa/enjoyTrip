<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Tour</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-500">

  <!-- トップナビゲーション -->
  <nav class="bg-blue-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-6">
      <div class="font-bold text-xl"><a href="#">Local Tour</a></div>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Post</a>
        {{-- <a href="#" class="hover:underline">お得情報</a> --}}
        <!-- その他のナビゲーションリンク -->
      </div>
    </div>
  </nav>

  <!-- 検索セクション -->
  <section class="container mx-auto mt-12 p-8 bg-white rounded-lg shadow-lg max-w-2xl">
    <form class="space-y-4" method="POST" action="{{ route('top.index') }}">
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

  <!-- プロモーションセクション -->
  <section class="container mx-auto mt-8">
    <!-- プロモーションコンテンツ -->
    <!-- ここにプロモーションバナーやコンテンツを配置 -->
  </section>

  <!-- Tailwind CSSのスクリプトを読み込み -->
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.js"></script>
</body>
</html>
