// アラート要素を取得
const alertElement = document.querySelector('.alert-danger');

if (alertElement) {
    let opacity = 1; // 初期の透明度

    const fadeOut = setInterval(() => {
        if (opacity <= 0) {
            clearInterval(fadeOut);
            alertElement.style.display = 'none'; // 完全に透明になったら非表示にする
        } else {
            opacity -= 0.05; // 透明度を徐々に下げる
            alertElement.style.opacity = opacity;
        }
    }, 60); // 60ミリ秒ごとに透明度を更新（この値を変更するとフェードアウト速度が変わる）

    // 3秒後にフェードアウトを開始
    setTimeout(() => {
        fadeOut();
    }, 3000);
}

// document.getElementById('post-form').addEventListener('submit', (event) => {
    
//     // abort default event
//     event.preventDefault();

//     // get comment
//     const test = document.querySelector('#post-form');
//     const replyContent = document.getElementById('comment').value;
//     const formData = new FormData(test);
//     // get api url
//     // 現在のURLからIDを取得
//     const url = window.location.href;
//     const id = url.substring(url.lastIndexOf('/') + 1);

//     // APIエンドポイントの構築
//     const apiURL = `/post/show/${id}`;

//     fetch(apiURL, {
//         method : 'POST',
//         body : formData,
//     })
//     .then(response => response.json())
//     .then(data => {
//         console.log('success to reply');
//     })
//     .catch(error => {
//         console.log(error);
//     })
// });


// const addReply = (addContent) => {
//     const replyContainer = document.getElementById('content');
//     const postElement = document.createElement('div');
//     postElement.innerHTML = `<div id="content" class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-5">
//     <div class="md:flex">
//     <div class="p-8">
//         <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">${user.name}</div>
//         <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">${reply}</div>
//         <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">test</a>
//         <p class="mt-2 text-gray-500">${reply.substring(0, 100)}</p>
//     </div>
//     </div>
// </div>
//     `;
//     postsContainer.appendChild(postElement);
// }