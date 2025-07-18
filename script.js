
//////////////////////profile////////////////////////
document.addEventListener("DOMContentLoaded", function() {
    var modalBtn = document.getElementById("modalBtn");
    var modal = document.getElementById("modal");
    var closeBtn = document.getElementById("closeBtn");

    modalBtn.addEventListener("click", function() {
        modal.style.display = "flex";
        card.style.display="none";
    });

    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var posts = document.getElementById("posts");
   

    posts.addEventListener("click", function() {
        modals.style.display = "none";
        modal.style.display = "flex";
        card.style.display="none";
    });

    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
    });
});
//////////////////////////////////////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
    var modalBtns = document.getElementById("comment");
  
    var modals = document.getElementById("modals");
    var closeBtns = document.getElementById("closeBtns");

   modalBtns.addEventListener("click", function() {
        modals.style.display = "block";
        card.style.display="none";
    });
    closeBtns.addEventListener("click", function() {
        modals.style.display = "none";
    });
    
});

