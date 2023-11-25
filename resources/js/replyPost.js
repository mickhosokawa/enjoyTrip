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