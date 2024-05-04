import './bootstrap';

fetch('/api/articles')
    .then(response => response.json())
    .then(data => {

        const list = document.getElementById('articles');
        
        for(let article of data) {
            list.innerHTML += '<li>' + article.title + '</li>';
        }
    });