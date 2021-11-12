async function search_opponent(url = '') {
    const response = await fetch(url);
    return response.text(); 
}
search_opponent('game/search_opponent.php').then(data => {console.log(data)});