<?php

namespace App\Actions;

use Goutte\Client;

class SearchCompanies
{
    /**
     * @param Goutte\Client gouteCliente
     */
    private readonly Client $gouteCliente;

    private string $search = "https://www.google.com/search?q=Lista+de+empresas+de+tecnologia+em+Angola";

    public function __construct(Client $gouteCliente)
    {
        $this->gouteCliente = $gouteCliente;
    }

    /**
     * Metodo Principal
     * @return void
     */
    public function handle()
    {
        $crawler = $this->gouteCliente->request('GET', $this->search)
               ->filter('body')->children('div.MjjYud')->each(function($node){
                     return $node->text();
               });

        print_r($crawler);
    }
}
