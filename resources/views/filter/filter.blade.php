<div class="facetmobile-container">
    <div class=" facetmobile--items">
        <button type="button" class=" btn-with-icon"><i class="fas fa-filter"></i><span class="">Filtrar</span></button>
    </div>
    <div class=" facetmobile--items"><button type="button" id="testId-FacetsMobile-button-sort"
            class=" btn-with-icon"><i class=" csicon-icon-order"></i><span class="">Ordenar</span></button></div>
    <div role="button" tabindex="0" class="jsx-2715150663 dialog rightToLeft ">
        <div role="button" tabindex="0" class="jsx-2715150663 dialog dialog-background filter__menu">
            <header class="jsx-2715150663 mkp-header">
                <h1 class="jsx-2715150663">Filtrar por:</h1>
                <div class="jsx-2715150663 actions">
                    <button type="button" id="testId-Dialog-close" class="jsx-2715150663 clear">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </header>
            @include('lista.listado-categoria')
        </div>
    </div>
</div>
<div class="d-flex  mt-2">
    <div class="p-2">
    <select name="count" class="count"> 
        <option value="12" selected="selected">12</option>
            <option value="24">24</option> <option value="36">36</option>
    </select>
    </div>
    <div class="ml-auto p-2">   <nav aria-label="Page navigation example">
        <ul class="pagination">
            
        </ul>
    </nav></div>
</div>
<script>
const filterOpen = document.querySelector(".btn-with-icon");
const filterClose = document.querySelector("#testId-Dialog-close");
const menufilter = document.querySelector(".filter__menu");
// const scrollLink = document.querySelectorAll(".scroll-link");
const filterContainer = document.querySelector(".dialog-background");
// let width = screen.width;

filterOpen.addEventListener("click", () => {
    console.log("aqui");
    menufilter.classList.add("open_filter");
    // document.body.classList.add("active");
    // filterContainer.style.left = "0";
    filterContainer.style.width = "auto";
});

filterClose.addEventListener("click", () => {
    menu.classList.remove("open_filter");
    // document.body.classList.remove("active");
    // filterContainer.style.left = "-15rem";
    filterContainer.style.width = "0";
});
</script>