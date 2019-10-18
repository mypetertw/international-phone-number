# international-phone-number
### Php script to make phone number as international usage.

---

## Getting Started

Put `International-Phone-Number.php` to your project.

## Usage

Include `International-Phone-Number` function to your website.

```php
STR_REPLACE_INTERNATIONAL(0, '+1', '012345678', 1);
```

Output:

```html
+112345678
```

Restore your phone number without `+`.

```php
STR_REPLACE_RESTORE('+1', 0, '012345678', 2);
```

Output:

```html
012345678
```
