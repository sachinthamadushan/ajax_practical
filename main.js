
window.onload = setCategory;
window.onload = loadCategory;
function saveCategory() {
    let category = document.getElementById("category").value;
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "controller/saveCategory.php", true);
    httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = () => {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            loadCategory();
            alert(httpRequest.responseText);
        }
    };
    httpRequest.send("category=" + category);
}

function loadCategory() {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "controller/loadCategory.php", true);
    httpRequest.onreadystatechange = () => {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            document.getElementById("catList").innerHTML = httpRequest.responseText;
        }
    };
    httpRequest.send();
}

let catID;
function chengeDetails(id, category) {
    catID = id;
    document.getElementById("btn_create").style.display = "none";
    document.getElementById("btn_update").style.display = "block";
    document.getElementById("category").value = category;
}

function updateCategory() {
    let category = document.getElementById("category").value;
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "controller/updateCategory.php", true);
    httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = () => {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            loadCategory();
            alert(httpRequest.responseText);
        }
    };
    httpRequest.send("category=" + category + "&id=" + catID);
}

function deleteCategory(id) {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "controller/deleteCategory.php", true);
    httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = () => {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            loadCategory();
            alert(httpRequest.responseText);
        }
    };
    httpRequest.send("id=" + id);
}

function setCategory(){
    alert("setCategory");
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "controller/setCategory.php", true);
    httpRequest.onreadystatechange = () => {
        if (httpRequest.status === 200) {
            alert(httpRequest.responseText);
            document.getElementById("setCat").value = httpRequest.responseText;
        }
    };
    httpRequest.send();
}




