<?php

namespace App\Services;

class CalculatorService
{
    public function evaluate(string $expression): float|string
    {
        // Nettoyage de l'expression : autorise uniquement chiffres, opérateurs et point
        $expression = preg_replace('#[^0-9+\-*/.]#', '', $expression);

        // Rejeter les opérateurs consécutifs (ex: ++, **)
        if (preg_match('#[+\-*/]{2,}#', $expression)) {
            return 'Syntaxe invalide';
        }

        try {
            $result = eval("return $expression;");
            return is_numeric($result) ? (float) $result : 'Erreur de calcul';
        } catch (\Throwable) {
            return 'Erreur de calcul';
        }
    }
}
