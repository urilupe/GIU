    let btn_all = document.getElementById("btn_all");
    let btn_casas = document.getElementById("btn_casas");
    let btn_departamentos = document.getElementById("btn_departamentos");
    let btn_terrenos = document.getElementById("btn_terrenos");
    let btn_locales = document.getElementById("btn_locales");
    let btn_bodegas = document.getElementById("btn_bodegas");
    let items = document.querySelectorAll(".property-item");
    
    function filterCategory(category) {
        items.forEach(item => {
            // Comprobamos si es 'all', una clase válida o el ID
            if (
                category === "all" || 
                item.classList.contains(category) || 
                item.id === category
            ) {
                item.style.display = "block"; // Mostrar si coincide
            } else {
                item.style.display = "none"; // Ocultar si no coincide
            }
        });
    }
    
//Subcategorias
document.addEventListener("DOMContentLoaded", function () {
    // Botones de categoría
    const buttons = document.querySelectorAll("[id^='btn_']");
    const items = document.querySelectorAll(".property-item");
    const checkboxes = document.querySelectorAll("input[type='checkbox']");
    const searchInput = document.getElementById("input-group-search");

    // Filtrar por categoría (botones)
    function filterCategory(category) {
        items.forEach(item => {
            if (category === "all" || item.classList.contains(category)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const category = button.id.replace("btn_", "");
            if (category === "all") {
                filterCategory("all");
            } else {
                filterCategory(category);
            }
        });
    });

    // Función para aplicar filtros combinados
    function applyFilters() {
        const searchValue = searchInput.value.toLowerCase().trim();
        let selectedFilters = [];

        // Obtener filtros seleccionados (checkboxes)
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const label = document.querySelector(`label[for="${checkbox.id}"]`);
                if (label) {
                    selectedFilters.push(label.innerText.trim().toLowerCase());
                }
            }
        });

        // Filtrar items
        let found = false;
        items.forEach(item => {
            let itemText = item.innerText.toLowerCase();
            let matchesSearch = searchValue === "" || itemText.includes(searchValue);
            let matchesFilter = selectedFilters.length === 0 || selectedFilters.some(filter => itemText.includes(filter));

            // Mostrar solo si coincide con búsqueda y/o filtros
            if (matchesSearch && matchesFilter) {
                item.style.display = "block";
                found = true;
            } else {
                item.style.display = "none";
            }
        });

        // Mostrar mensaje si no hay coincidencias
        const noResultsMessage = document.getElementById("no-results-message");
        if (!found) {
            if (!noResultsMessage) {
                const message = document.createElement("div");
                message.id = "no-results-message";
                message.innerHTML = `
                    <p class="text-red-500 text-xl font-bold text-center mt-4">No hubo coincidencias 😢</p>
                `;
                document.querySelector(".grid").parentElement.appendChild(message);
            }
        } else if (noResultsMessage) {
            noResultsMessage.remove();
        }
    }

    // Evento para el buscador
    searchInput.addEventListener("input", applyFilters);

    // Evento para checkboxes
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", applyFilters);
    });
});


    
    btn_all.addEventListener("click", () => filterCategory("all"));
    btn_casas.addEventListener("click", () => filterCategory("casas"));
    btn_departamentos.addEventListener("click", () => filterCategory("departamentos"));
    btn_terrenos.addEventListener("click", () => filterCategory("terrenos"));
    btn_locales.addEventListener("click", () => filterCategory("locales"));
    btn_bodegas.addEventListener("click", () => filterCategory("bodegas"));

document.querySelectorAll('.producto').forEach((div) => {
    div.addEventListener('mouseenter', () => {
        div.classList.add(
            'border-2',
            'border-blue-500',
            'shadow-2xl',
            'rounded-xl',
            'scale-105', 
            'bg-gray-200',
            'transition-all',
            'duration-500',
            'ease-out',
            'transform'
        );
        div.style.transform = 'rotate(5deg) scale(1.05)';
        });
      
    div.addEventListener('mouseleave', () => {
        div.classList.remove(
            'border-2',
            'border-blue-500',
            'shadow-2xl',
            'rounded-xl',
            'scale-105',
            'bg-gray-200',
            'transform'
        );
        div.style.transform = 'rotate(0deg) scale(1)';
    });
});

const botones = document.querySelectorAll('button[id^="btn_"]');

botones.forEach((btn) => {
        btn.addEventListener('mouseenter', () => {
            btn.classList.add(
                'transition-all',
                'duration-300',
                'ease-in-out',
                'transform',
                'shadow-lg',
                'ring-2',
                'ring-blue-400'
            );
            btn.style.transform = 'scale(1.05)';
        });

        btn.addEventListener('mouseleave', () => {
            btn.classList.remove(
                'shadow-lg',
                'ring-2',
                'ring-blue-400',
                'transform'
            );
            btn.style.transform = 'scale(1)';
        });
});


const titulo = document.getElementById('titulo');

// Animación de aparición
window.addEventListener('load', () => {
    // Al cargar la página, aplicamos las clases para la animación
    titulo.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700', 'ease-out');

    setTimeout(() => {
        // Después de 100ms, quitamos las clases iniciales y mostramos el título
        titulo.classList.remove('opacity-0', 'translate-y-10');
        titulo.classList.add('opacity-100', 'translate-y-0');
    }, 100);
});

// Agregar el efecto hover para cambiar tamaño y color
titulo.addEventListener('mouseenter', () => {
    titulo.classList.add('scale-110', 'text-blue-500', 'transition-all', 'duration-300');
});

titulo.addEventListener('mouseleave', () => {
    titulo.classList.remove('scale-110', 'text-blue-500');
});