function addminibox(url,target,img,text){
    const minibox = document.getElementById("minibox");
    minibox.innerHTML += `
    <div class="minibox col-6 col-lg-4">
        <a href="${url}" target="${target}">
            <div class="minibox-content">
                <img src="img/${img}"><h6>${text}</h6>
            </div>
        </a>
    </div>
    `;
}
