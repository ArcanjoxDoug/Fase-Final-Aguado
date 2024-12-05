    /*function mudar_fundo(){
    const body = document.body;
    body.classList.toggle("tema-dark");
    body.classList.toggle("tema-light");

}
*/
/* Mover container produtos */
const arrowLeft = document.querySelectorAll('#preBtn');
const arrowRight = document.querySelectorAll('#nxtBtn');
const linhas = document.querySelectorAll('#linha');

linhas.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    arrowRight[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    });

    arrowLeft[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    });
});

/* Clicar na Card */
const cards = document.querySelectorAll('#cards_p3');
        
cards.forEach(cards => {
    cards.addEventListener('click', () => {
        window.location.href = ('text.html');
    });
});



/* botão start */
const start = document.querySelectorAll('#start');

start.forEach(start => {
    start.addEventListener('click', ()=> {
        StyleSheetList((start),
        )
    });
});

//botão voltar
const voltar = document.querySelectorAll('#voltar');

voltar.forEach(voltar => {
    voltar.addEventListener('click', ()=> {
        window.location.href = ('index.php')
    })
})
 
const lastScrollTop = 0;

// Transição de surgimento das páginas
document.addEventListener("scroll", function() {
    const elements = document.querySelectorAll(".pag2");
    const windowHeight = window.innerHeight;
    const currentScrollTop = window.scrollY || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop || currentScrollTop < lastScrollTop) {
        // Scroll para baixo
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;

            if (elementTop < windowHeight - 500 && elementBottom > 50 ) {
                element.classList.add("show");
            }
        });
    } 

    lastScrollTop = currentScrollTop;
});

//função do icone sanduiche
function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    const menuIcon = document.getElementById("menu-icon");
  
    if (sidebar.style.display === "none" || sidebar.style.display === "") {
      sidebar.style.display = "flex";
      sidebar.style.transform = "translateX(25px)";
      sidebar.style.width = "400px";
      sidebar.style.right = "0";



    } else {
      sidebar.style.display = "none";
      menuIcon.style.transform = "translateX(0)"; // Retorna o ícone à posição original
    }
  }