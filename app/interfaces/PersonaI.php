<?php 

interface PersonasI{

    static function personas_get();
    static function persona_get(int $id): array;
    static function persona_delete(int $id): array;
    static function persona_post(array $body): array;
    static function persona_put(array $body, int $id): array;
}


?>