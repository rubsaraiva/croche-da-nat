<?php

namespace app\classes;
/**
 * Gerencia os tipos de entrada GET e POST
 */

class input
{
    /**
     * Faz uma requisição do tipo GET
     * Summary of get
     * @param string $param Nome da variável ou da query
     * @param int $filter Constante com o filtro para a variável
     * @return string Retorna false se não encontrar ou o conteúdo encontrado
     */
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING) : string
    {
        return filter_input(INPUT_GET, $param, $filter);
    }
        /**
     * Faz uma requisição do tipo POST
     * Summary of post
     * @param string $param Nome da variável ou da query
     * @param int $filter Constante com o filtro para a variável
     * @return string Retorna false se não encontrar ou o conteúdo encontrado
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING) : string
    {
        return filter_input(INPUT_POST, $param, $filter);
    }
}