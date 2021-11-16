// async function search_opponent(url = '') {
//     const response = await fetch(url);
//     return response.text(); 
// }

const connection = new EventSource("../../includes/game/connection.php");

connection.onmessage = function(event) {
    const res = JSON.parse(event.data);
    console.log(res);
}
