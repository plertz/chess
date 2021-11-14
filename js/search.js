async function search_opponent(url = '') {
    const response = await fetch(url);
    return response.text(); 
}
