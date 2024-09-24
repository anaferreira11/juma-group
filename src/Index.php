<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../src/css/tela_inicial.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="menu-icon" onclick="toggleSidebar()">☰</div>
            <div class="nav-links">
                <a href="../src/html/produtos.html">PRODUTOS</a>
            </div>
            <div class="search-container">
                <label for="search-bar">PROCURAR PRODUTOS:</label>
                <input type="text" id="search-bar" placeholder="Digite para pesquisar...">
            </div>
            <a href="../src/html/carrinho.html">🛒</a>
        </div>
    </header>
    
    <aside class="sidebar" id="sidebar">
        <nav>
            <ul>
                <li><a href="..\src\html\categoria.html">Inserir categorias</a></li>
            </ul>
        </nav>
    </aside>
    
    <main>
        <div class="hero-section">
            <div class="content-overlay">
                <div class="promo-text">
                    <h2>COMPRE AGORA COM ATÉ<br>30% OFF</h2>
                    <button class="submit">COMPRAR AGORA<a href="..\src\html\produtos.html"></a></button>
                </div>
            </div>
        </div>
    </main>
    
    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>
</body>
</html>