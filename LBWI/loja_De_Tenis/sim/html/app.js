import tenis from "./tenis.js";
import modificador from "./modificador.js";

let tenisOrdenado = modificador.capitalizar(tenis, 'titulo');
let containerTenis = document.querySelector(".product-container");

// Pilha para armazenar histórico de itens removidos
let removidosStack = [];
let desfazerTimeout = null;

function mostrarDesfazer() {
    let desfazerDiv = document.getElementById('desfazer-div');
    if (!desfazerDiv) {
        desfazerDiv = document.createElement('div');
        desfazerDiv.id = 'desfazer-div';
        desfazerDiv.style.textAlign = 'center';
        desfazerDiv.style.margin = '16px';
        desfazerDiv.innerHTML = `
            <button id="voltar-todos-btn" style="background:#ffc107;color:#23272f;padding:8px 20px;border:none;border-radius:5px;font-weight:bold;cursor:pointer;">Voltar todos</button>
        `;
        containerTenis.parentElement.insertBefore(desfazerDiv, containerTenis);
        document.getElementById('voltar-todos-btn').onclick = voltarTodosRemovidos;
    }
    // Reinicia o timeout sempre que um novo item é removido
    if (desfazerTimeout) clearTimeout(desfazerTimeout);
    desfazerTimeout = setTimeout(removerDesfazer, 5000);
}

function voltarTodosRemovidos() {
    // Ordena para restaurar na ordem correta
    removidosStack.sort((a, b) => a.idx - b.idx);
    removidosStack.forEach(({item, idx}, i) => {
        // Ajusta o índice para inserir corretamente conforme itens são inseridos
        tenisOrdenado.splice(idx + i, 0, item);
    });
    renderTenis();
    removerDesfazer();
}

function removerDesfazer() {
    let desfazerDiv = document.getElementById('desfazer-div');
    if (desfazerDiv) desfazerDiv.remove();
    removidosStack = [];
    if (desfazerTimeout) clearTimeout(desfazerTimeout);
}

function renderTenis() {
    containerTenis.innerHTML = '';
    tenisOrdenado.forEach((item, idx) => {
        let textHTML = `<div class="tenis-item">
            <img src="${item.Img}" class="imagem-tenis" alt="${item.titulo}">
            <p class="nome-tenis">${item.titulo}</p>
            <p class="autor-tenis">${item.autor}</p>
            <p class="preco-tenis">R$ ${item.preco}</p>
            <button class="apagar-btn" data-idx="${idx}">Apagar</button>
        </div>`;
        containerTenis.innerHTML += textHTML;
    });
    document.querySelectorAll('.apagar-btn').forEach(btn => {
        btn.onclick = function() {
            // Salva o item removido e seu índice na pilha
            const idx = Number(btn.dataset.idx);
            const itemRemovido = tenisOrdenado[idx];
            removidosStack.push({item: itemRemovido, idx});
            tenisOrdenado.splice(idx, 1);
            renderTenis();
            mostrarDesfazer();
        };
    });
}

renderTenis();

console.log("funcionou!");


