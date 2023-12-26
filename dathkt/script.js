function search() {
    const keyword = document.getElementById('searchInput').value;
    fetch(`search.php?q=${keyword}`)
        .then(response => response.json())
        .then(data => displayResults(data))
        .catch(error => console.error('Error:', error));
}

function displayResults(results) {
    const searchResults = document.getElementById('searchResults');
    searchResults.innerHTML = '';

    results.forEach(video => {
        const li = document.createElement('li');
        const link = document.createElement('a');
        link.textContent = video.title;
        link.href = `https://www.youtube.com/watch?v=${video.id}`;
        li.appendChild(link);
        searchResults.appendChild(li);
    });
}
