function controlModal(){
    let btn = document.querySelector("#show-modal");
    let modal = document.querySelector(".modal");
    let overlay = document.querySelector(".modal-overlay");
    let closebtn = document.querySelector(".modal-close");

    btn.onclick = function(){
        modal.classList.add("modal-open");
    }

    overlay.onclick = function(){
        modal.classList.remove("modal-open");
    }

    closebtn.onclick = function(){
        modal.classList.remove("modal-open");
    }
}

window.onload = controlModal();