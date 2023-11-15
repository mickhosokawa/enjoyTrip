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
        <form>
           <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
               <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                   <label for="comment" class="sr-only">Your comment</label>
                   <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
               </div>
               <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                   <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                       Reply
                   </button>
               </div>
           </div>
        </form>
        @if($threads)
        @foreach ($threads as $thread)
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-5">
            <div class="md:flex">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $thread->user->name }}</div>
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $thread->reply }}</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $post->title }}</a>
                <p class="mt-2 text-gray-500">{{ Str::limit($post->body, 100) }}</p>
            </div>
            </div>
        </div>
        @endforeach
        @endif
        <p class="ms-auto text-xs text-gray-500 dark:text-gray-400">Remember, contributions to this topic should follow our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community Guidelines</a>.</p>
    </div>
  </div>

</body>
</html>
