# Routes - For IO CMS

```php
route("search/:all", function($matches) {
  return render('--search', $matches[1]);
  die;
});
```

## Requirements

- https://github.com/io-cms/components
- https://github.com/io-cms/path