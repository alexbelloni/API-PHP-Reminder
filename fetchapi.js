function getClients(){
    fetch("http://smartplansp.com.br/api/clients.php").then(data=>data.json()).then(data=>{
        const container = document.querySelector('#clients');
        data.forEach(client => {
            const element = document.createElement('p');
            element.innerText = client.name;
            container.appendChild(element);
        });
    })
}