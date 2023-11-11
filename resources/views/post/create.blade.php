<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ask locals</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50">

  <div class="container mx-auto mt-10">
    <div class="w-full max-w-2xl mx-auto bg-white rounded-lg border border-blue-200">
      <div class="p-5 bg-blue-600 rounded-t-lg">
        <h2 class="text-xl font-semibold text-white">Post form</h2>
      </div>
      <div class="p-5">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
          <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-700">title</label>
            <input type="text" id="title" name="title" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          </div>
          <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-700">Body</label>
            <textarea id="body" name="body" rows="4" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
          </div>
          <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Ask</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.js"></script>
</body>
</html>
