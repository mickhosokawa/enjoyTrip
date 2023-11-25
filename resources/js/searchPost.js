/**
 * トップ画面で検索結果を非同期で返す処理
 */
document.getElementById('search-button').addEventListener('click', (event) => {
    event.preventDefault();

    const inputDestination = document.getElementById('title').value; // valueを取得
    const apiURL = `/api/posts?title=${encodeURIComponent(inputDestination)}`;

    // 非同期通信開始
    fetch(apiURL)
        .then((response => response.json()))
        .then(data => {
            const resultContainer = document.getElementById('content');
            resultContainer.innerHTML = '';
            console.log(data);

            // ローディングインジケータを表示
            document.getElementById('loading').style.display = 'block';

            data.forEach(post => {
                const postElement = document.createElement('div');
                postElement.className = 'max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-5';
                postElement.innerHTML = `
                    <div class="md:flex">
                        <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">${post.user.name}</div>
                            <a href="/post/show/${post.id}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">${post.title}</a>
                            <p class="mt-2 text-gray-500">${post.body.substring(0, 100)}</p>
                        </div>
                    </div>
                `;
                resultContainer.appendChild(postElement);
            });

            document.getElementById('loading').style.display = 'none';
            
        }).catch(error => console.error('Error fetching data:', error));
            document.getElementById('loading').style.display = 'none';
});