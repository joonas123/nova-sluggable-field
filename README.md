# Laravel Nova Sluggable Field

Simple Laravel Nova Slug field. Generating a slugified version of a text 
input. See the result of the slug  while typing.

**This is just copy from https://github.com/benjaminhirsch/nova-slug-field with small changes. It is advisable to use original package**


## Installation

In order to use this package, you need a Laravel installation which uses [Nova](https://nova.laravel.com).

**Composer**

```bash
composer require joonas1234/nova-sluggable-field
```

## Usage
Define the following fields in your resource in the ```fields``` method:
```
use Joonas1234\NovaSluggableField\Slug;
use Joonas1234\NovaSluggableField\TextWithSlug;

...

TextWithSlug::make('Name')
    ->slug('slug'),

Slug::make('Slug'),
```

##### Slug with a preview of the generated URL
This will display the full URL including the generated slug as a link below the input field.
```
use Joonas1234\NovaSluggableField\Slug;
use Joonas1234\NovaSluggableField\TextWithSlug;

...

TextWithSlug::make('Name')
    ->slug('slug'),

Slug::make('Slug')
    ->showUrlPreview('http://www.foo.bar'),
```

##### Slug with disabled auto update
This is especially useful, when you are updating the field which the slug belongs to and don't wan't the slug to be updated automatically.
```
use Joonas1234\NovaSluggableField\Slug;
use Joonas1234\NovaSluggableField\TextWithSlug;

...

TextWithSlug::make('Name')
    ->slug('slug'),

Slug::make('Slug')
    ->disableAutoUpdateWhenUpdating(),
```

This first field definition is the field which you want to create the slug of. The second field 
definition represents the slugified version. With the ```->slug('name')``` method, you  define 
the name of the field which holds the slug. It is possible to create multiple slugs on a single
resource, just add more field definitions. Every ```TextWithSlug``` field needs a  corresponding
```Slug``` field.

##### Slug with prefix
This will add prefix to url. 
```
use Joonas1234\NovaSluggableField\Slug;
use Joonas1234\NovaSluggableField\TextWithSlug;

...

TextWithSlug::make('Name')
    ->slug('slug'),

Slug::make('Slug')
    ->slugPrefix('baz'),