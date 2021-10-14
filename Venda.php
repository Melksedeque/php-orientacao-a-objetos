<?php

declare(strict_types=1);

class Venda
{
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;
    
    public function __construct(
        string $data,
        string $produto,
        int $quantidade,
        float $valorTotal
    ) {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function dadosVenda(): string
    {
        return 'Os dados da venda são:<br><br>
        Data: ' . $this->data . '<br>'.
        'Produto: ' . $this->produto . '<br>'.
        'Quantidade: ' . $this->quantidade . '<br>'.
        'Preço: ' . $this->valorTotal;
    }
}

$venda = new Venda(
    '14/10/2021',
    'Camiseta Nerd',
    2,
    49.90,
);

echo $venda->dadosVenda()."<br><br>";

?>