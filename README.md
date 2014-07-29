Craft-TwigTypeTest
==================

Test if a Twig Variable is of a certain type in Craft-CMS.


##Usage:

####Test: ```of_type('test_name')```

Check if a variable is of a specific type.

```twig
{% set test_var = craft.entries %}

{% if test_var is of_type('object') %}
  true
{% endif %}
```

**Available Tests:**

 - [array](http://php.net/manual/en/function.is-array.php)
 - [bool](http://php.net/manual/en/function.is-bool.php)
 - [float](http://php.net/manual/en/function.is-float.php)
 - [int](http://php.net/manual/en/function.is-int.php)
 - [numeric](http://php.net/manual/en/function.is-numeric.php)
 - [object](http://php.net/manual/en/function.is-object.php)
 - [scalar](http://php.net/manual/en/function.is-scalar.php)
 - [string](http://php.net/manual/en/function.is-string.php)


####Filter: ```get_type```

Return the type of a variable.

```twig
{% set test_var = craft.entries %}

{{ test_var|get_type }}
```
will output:
``` object ```


##Install:

1. Move the `twigtypetest` directory into the `craft/plugins/` directory.
2. Go to Settings -> Plugins and enable 'Twig Type Tests'.
