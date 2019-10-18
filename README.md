# international-phone-number
### Php script to make phone number as international usage.

---

## Getting Started

- Put `International-Phone-Number.php` to your project.
- Include `International-Phone-Number` function to your website.

## Usage

```php
STR_REPLACE_INTERNATIONAL('0', '+1', '012345678', 1);
```

Output:

```html
+112345678
```

Restore your international phone number without `+1`.

```php
STR_REPLACE_RESTORE('+1', '0', '012345678', 2);
```

Output:

```html
012345678
```

## Tips

- `$RANGE` is the number of length to choose to replace.
- `$NUMBER` is the phone number you want to convert.
- You can change the length of `$RANGE` as needed.
- Depending on the length `$RANGE` you decided, start from `left` to `right`.
