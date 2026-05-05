<?php
// Array inicial de filmes
$filmes = [
    ["id" => 1, "titulo" => "Matrix", "ano" => 1999],
    ["id" => 2, "titulo" => "O Senhor dos Anéis", "ano" => 2001],
    ["id" => 3, "titulo" => "Interestelar", "ano" => 2014],
];

// Função para listar filmes
function listarFilmes($filmes) {
    echo "<h2>Lista de Filmes</h2>";
    echo "<ul>";
    foreach ($filmes as $filme) {
        echo "<li>{$filme['id']} - {$filme['titulo']} ({$filme['ano']})</li>";
    }
    echo "</ul>";
}

// Função para adicionar filme
function adicionarFilme(&$filmes, $titulo, $ano) {
    $novoId = count($filmes) + 1;
    $filmes[] = ["id" => $novoId, "titulo" => $titulo, "ano" => $ano];
}

// Função para atualizar filme
function atualizarFilme(&$filmes, $id, $novoTitulo, $novoAno) {
    foreach ($filmes as &$filme) {
        if ($filme["id"] == $id) {
            $filme["titulo"] = $novoTitulo;
            $filme["ano"] = $novoAno;
            break;
        }
    }
}

// Função para deletar filme
function deletarFilme(&$filmes, $id) {
    foreach ($filmes as $key => $filme) {
        if ($filme["id"] == $id) {
            unset($filmes[$key]);
            break;
        }
    }
}

// Exemplo de uso
listarFilmes($filmes);
adicionarFilme($filmes, "Batman Begins", 2005);
atualizarFilme($filmes, 2, "O Senhor dos Anéis: A Sociedade do Anel", 2001);
deletarFilme($filmes, 1);

echo "<hr>";
listarFilmes($filmes);
?>
