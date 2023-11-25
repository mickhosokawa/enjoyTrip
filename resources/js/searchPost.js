document.getElementById('search-button').addEventListener('click', (event) => {
    event.preventDefault();

    let inputDestination = document.getElementById('destination').value; // valueを取得

    fetch('/top', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ inputDestination: inputDestination })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        // 結果を表示
        console.log(data);
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
});
