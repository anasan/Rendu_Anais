https://travis-ci.org/anasan/Rendu_Anais.svg?branch=master

# Validator data

This lib can validate multiple data

## Integer validator

This lib can validate multiple integer data

```php
   public static function equal($nbr,$nbr2)
    {
        if (!is_int($nbr) || !is_int($nbr2))
            throw new \Exception("Params they must be numbers");

        return ($nbr == $nbr2) ? true : false;
    }
```