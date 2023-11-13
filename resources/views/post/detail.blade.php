<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <div class="container mx-auto mt-10">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
      <div class="p-4 bg-blue-500">
        <h1 class="text-xl text-white font-bold">{{ $post->title }}</h1>
      </div>
      <div class="p-4">
        <p class="text-gray-700"><strong>Poster:</strong> {{ $post->user->name }}</p>
        <p class="text-gray-700"><strong>Want to go:</strong> {{ $post->destination }}</p>
        <p class="text-gray-700"><strong>Season:</strong> {{ $post->travel_period }}</p>
        <p class="text-gray-700"><strong>Category:</strong> {{ $post->category->name }}</p>
        <div class="mt-4">
          <h2 class="text-lg font-semibold">Question</h2>
          <p class="text-gray-800 mt-2">{{ $post->body }}</p>
        </div>
      </div>
      <div class="p-4 border-t border-gray-200 text-sm text-gray-600">
        Posted time: {{ $post->created_at->format('Y-m-d H:i') }}
      </div>
    </div>
  </div>

</body>
</html>
