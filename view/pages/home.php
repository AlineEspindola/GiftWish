<h1 class="mx-auto animate__animated animate__bounceInDown">Transforme seus 💚 Desejos em Presentes Memoráveis 🎅🏼</h1>
<p class="mx-auto animate__animated animate__bounceInLeft animate__delay-1s">Crie sua lista de desejos publicamente, permitindo que amigos e familiares escolham presentes perfeitos sem constrangimentos</p>

<input class="form-control mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pesquise seu presente...">

<div id="items">
<?php

$count = 0;

foreach ($items as $item) {
    echo "<div class='row mx-auto'>";
    echo "<div class='col'><h2>". $item['nome'] ."</h2></div>";
    echo "<div class='col'><h2>Categoria</h2></div>";
    echo "<div class='col desire_level'><h2>Nível de Desejo</h2></div>";
    echo "<div class='col average_price'><h2>Média de Preço</h2></div>";
    echo "<div class='w-100'></div>";
    echo "<div class='col'><p>". $descriptions[$count]['descricao'] ."...</p></div>";
    echo "<div class='col'><p>". $item['categoria'] ."</p></div>";
    echo "<div class='col desire_level'><p>". $item['nivel_desejo'] ."</p></div>";
    echo "<div class='col average_price'><p>R$". $item['media_preco'] ."</p></div>";
    echo "</div>";
    
    $count+=1;
}

?>
</div>
