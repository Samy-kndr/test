/*const apiKey = '';
const main = document.querySelector('main');

window.addEventListener('load', e => {
    updateNews();
});

async function updateNews() {
    const res = await fetch('');
    const json = await res.json();

    main.innerHTML = json.articles.map(createArticle).join('\n');
}

function createArticle(article) {
    return '
        <div class="article">
            <a href="$"
    ';
    
}*/
if('serviceWorker' in navigator){
    try {
        navigator.serviceWorker.register('sw.js');
        console.log('SW registered');
    } catch(error) {
        console.log('SW reg failed')
    }
}
