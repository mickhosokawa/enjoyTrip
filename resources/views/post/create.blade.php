<!DOCTYPE html>
<!-- 実装したいフロントエンドの機能

・文字を入力するたび、文字数をカウントダウン
・文字数が上限に達したら、メッセージを表示したり、カウントダウンしている文字色を変える
・投稿確認モーダルを表示する

-->
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
        <form method="POST" action={{ route('logout') }} >
          @csrf
          <button type="submit">Logout</button>
        </form>
      </div>
      <div class="p-5">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- バリデーションメッセージの表示 -->
            <div class="mb-5">  
                @if ($errors->any())  
                    <ul>  
                        @foreach ($errors->all() as $error)  
                            <li class="text-red-500">{{ $error }}</li>  
                        @endforeach  
                    </ul>  
                @endif  
            </div>  
          <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" name="title" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          </div>
          <div class="mb-5">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Address</label>
            <input type="text" id="address" name="address" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
          <div class="mb-5">
            <label for="facility" class="block mb-2 text-sm font-medium text-gray-700">Facility</label>
            <input type="text" id="facility" name="facility" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
          <div class="mb-5">
            <label for="season" class="block mb-2 text-sm font-medium text-gray-700">Choose a month when you visit</label>
            <select id="season" name="season" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @for ($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
          </div>
          <div class="mb-5">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-700">Image</label>
            <input type="file" id="image_path" name="image_path" accept="image/*" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
          <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-700">Category</label>
            <select id="category" name="category_id" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                @if($categories)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                @endif
            </select>
          </div>
          <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-700">Body</label>
            <textarea id="body" name="body" rows="4" class="shadow-sm bg-gray-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
          </div>
          <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Ask to locals</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.js"></script>
</body>
</html>
