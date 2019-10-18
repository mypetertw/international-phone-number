# international-phone-number

---

## Getting Started

Put `International-Phone-Number.php` to your project.

## Usage

Include `HTTP_REQUEST` function and `Post` your `$data` with json

```php
$data = [
    'id' => $id,
    'field' => $field
];
$data = HTTP_REQUEST('<https-api-url>', json_encode($data));
```

Render data

```php
echo $data['message']
```

Render array data

```php
foreach ($data as $value) {
    echo $value['message'];
}
```
