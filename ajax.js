function getContent() {
    let content = document.getElementById('present');
    

    // initialising ajax Request

    let xhr = new XMLHttpRequest();
    xhr.open('GET', `site.txt`, true);
    xhr.responseType = 'text';
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            content.innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}