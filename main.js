function saveCategory() {
        let category = document.getElementById("category").value;
        let httpRequest = new XMLHttpRequest();
        httpRequest.open("POST", "controller/saveCategory.php", true);
        httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.onreadystatechange = () => {
            if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                alert(httpRequest.responseText);
            }
        };
        httpRequest.send("category=" + category);
}