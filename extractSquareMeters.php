# Extract Square Meters from Real Estate Listings

## Description
This PHP function extracts the square meters (`м²`) from a real estate listing description.

## Features
- Supports various formats, e.g.:
  - `"Квартира-студия, 77,1 м², 2/17 эт."` → `77,1 м²`
  - `"2-к. квартира, 65 м², 7/9 эт."` → `65 м²`
- Works with both integer and decimal numbers.

## Usage

### Install
Simply include the function in your PHP project.

### Example Code
```php
require 'extractSquareMeters.php';

$input = "Квартира-студия, 77,1 м², 2/17 эт.";
$result = extractSquareMeters($input);
echo $result; // Output: 77,1 м²
