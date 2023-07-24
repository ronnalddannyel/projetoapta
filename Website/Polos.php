<?php
include "../../../db.php";
$upload_dir = '../ArquivosEnviados/Polos/';

// Número de registros por página
$registrosPorPagina = 2;

// Página atual obtida a partir do parâmetro 'pagina' na URL
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcula o offset para a consulta SQL baseado na página atual
$offset = ($paginaAtual - 1) * $registrosPorPagina;

// Consulta para obter o número total de registros
$totalRegistrosQuery = mysqli_query($conn, "SELECT COUNT(*) as total FROM Polos");
$totalRegistros = mysqli_fetch_assoc($totalRegistrosQuery)['total'];
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

// Consulta para obter os registros da página atual
$resultadosQuery = mysqli_query($conn, "SELECT * FROM Polos ORDER BY polo_id LIMIT $offset, $registrosPorPagina");

?>

<!-- Sua estrutura HTML e conteúdo da página aqui -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polos</title>
    <!-- Adicione as seguintes linhas para incluir os estilos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php include "menu.php";?>

    <div class="container mt-4">
        <!-- Conteúdo dos resultados da paginação aqui -->
        <div class="row">
            <?php while ($resultado = mysqli_fetch_assoc($resultadosQuery)): ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo $upload_dir.$resultado['ImagemPolo']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $resultado['NomeDoPolo']; ?></h5>
                    <p class="card-text"><?php echo $resultado['EnderecoDoPolo']; ?></p>
                    
                    </div>
                    </div>



            <?php endwhile; ?>
        </div>

        <!-- Paginação usando Bootstrap -->
        <nav aria-label="Paginação">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                    <li class="page-item <?php echo ($i == $paginaAtual) ? 'active' : ''; ?>">
                        <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

    <!-- Adicione as seguintes linhas para incluir os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
// Fechando a conexão ao final
mysqli_close($conn);
?>
