<?php
/**
 * Извлекает площадь (м²) из строки объявления о недвижимости.
 *
 * @param string $input Входная строка (например, "Квартира-студия, 77,1 м², 2/17 эт.")
 * @return string|null Найденная площадь (например, "77,1 м²") или null, если не найдено.
 */
function extractSquareMeters(string $input): ?string {
    preg_match('/\d+,?\d* м²/', $input, $matches);
    return $matches[0] ?? null;
}

// Пример использования
$example1 = "Квартира-студия, 77,1 м², 2/17 эт.";
$example2 = "2-к. квартира, 65 м², 7/9 эт.";

echo extractSquareMeters($example1) . PHP_EOL; // 77,1 м²
echo extractSquareMeters($example2) . PHP_EOL; // 65 м²
?>
