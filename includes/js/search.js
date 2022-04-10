load_players(" ");

let search = document.getElementById("search");
let list = document.getElementById("searched-list");

search.addEventListener("keyup", (e) => {
    content = search.value;
    load_players(content);
});

function load_players(content) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            load_data(this.responseText);
        }
    }
    xmlhttp.open("GET", "../includes/players/search.php?search_query=" + content, true);
    xmlhttp.send();
}

function load_data(data) {
    list.innerHTML = "";
    data = JSON.parse(data);
    for (let i = 0; i < data.length; i++) {
        let list_item = document.createElement("li");
        let item_link = document.createElement("a");
        item_link.innerHTML = data[i];
        item_link.href = "details.php?player=" + data[i];
        list.appendChild(list_item);
        list_item.appendChild(item_link);
    }
    console.log(data);
}